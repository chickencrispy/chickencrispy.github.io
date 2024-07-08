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
        <a href="./checkout.php" class="text-nowrap">Checkout</a>
        <i class="fi fi-rr-angle-small-right mx-1"></i>
        <span class="text-nowrap">Medical Travel</span>
      </div>
    </div>

    <div class="row g-0">
      <div class="col-md-8">
        <div id="medical-travel" class="p-4 bg-white border rounded-normal mb-3">
          <div class="mb-4">
            <h6 class="fw-bold">TRANSFER BANK BALI</h6>
                <ul class="list-group-borderless">
                  <li class="list-group-item">
                    <label class="d-flex gap-2">
                      <span>ACCOUNT BANK :</span>
                      <span>4123123123</span>
                    </label>
                  </li>  
                  <li class="list-group-item">
                    <label class="d-flex gap-2">
                      <span>ACCOUNT NAME :</span>
                      <span>PT. BANYU MILIR</span>
                    </label>
                  </li>   
                  <li class="list-group-item">
                    <label class="d-flex gap-2">
                      <span>TOTAL PAYMENT:</span>
                      <span>1.200.345</span>
                    </label>
                  </li>           
                </ul>
            </div>

            <div class="mb-4">
            <h6 class="fw-bold">PAY BY XENDIT</h6>
                <ul class="list-group-borderless">
                  <li class="list-group-item">
                    <label class="d-flex gap-2">
                      <span>TOTAL PAYMENT :</span>
                      <span><a href="#"> 1.200.000,00 - click here</a></span>
                    </label>
                  </li>            
                </ul>
            </div>

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
            <button class="btn btn-primary py-3 text-xs rounded-normal">Continue</button>
          </div>
        </div>
      </div>

    </div>

  </div>

<?php
  include './component/footer.php';
?>