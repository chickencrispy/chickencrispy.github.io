<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wisata Banyu Milir</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/uicons-rounded.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/date-picker.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="app-home-header">
    <div class="backdrop">
      <video autoplay muted loop>
        <source src="videos/home_banner.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="container px-0">
      <div class="home-top-header">
        <div class="top-header-location"></div>
        <div class="d-flex">
          <button class="btn btn-notif text-light"><i class="fi fi-rr-bell"></i><span class="dot"></span></button>
          <button class="btn btn-notif text-light"><i class="fi fi-rr-shopping-cart"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-dark text-light">
    <div class="container px-0">
      <div class="p-3">
        <h3 class="py-2 text-uppercase text-serif">The Hidden Light <br> From The Middle <br> of the Sea "Banyumilir"</h3>
      </div>
    </div>
  </div>

  <div class="container px-0">
    <div class="p-3">
      <h6 class="mb-2">Available ticket(s) for you</h6>

      <div class="d-flex gap-2 mb-1">
        <button class="btn btn-outline-primary bg-primary-subtle btn-calendar">
          <i class="fi fi-rr-calendar"></i>
          <div class="d-none d-lg-inline ms-1">See Calendar</div>
          <div class="d-block d-sm-none"><i class="fi fi-rr-angle-small-down"></i></div>
        </button>

        <div class="calendar-dates">
          <div class="dates-boxed">
            <small class="text-muted">Today</small>
            <strong>24 May</strong>
          </div>
          <div class="dates-boxed">
            <small class="text-muted">Sat</small>
            <strong>25 May</strong>
          </div>
          <div class="dates-boxed">
            <small class="text-muted">Sun</small>
            <strong>26 May</strong>
          </div>
          <div class="dates-boxed">
            <small class="text-muted">Mon</small>
            <strong>27 May</strong>
          </div>
          <div class="dates-boxed">
            <small class="text-muted">Tue</small>
            <strong>28 May</strong>
          </div>
          <div class="dates-boxed">
            <small class="text-muted">Wed</small>
            <strong>29 May</strong>
          </div>
          <div class="dates-boxed">
            <small class="text-muted">Thu</small>
            <strong>30 May</strong>
          </div>
          <div class="dates-boxed">
            <small class="text-muted">Fri</small>
            <strong>31 May</strong>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    include("./backend/front_be.php");
  ?>

  <section class="bg-primary mb-3" style="background-image: url(https://t4.ftcdn.net/jpg/04/06/23/25/360_F_406232562_fYs0cUQUKqL22IATq1q6XKCcInfGsE7O.jpg);">
    <div class="container px-0">
      <div class="p-3">
        <div class="py-0 py-lg-5">
          <div class="row g-3 justify-content-end">
            <div class="col-md-6">
              <div id="package" class="row g-3 h-100">
                <?php
                  print_r($json_cfg_packet);
                  foreach($json_cfg_packet->number as $mydata) {
                    echo $mydata->name . "\n";
                    
                    foreach($mydata->category_packet as $values) {
                      echo $values->value . "\n";
                    }
                  } 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="container px-0 d-none">
    <section class="p-3">
      <h3 class="py-2 text-uppercase text-serif mb-3">The Hidden Light <br> From The Middle <br> of the Sea "Banyumilir"</h3>

      <div class="mb-3">
        <div class="row g-3">
          
          <div class="col-md-6">
            <div class="card h-100 overflow-hidden">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLMAVdhsS0nLKsB6vsbEYAv-XjE1AO3za77ADKJD6bSw&s" class="w-100 h-100">
              <div class="position-absolute start-0 end-0 bottom-0 p-2">
                <div class="p-3 bg-white rounded-3">
                  <h5 class="mb-0 text-prata text-uppercase">Dive Package</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row g-3 h-100">
              <div class="col-12">
                <div class="card p-3 h-100">
                  <h6 class="mb-3">Lovina Reef 2x Dive + 1x Night Dive</h6>
                  <div class="mt-auto d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 pt-1 text-prata"><sup>IDR</sup> 1.250 K</h4>
                    <div>
                      <button class="btn btn-light border"><i class="fi fi-rr-shopping-cart-add"></i></button>
                      <button class="btn btn-primary text-sm">Select Ticket</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card p-3 h-100">
                  <h6 class="mb-3">Lovina Reef 1x Dive + 1x Night Dive</h6>
                  <div class="mt-auto d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 pt-1 text-prata"><sup>IDR</sup> 1.125 K</h4>
                    <div>
                      <button class="btn btn-light border"><i class="fi fi-rr-shopping-cart-add"></i></button>
                      <button class="btn btn-primary text-sm">Select Ticket</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="card p-3 h-100">
                  <h6 class="mb-3">Lovina Reef 1x Dive</h6>
                  <div class="mt-auto d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 pt-1 text-prata"><sup>IDR</sup> 800 K</h4>
                    <div>
                      <button class="btn btn-light border"><i class="fi fi-rr-shopping-cart-add"></i></button>
                      <button class="btn btn-primary text-sm">Select Ticket</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="card p-3 h-100">
                  <h6 class="mb-3">Lovina Reef 1x Dive + 1x Night Dive</h6>
                  <div class="mt-auto d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 pt-1 text-prata"><sup>IDR</sup> 950 K</h4>
                    <div>
                      <button class="btn btn-light border"><i class="fi fi-rr-shopping-cart-add"></i></button>
                      <button class="btn btn-primary text-sm">Select Ticket</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/date-picker.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    const packageEl = document.getElementById("package");
    // Fungsi untuk mengambil data JSON dari file PHP
    async function fetchData() {
      try {
        const response = await fetch('./backend/front_be.php?cat=diving');
        if (!response.ok) {
          throw new Error('Network response was not ok ' + response.statusText);
        }
        const data = await response.json();
        displayData(data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    }

    function formatToK(numberString) {
      const number = parseInt(numberString, 10);
      if (number < 1000) {
        return numberString;
      }
      const formattedNumber = (number / 1000).toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 3 });
      return formattedNumber + 'K';
    }

    function displayData(data) {
      const userList = document.getElementById('userList');
      data.forEach(data => {
        let formattedString = formatToK(data.price_packet);

        const newPackage = document.createElement("div");
        newPackage.innerHTML = `<div class="col-12"><div class="card p-3 h-100"><h6 class="mb-1 text-lg"><strong>LOVINA REEF</strong><span>2x Dive + 1x Night Dive</span></h6><div class="mb-2 text-sm"><a href="#">See details</a></div><div class="mt-auto d-flex align-items-center justify-content-between"><div class="price d-flex align-items-baseline gap-1 text-danger"><span class="text-sm">IDR</span><h4 class="mb-0 pt-1 fw-bold">1.250K</h4></div><div><button class="btn btn-light border"><i class="fi fi-rr-shopping-cart-add"></i></button><button class="btn btn-primary text-sm">Select Ticket</button></div></div></div></div>`;
        newPackage.querySelector("h6 strong").textContent = data.title_packet;
        newPackage.querySelector("h6 span").textContent = data.subtitle_packet;
        newPackage.querySelector("h4").textContent = formattedString;
        packageEl.append(newPackage);
      });
    }

    window.onload = fetchData;
  </script>
</body>
</html>