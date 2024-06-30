const topHeaderLocation = document.querySelector(".top-header-location");
const calendarDates = document.querySelector(".calendar-dates");

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

  if(guestList){
    btnNumber.forEach(btn => {
      btn.addEventListener("click", () => {
        guestListsConf(inputNumber.value);
      });
    });
  }
});

function guestListsConf(e) {
  const newGuestList = guestList.querySelector(".list-group-item").cloneNode(true);
  newGuestList.querySelector("label").textContent = "Guest Name " + e;

  if(e > guestList.children.length) {
    guestList.appendChild(newGuestList);
  }else{
    if(guestList.children.length > 1) {
      guestList.removeChild(guestList.lastChild);
    }
  }
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