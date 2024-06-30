<?php
  include './component/head.php';
  include './component/navbar.php';
?>

  <div class="container">
    <div class="breadcrumb p-3 bg-secondary-subtle mt-3 rounded-5">
      <div class="d-flex align-items-center">
        <a href="#" class="text-nowrap">Home</a>
        <i class="fi fi-rr-angle-small-right mx-1"></i>
        <a href="#" class="text-nowrap">Book Now</a>
        <i class="fi fi-rr-angle-small-right mx-1"></i>
        <span class="text-nowrap">Checkout</span>
      </div>
    </div>

    <div class="row g-3">
      <div class="col-md-4">
        <div class="position-sticky top-3 p-3 bg-secondary-subtle rounded-normal">
          <h6 class="fw-bold">Available Package</h6>
          <ul class="list-group list-group-options">
            <li class="list-group-item toggle-show">
              <label><input type="checkbox" class="d-none"></label>
            </li>

            <li class="list-group-item">
              <label class="label-select w-100">
                <input type="radio" name="dolphine-package" id="" class="d-none form-check-input">
                <strong>Dolphine Tour Regular</strong>
                <h5>IDR 150.000</h5>
                <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis est magnam voluptatem tempore!</div>
              </label>
            </li>
            <li class="list-group-item">
              <label class="label-select w-100">
                <input type="radio" name="dolphine-package" id="" class="d-none form-check-input">
                <strong>Dolphine Tour & Snorkeling Regular</strong>
                <h5>IDR 250.000</h5>
                <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis est magnam voluptatem tempore!</div>
              </label>
            </li>
            <li class="list-group-item">
              <label class="label-select w-100">
                <input type="radio" name="dolphine-package" id="" class="d-none form-check-input">
                <strong>Dolphine Tour Private</strong>
                <h5>IDR 300.000</h5>
                <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis est magnam voluptatem tempore!</div>
              </label>
            </li>
            <li class="list-group-item">
              <label class="label-select w-100">
                <input type="radio" name="dolphine-package" id="" class="d-none form-check-input">
                <strong>Dolphine Tour & Long Trip Snorkeling</strong>
                <h5>IDR 500.000</h5>
                <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis est magnam voluptatem tempore!</div>
              </label>
            </li>

            <li class="list-group-item note">
              <div class="text-xs">
                The price are include: <br> Life Jacket, Transport Boat, Guide and Entrance Fee
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-8">
        <div id="customer-contact" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Customer Contact</h6>
          <ul class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Full Name</label>
              <input type="text" name="" id="" class="form-control">
            </li>
            <li class="list-group-item">
              <label for="">Email</label>
              <input type="email" name="" id="" inputmode="email" class="form-control">
            </li>
            <li class="list-group-item">
              <label for="">Phone Number</label>
              <input type="tel" name="" id="" inputmode="tel" class="form-control">
            </li>
          </ul>
        </div>

        <div id="date-time" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Date and Time</h6>
          
          <ul class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Select Date</label>
              <input type="date" name="" id="" class="form-control min-today">
            </li>
            <li class="list-group-item">
              <label for="">Select Time</label>
              <div class="d-flex flex-nowrap overflow-auto gap-2">
                <label class="label-check border p-2 text-nowrap rounded-4 text-center">
                  <input type="radio" name="times" id="" class="d-none">
                  <span>06.00 - 08.00</span>
                </label>
                <label class="label-check border p-2 text-nowrap rounded-4 text-center">
                  <input type="radio" name="times" id="" class="d-none">
                  <span>09.00 - 11.00</span>
                </label>
                <label class="label-check border p-2 text-nowrap rounded-4 text-center">
                  <input type="radio" name="times" id="" class="d-none">
                  <span>14.00 - 16.00</span>
                </label>
                <label class="label-check border p-2 text-nowrap rounded-4 text-center">
                  <input type="radio" name="times" id="" class="d-none">
                  <span>17.00 - 19.00</span>
                </label>
              </div>
            </li>
          </ul>
        </div>

        <div id="guest-details" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Guest Details</h6>
          
          <ul class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Number of guests</label>
              <div class="input-number-button">
                <button class="btn btn-secondary"><i class="fi fi-rr-minus"></i></button>
                <input type="number" class="form-control" data-low="1">
                <button class="btn btn-secondary"><i class="fi fi-rr-plus"></i></button>
              </div>
            </li>
          </ul>

          <ul id="list-guests" class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Guest Name 1</label>
              <input type="text" name="" id="" class="form-control">
            </li>
          </ul>
        </div>

        <div id="tour-guide" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Tour Guide</h6>
          <p class="text-xs text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam officia ipsam accusantium delectus laudantium et provident veniam officiis atque?</p>
          <ul class="list-guide overflow-auto">
            <li>
              <label class="guide-box">
                <div class="tag">
                  <i class="fi fi-sr-thumbs-up"></i> Recommend
                </div>
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://i.pinimg.com/originals/d1/34/db/d134db0516ffd9361d63901e13c78bb3.jpg" alt="Guide 1">
                <h6>Jack Sparrow</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://i.pinimg.com/474x/ec/ce/c8/eccec8817c5d0391e030d86c7de07df6.jpg" alt="Guide 1">
                <h6>Hector Barbossa</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://www.piratesinfo.com/media/qsjpt45d/annebonny.jpg" alt="Guide 1">
                <h6>Anne Bonny</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://www.lamar.edu/_files/images/news/2016/09/Phillips_Richard_Captain%20Web.jpg" alt="Guide 1">
                <h6>Richard Phillips</h6>
              </label>
            </li>

            <li>
              <a href="#" class="p-3 text-center text-sm">More</a>
            </li>
          </ul>
        </div>

        <div id="additional" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Additional</h6>
          <p class="text-xs text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam officia ipsam accusantium delectus laudantium et provident veniam officiis atque?</p>

          <ul class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Transportation</label>
              <select name="" id="" class="form-select">
                <option value="">No</option>
                <option value="">Yes</option>
              </select>
            </li>
            <li class="list-group-item">
              <label for="">Pickup Area</label>
              <select name="" id="" class="form-select">
                <option value="" hidden></option>
                <option value="">Singaraja Area</option>
                <option value="">Outside Singaraja</option>
              </select>
            </li>
            <li class="list-group-item">
              <label for="">Location Name</label>
              <input type="tel" name="" id="" inputmode="tel" class="form-control">
            </li>
          </ul>
        </div>

        <div id="summary" class="p-3 bg-white border rounded-normal mb-3">
          <div class="d-flex">
            <div>
              <div>Total</div>
              <h6 class="fw-bold">IDR 1.000.000</h6>
            </div>
            <button type="button" class="btn btn-primary btn-sm ms-auto">Proceed</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include './component/footer.php';
?>