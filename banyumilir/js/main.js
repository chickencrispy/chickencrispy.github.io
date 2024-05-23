const topHeaderLocation = document.querySelector(".top-header-location");

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
    (error) => alert("Please allow location access for best experiences")
  )
}

if(topHeaderLocation) { getCurrentLocation(); }