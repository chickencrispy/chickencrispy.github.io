<?php
  include './component/head.php';
  include './component/navbar.php';
?>

  <div class="container">
    <div class="breadcrumb py-2 mt-3">
      <div class="d-flex align-items-center">
        <a href="#" class="text-nowrap">Home</a>
        <i class="fi fi-rr-angle-small-right mx-1"></i>
        <a href="#" class="text-nowrap">Select Package</a>
        <i class="fi fi-rr-angle-small-right mx-1"></i>
        <span class="text-nowrap">Checkout</span>
      </div>
    </div>

    <div class="row g-0">
      <div class="col-md-8">

        <!-------COSTUMER CONTACT------------>
        <div id="customer-contact" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Customer Contact</h6>
          <ul class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Full Name</label>
              <input type="text" name="guest_name" id="guest_name" class="form-control">
            </li>
            <li class="list-group-item">
              <label for="">Email</label>
              <input type="email" name="guest_email" id="guest_email" inputmode="email" class="form-control">
            </li>
            <li class="list-group-item">
              <label for="">Phone Number</label>
              <input type="tel" name="guest_phone" id="guest_phone" inputmode="tel" class="form-control">
            </li>
          </ul>
        </div>

        <!---------DATE AND TIME PACKAGE---------------->
        <div id="date-time" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Date and Time</h6>
          
          <ul class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Select Date</label>
              <input type="date" name="date_checkin" id="date_checkin" class="form-control min-today">
            </li>
            <li class="list-group-item">
              <label for="">Select Time</label>
              <div class="d-flex flex-nowrap overflow-auto gap-2">
                <label class="label-check border p-2 text-nowrap rounded-normal text-center">
                  <input type="radio" name="package_time" id="package_time" class="d-none">
                  <span>06.00 - 08.00</span>
                </label>
                <label class="label-check border p-2 text-nowrap rounded-normal text-center">
                  <input type="radio" name="package_time" id="package_time" class="d-none">
                  <span>09.00 - 11.00</span>
                </label>
                <label class="label-check border p-2 text-nowrap rounded-normal text-center">
                  <input type="radio" name="package_time" id="package_time" class="d-none">
                  <span>14.00 - 16.00</span>
                </label>
                <label class="label-check border p-2 text-nowrap rounded-normal text-center">
                  <input type="radio" name="package_time" id="package_time" class="d-none">
                  <span>17.00 - 19.00</span>
                </label>
              </div>
            </li>
          </ul>
        </div>

        <!--------GUEST DETAIL------------------>
        <div id="guest-details" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Guest Details</h6>
          <ul class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Number of guests</label>
              <div class="input-number-button">
                <button class="btn btn-secondary"><i class="fi fi-rr-minus"></i></button>
                <input type="number" name="guest_amount" id="guest_amount" class="form-control" data-low="1">
                <button class="btn btn-secondary"><i class="fi fi-rr-plus"></i></button>
              </div>
            </li>
          </ul>

          <ul id="list-guests" class="list-group list-group-borderless list-group-1/3">
            <li class="list-group-item">
              <label for="">Guest Name 1</label>
              <input type="text" name="guest_add_name[]" id="" class="form-control">
            </li>
          </ul>
        </div>

        <!--------TOUR GUIDE------------------>
        <div id="tour-guide" class="p-3 bg-white border rounded-normal mb-3">
          <h6 class="fw-bold">Tour Guide</h6>
          <p class="text-xs text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam officia ipsam accusantium delectus laudantium et provident veniam officiis atque?</p>
          <ul class="list-guide overflow-auto">
            <li>
              <label class="guide-box">
                <div class="tag">
                  <i class="fi fi-sr-thumbs-up"></i> Recommend
                </div>
                <input type="radio" name="captain_id" id="captain_id" class="d-none">
                <img src="https://i.pinimg.com/originals/d1/34/db/d134db0516ffd9361d63901e13c78bb3.jpg" alt="Guide 1">
                <h6>Jack Sparrow</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="captain_id" id="captain_id" class="d-none">
                <img src="https://i.pinimg.com/474x/ec/ce/c8/eccec8817c5d0391e030d86c7de07df6.jpg" alt="Guide 1">
                <h6>Hector Barbossa</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="captain_id" id="captain_id" class="d-none">
                <img src="https://www.piratesinfo.com/media/qsjpt45d/annebonny.jpg" alt="Guide 1">
                <h6>Anne Bonny</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="captain_id" id="captain_id" class="d-none">
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
            <!----li class="list-group-item">
              <label for="">Pickup Area</label>
              <select name="" id="" class="form-select">
                <option value="" hidden></option>
                <option value="">Singaraja Area</option>
                <option value="">Outside Singaraja Area</option>
              </select>
            </li---->
            <li class="list-group-item">
              <label for="">Location Name</label>
              <input type="tel" name="" id="" inputmode="tel" class="form-control">
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div id="summary" class="position-sticky top-3 ps-0 ps-sm-4 bg-light">
          <div class="package-info mb-4">
            <img src="https://res.klook.com/image/upload/c_fill,w_1265,h_712/q_80/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/waqymbchzuiollxqhr4u.webp">
            <div class="details">
              <h6>Dolphine Tour Private</h6>
              <small>IDR 300.000</small>
            </div>
          </div>
          <div class="summary">
            <h6 class="pb-2 fw-semibold text-md border-bottom">Your Trip Summary</h6>
            <ul class="list-group list-group-light list-group-small mb-3">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="text-sm text-muted">Date</div>
                  <div class="ms-auto">October 15, 2022</div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="text-sm text-muted">Time</div>
                  <div class="ms-auto">09.00 - 11.00</div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="text-sm text-muted">Guests</div>
                  <div class="ms-auto">1 person</div>
                </div>
              </li>
            </ul>

            <h6 class="pb-2 fw-semibold text-md border-bottom">Pricing Breakdown</h6>
            <ul class="list-group list-group-light list-group-small mb-3">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="text-sm text-muted">Ticket price x 1</div>
                  <div class="ms-auto">IDR 1.000.000</div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="text-sm text-muted">Transportation</div>
                  <div class="ms-auto">IDR 100.000</div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="text-sm text-muted">Service fee</div>
                  <div class="ms-auto">IDR 100.000</div>
                </div>
              </li>
            </ul>

            <hr class="my-2">
            <ul class="list-group list-group-light list-group-small mb-3">
              <li class="list-group-item">
                <div class="d-flex align-items-center fw-bold">
                  <div class="text-sm text-muted">Total before taxes</div>
                  <div class="ms-auto">IDR 1.200.000</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="d-grid pb-3">
            <button class="btn btn-primary py-3 text-xs rounded-normal" onclick="javascript:location.href='./medical_travel.php'">Continue</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include './component/footer.php';
?>