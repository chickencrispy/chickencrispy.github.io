const topHeaderLocation = document.querySelector(".top-header-location");
const calendarDates = document.querySelector(".calendar-dates");

const customerContact = document.getElementById("customer-contact");
const dateTime = document.getElementById("date-time");
const additional = document.getElementById("additional");
const summary = document.getElementById("summary");

if(summary){
  var summaryInfo = summary.querySelectorAll(".summary-info .list-group-item");
  var summaryPrice = summary.querySelectorAll(".summary-price .list-group-item");
  var summaryTotal = summary.querySelectorAll(".summary-total .list-group-item");
}

function getCurrentLocation() {
  navigator.geolocation.getCurrentPosition(
    (success) => {
      const latitude  = success.coords.latitude;
      const longitude = success.coords.longitude;

      fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`)
        .then((e) => e.json())
        .then((result) => {
          console.log(result);
          var currentLocation = result.address.city +", "+ result.address.country;
          topHeaderLocation.innerHTML = `<i class="fi fi-rr-marker"></i> <span>${currentLocation}</span>`;
        })
    },
    (error) => console.log("Please allow location access for best experiences")
  )
}

function selectCalendarBoxed() {
  const dateBoxed = calendarDates.querySelectorAll(".dates-boxed");

  dateBoxed.forEach(dateBox => {
    dateBox.addEventListener("click", () => {
      dateBoxed.forEach(box => box.classList.remove("selected"));
      dateBox.classList.add("selected");
    });
  });
}

if(topHeaderLocation) { getCurrentLocation(); }
if(calendarDates) { selectCalendarBoxed(); }

const inputNumberButton = document.querySelectorAll(".input-number-button");
const guestList = document.getElementById("list-guests");
inputNumberButton.forEach(number => {
  const btnNumber = number.querySelectorAll("button");
  const inputNumber = number.querySelector("input");
  const getPrice = inputNumber.dataset.price;
  const dataLow = inputNumber.dataset.low ? inputNumber.dataset.low : 0;
  const minNumber = btnNumber[0];
  const addNumber = btnNumber[1];

  inputNumber.setAttribute("readonly","true");
  inputNumber.value = dataLow;

  minNumber.addEventListener("click", () => {
    if(inputNumber.value > dataLow) {
      inputNumber.value--;
    }
  });

  addNumber.addEventListener("click", () => {
    inputNumber.value++;
  });

  if(guestList && summary){
    btnNumber.forEach(btn => {
      btn.addEventListener("click", () => {
        guestListsConf(inputNumber.value);
        summaryGuest(inputNumber.value,getPrice);
      });
    });
  }
});

function guestListsConf(e) {
  const newGuestList = guestList.querySelector(".list-group-item").cloneNode(true);
  const guestNote = newGuestList.querySelector(".guest-note");

  newGuestList.querySelector("label").textContent = "Guest Name " + e;
  Array.from(newGuestList.querySelectorAll("input")).forEach(input => input.value = "");
  guestNote.classList.add("d-none");

  if(e > guestList.children.length) {
    guestList.appendChild(newGuestList);
  }else{
    if(guestList.children.length > 1) {
      guestList.removeChild(guestList.lastChild);
    }
  }
}

function addGuestNote(e) {
  const guestNote = e.parentNode.nextElementSibling;
  guestNote.classList.remove("d-none");
}

function delGuestNote(e) {
  const guestNote = e.parentNode;
  guestNote.querySelector("input").value = "";
  guestNote.classList.add("d-none");
}

// SET INPUT MAX DAY TODAY FOR HISTORY
// Input date set default value today, and max date set today & show picker on focus
const dateToday = new Date().toISOString().split("T")[0];
document.querySelectorAll(".min-today").forEach(input => {
  input.value = dateToday;
  input.min = dateToday;
  input.addEventListener("focus", () => {
    input.showPicker();
  });
});

// AUTO SHOW PICKER ON INPUT DATE
document.querySelectorAll("input[type='date']").forEach(input => {
  input.addEventListener("focus", () => {
    input.showPicker();
  })
});

function formatDate(dateString) {
  const options = { day: '2-digit', month: 'short', year: 'numeric' };
  return new Date(dateString).toLocaleDateString('en-GB', options);
}

function formatCurrency(number) {
  return new Intl.NumberFormat('id', { 
    style: 'currency', 
    currency: 'IDR', 
    maximumFractionDigits: 0 
  }).format(number);
}

// CHECKOUT FUNCTION
if(customerContact) {
  const formField = customerContact.querySelectorAll(".list-group-item");
  const resvType = customerContact.querySelector("#resv-type");

  resvType.addEventListener("change", () => {
    const isAgent = resvType.value == "1";
    const agentField = formField[1];
    const inputField = agentField.querySelector("input");
    const labelField = formField[2].querySelector("label");

    agentField.classList.toggle("d-none", isAgent);
    inputField.disabled = isAgent;

    if(resvType.value == "1") {
      inputField.value = "";
      labelField.textContent = "Full Name";
    }else{
      labelField.textContent = "Person in charge";
    }
  });
}

if(dateTime) {
  const dates = dateTime.querySelector("#dates");
  const times = dateTime.querySelectorAll("input[name='times']");

  dates.addEventListener("change", () => {
    summaryInfo[0].children[1].textContent = formatDate(dates.value);
  });

  times.forEach(time => {
    time.addEventListener("change", () => {
      summaryInfo[1].children[1].textContent = time.nextElementSibling.textContent;
    });
  })
}

if(additional) {
  const formField = additional.querySelectorAll(".list-group-item");
  const addTransport = additional.querySelector("#transportation");
  const areaTransport = additional.querySelector("#transport-area");

  addTransport.addEventListener("change", () => {
    const isTransport = addTransport.value !== "yes";
    const transportFee = isTransport ? 0 : areaTransport.querySelector("option:checked").dataset.price;
    formField[1].classList.toggle("d-none", isTransport);
    formField[2].classList.toggle("d-none", isTransport);

    summaryTransport(isTransport,transportFee);
  });

  areaTransport.addEventListener("change", () => {
    const transportFee = areaTransport.querySelector("option:checked").dataset.price;
    summaryTransport(false,transportFee); 
  });
}

function summaryTransport(b,p){
  summaryPrice[1].classList.toggle("d-none", b);
  summaryPrice[1].children[1].textContent = formatCurrency(p);
  summaryTotalPrice();
}

function summaryGuest(g,p){
  summaryInfo[2].children[1].textContent = g + " person(s)";
  summaryPrice[0].children[0].textContent = `Ticket price x ${g}`;
  summaryPrice[0].children[1].textContent = formatCurrency(p * g);
  summaryTotalPrice();
}

function summaryTotalPrice(){
  const totalTicket = parseFloat((summaryPrice[0].children[1].textContent).replace(/\D/g, ''));
  const totalTransport = parseFloat((summaryPrice[1].children[1].textContent).replace(/\D/g, ''));
  const serviceFee = parseFloat((summaryPrice[2].children[1].textContent).replace(/\D/g, ''));
  const total = totalTicket + totalTransport + serviceFee;
  summaryTotal[0].children[1].textContent = formatCurrency(total);
}

summaryTotalPrice();