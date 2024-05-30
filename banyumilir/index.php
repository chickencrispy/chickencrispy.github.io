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
          <?php
            $today = new DateTime();
            $shortDays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

            for ($i = 0; $i <= 7; $i++) {
              $date = clone $today;
              $date->modify("+$i day");

              $dayName = ($i === 0) ? 'Today' : $shortDays[$date->format('w')];
              $formattedDate = $date->format('d F');
          ?>
            <div class="dates-boxed">
                <small class="text-muted"><?php echo $dayName; ?></small>
                <strong><?php echo $formattedDate; ?></strong>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php
    include("./backend/load_packages.php");
  ?>

  <section class="bg-primary mb-3" style="background-image: url(https://t4.ftcdn.net/jpg/04/06/23/25/360_F_406232562_fYs0cUQUKqL22IATq1q6XKCcInfGsE7O.jpg);">
    <div class="container px-0">
      <div class="p-3">
        <div class="py-0 py-lg-5">
          <div class="row g-3 justify-content-end">
            <div class="col-md-6">
              <div id="package" class="row g-3 h-100">
                <?php
                  // Decode JSON data into PHP array
                  //$data = json_decode($json_category, true);
                  foreach ($categories as $cat) {
                    if($cat['category'] == 'diving'){
                      foreach($cat['packages'] as $packages) {
                ?>
                        <div class="col-12">
                          <div class="card p-3 h-100">
                            <h6 class="mb-1 text-lg">
                              <strong><?php echo $packages['nama_paket']; ?></strong>
                              <span><?php echo $packages['subtitle_paket']; ?></span>
                            </h6>
                            <div class="mb-2 text-sm">
                              <a href="#">See details</a>
                            </div>
                            <div class="mt-auto d-flex align-items-center justify-content-between">
                              <div class="price d-flex align-items-baseline gap-1 text-danger">
                                <span class="text-sm">IDR</span>
                                <h4 class="mb-0 pt-1 fw-bold"><?php echo number_format($packages['harga_paket'], 0, ",", "."); ?></h4>
                              </div>
                              <div>
                                <button class="btn btn-light border"><i class="fi fi-rr-shopping-cart-add"></i></button>
                                <button class="btn btn-primary text-sm">Select Ticket</button>
                              </div>
                            </div>
                          </div>
                        </div>
                <?php
                      }
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
</body>
</html>