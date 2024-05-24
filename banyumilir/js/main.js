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