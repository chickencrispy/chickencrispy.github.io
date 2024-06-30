<?php
  include './component/head.php';
?>

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
  foreach ($categories as $cat) {
    if($cat['category'] != ''){
?>

<section class="packages">
  <div class="container px-0">
    <div class="p-3">
      <div class="py-0 py-lg-5">
        <div class="row g-3 justify-content-end">
          <div class="col-md-12">
            <div id="package" class="row g-3 h-100">
              <?php
                // Decode JSON data into PHP array
                //$data = json_decode($json_category, true);
                echo "<div class='col-12'><h1 class='text-light fw-bold'>".ucwords($cat['category'])."</h1></div>";
                foreach($cat['packages'] as $packages) {
              ?>
                  <div class="col-sm-6">
                    <div class="card p-3 h-100 rounded-4">
                      <img src="https://s3-us-west-2.amazonaws.com/imgds360live/product_images/3545461/part_images/open-water-diver.jpg_3545461_F74RCW0R5H" class="img-fluid mb-3 rounded-3">
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
                          <button class="btn btn-light"><i class="fi fi-rr-shopping-cart-add"></i></button>
                          <button class="btn btn-primary">Select Ticket</button>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    }
  }
?>

<?php
  include './component/footer.php';
?>