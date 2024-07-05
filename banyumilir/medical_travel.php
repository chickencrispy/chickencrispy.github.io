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
            <h6 class="fw-bold">Medical Traveler by POKMASWAS BANYUMILIR</h6>
            <ol>
              <li>If you have any pre-existing health conditions, such as a heart condition or respiratory condition, contact your tour operator before booking to determine whether you can safely do the tour. People who have or are susceptible to any of following health conditions should seek medical evaluation. This Medical Tour Participant Questionnaire provides a basis for deciding whether you should seek this evaluation.</li>
              <li>If you have any concerns about your suitability for snorkeling that are not listed on this form, consult your doctor before doing snorkeling. If you feel ill, avoid dolphin watching and snorkeling.</li>
              <li>If you think you may have a contagious disease, protect yourself and others by not participating in dolphin watching and snorkeling. This form is intended primarily as an initial medical evaluation for travelers going dolphin watching and snorkeling.</li>
              <li>If you decide to take your children on dolphin and snorkeling tour ensure they are fully briefed and know what they will be doing before entering the water. Children need constant adult supervision on board and in the water.</li>
            </ol>
            <p>To avoid putting yourself or others at risk, it is important to know how to use and feel comfortable with your equipment; otherwise, you could flood your mask or swallow nasty saltwater. This can be really scary and dangerous if you don’t know how to handle the situation!</p>
            <p>Most tour captain require you to be able to swim if you want to do snorkeling. Even if some activity providers let you sign up without knowing how to swim, don’t rely on guides to save you. You need to be responsible for yourself.</p>
            <p>Alcohol and ocean activities are not a good mix. Being under the influence can impair your swimming abilities and awareness, turning what should be a beautiful experience into a safety hazard.</p>
          </div>

          <div class="mb-4">
            <h6 class="mb-0 fw-bold">Ticketing General Requirement</h6>
            <p class="text-muted text-sm">Please check or not this questionnaire to complete this form:</p>

            <ul class="list-group list-group-borderless">
              <li class="list-group-item">
                <label class="d-flex gap-2">
                  <input type="checkbox" class="form-check-input form-check-small">
                  <span>I am over 45 years of age.</span>
                </label>
              </li>
              <li class="list-group-item">
                <label class="d-flex gap-2">
                  <input type="checkbox" class="form-check-input form-check-small">
                  <span>Be prepared to always use the personal safety equipment provided (Life jacket) & Personal belongings are the responsibility of each person individually.</span>
                </label>
              </li>
              
              <li class="list-group-item">
                <label class="d-flex gap-2">
                  <input type="checkbox" class="form-check-input form-check-small">
                  <span>I struggle to perform moderate exercise (for example, walk 1.6 kilometer/one mile in 14 minutes or swim 200 meters/yards without resting), OR I have been unable to participate in a normal physical activity due to fitness or health reasons.</span>
                </label>
              </li>
              <li class="list-group-item">
                <label class="d-flex gap-2">
                  <input type="checkbox" class="form-check-input form-check-small">
                  <span>I have had problems with my eyes, ears, or nasal passages/sinuses.</span>
                </label>
              </li>
              <li class="list-group-item">
                <label class="d-flex gap-2">
                  <input type="checkbox" class="form-check-input form-check-small">
                  <span>I have lost consciousness, had migraine headaches, seizures, stroke, significant head injury, or suffer from persistent neurologic injury or disease.</span>
                </label>
              </li>
            </ul>
          </div>

          <div>
            <h6 class="mb-0 fw-bold">Signature</h6>
            <p class="text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <div id="signature" class="d-flex flex-column signature">
              <canvas class="border rounded-normal" style="touch-action: none;" width="600" height="150"></canvas>
              <button class="btn btn-tertiary text-xs text-muted ms-auto">Clear Signature</button>
            </div>
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