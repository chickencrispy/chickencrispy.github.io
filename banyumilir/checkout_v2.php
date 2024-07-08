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
    <form id="Myform" action="#" method="post" target="_self">
      <div class="row g-0">
        <div class="col-md-8">
          
          <!--------COSTUMER CONTACT---------------->
          <div id="customer-contact" class="p-3 bg-white border rounded-normal mb-3">
            <h6 class="fw-bold">Customer Contact</h6>
            <ul class="list-group list-group-borderless list-group-1/3">
              <li class="list-group-item">
                <label for="">Reservation Type</label>
                <select name="" id="resv-type" class="form-select">
                  <option value="1">Personal</option>
                  <option value="2">Travel Agent</option>
                </select>
              </li>
              <li class="d-none list-group-item">
                <label for="">Travel Agent Name</label>
                <input type="text" name="agent_name" id="agent_name" class="form-control" disabled>
              </li>
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

          <!------------DATE & TIME---------------->
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
                    <input type="radio" name="package_time" id="package_time" value="1" class="d-none">
                    <span>06.00 - 08.00</span>
                  </label>
                  <label class="label-check border p-2 text-nowrap rounded-normal text-center">
                    <input type="radio" name="package_time" id="package_time" value="2" class="d-none">
                    <span>09.00 - 11.00</span>
                  </label>
                  <label class="label-check border p-2 text-nowrap rounded-normal text-center">
                    <input type="radio" name="package_time" id="package_time" value="3" class="d-none">
                    <span>14.00 - 16.00</span>
                  </label>
                  <label class="label-check border p-2 text-nowrap rounded-normal text-center">
                    <input type="radio" name="package_time" id="package_time" value="4" class="d-none">
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
                  <input type="number" name="guest_amount" id="guest_amount" class="form-control" data-low="1" data-price="350000">
                  <button class="btn btn-secondary"><i class="fi fi-rr-plus"></i></button>
                </div>
              </li>
            </ul>

            <ul id="list-guests" class="list-group list-group-borderless list-group-1/3">
              <li class="list-group-item">
                <label class=" align-self-baseline pt-2">Guest Name 1</label>
                <div class="d-flex flex-column gap-2">
                  <div class="d-flex gap-2">
                    <input type="text" name="guest_add_name[]" id="" class="form-control">
                    <button class="btn-add-note btn btn-link text-reset" onclick="addGuestNote(this)" title="Add guest note"><i class="fi fi-rr-note-medical"></i></button>
                  </div>
                  <div class="guest-note d-none d-flex gap-2">
                    <input type="text" name="guest_add_note[]" id="" class="form-control" placeholder="Guest note...">
                    <button class="btn-del-note btn btn-link text-danger" onclick="delGuestNote(this)" title="Remove guest note"><i class="fi fi-rr-cross"></i></button>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <!----------TOUR GUIDE----------------->
          <div id="tour-guide" class="p-3 bg-white border rounded-normal mb-3">
            <h6 class="fw-bold">Tour Guide</h6>
            <p class="text-xs text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam officia ipsam accusantium delectus laudantium et provident veniam officiis atque?</p>
            <ul class="list-guide overflow-auto">
              <li>
                <label class="guide-box">
                  <div class="tag">
                    <i class="fi fi-sr-thumbs-up"></i> Recommend
                  </div>
                  <input type="radio" name="captain_id" id="captain_id" class="d-none" value="1">
                  <img src="https://i.pinimg.com/originals/d1/34/db/d134db0516ffd9361d63901e13c78bb3.jpg" alt="Guide 1">
                  <h6>Jack Sparrow</h6>
                </label>
              </li>
              <li>
                <label class="guide-box">
                  <input type="radio" name="captain_id" id="captain_id" class="d-none" value="2">
                  <img src="https://i.pinimg.com/474x/ec/ce/c8/eccec8817c5d0391e030d86c7de07df6.jpg" alt="Guide 1">
                  <h6>Hector Barbossa</h6>
                </label>
              </li>
              <li>
                <label class="guide-box">
                  <input type="radio" name="captain_id" id="captain_id" class="d-none" value="3">
                  <img src="https://www.piratesinfo.com/media/qsjpt45d/annebonny.jpg" alt="Guide 1">
                  <h6>Anne Bonny</h6>
                </label>
              </li>
              <li>
                <label class="guide-box">
                  <input type="radio" name="captain_id" id="captain_id" class="d-none" value="4">
                  <img src="https://www.lamar.edu/_files/images/news/2016/09/Phillips_Richard_Captain%20Web.jpg" alt="Guide 1">
                  <h6>Richard Phillips</h6>
                </label>
              </li>

              <li class="sticky-right">
                <a href="#" class="more-list" data-mdb-modal-init data-mdb-target="#guideModal">
                  <i class="fi fi-rr-angle-right"></i>
                </a>
              </li>
            </ul>
          </div>

          <!----------ADDITIONAL----------------------->
          <div id="additional" class="p-3 bg-white border rounded-normal mb-3">
            <h6 class="fw-bold">Additional</h6>
            <p class="text-xs text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam officia ipsam accusantium delectus laudantium et provident veniam officiis atque?</p>

            <ul class="list-group list-group-borderless list-group-1/3">
              <li class="list-group-item">
                <label for="">Transportation</label>
                <select name="additional_id[]" id="" class="form-select">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
              </li>
              <!----li class="list-group-item d-none">
                <label for="">Pickup Area</label>
                <select name="" id="transport-area" class="form-select">
                  <option value="1" data-price="100000">Singaraja Area</option>
                  <option value="2" data-price="200000">Outside Singaraja Area</option>
                </select>
              </li ---->
              <li class="list-group-item d-none">
                <label for="">Location Name</label>
                <input type="tel" name="additional_req[]" id="" inputmode="tel" class="form-control">
              </li>
            </ul>
          </div>


          <div id="medical-travel" class="p-4 bg-white border rounded-normal mb-3">

            <!-------MEDICAL TRAVEL---------------->
            <div class="mb-4">
              <h6 class="fw-bold">Medical Traveler by POKMASWAS BANYUMILIR</h6>
              <ol>
                <li>If you have any pre-existing health conditions, such as a heart condition or respiratory condition, contact your tour operator before booking to determine whether you can safely do the tour. People who have or are susceptible to any of following health conditions should seek medical evaluation. This Medical Tour Participant Questionnaire provides a basis for deciding whether you should seek this evaluation.</li>
                <li>If you have any concerns about your suitability for snorkeling that are not listed on this form, consult your doctor before doing snorkeling. If you feel ill, avoid dolphin watching and snorkeling.</li>
                <li>If you think you may have a contagious disease, protect yourself and others by not participating in dolphin watching and snorkeling. This form is intended primarily as an initial medical evaluation for travelers going dolphin watching and snorkeling.</li>
                <li>If you decide to take your children on dolphin and snorkeling tour ensure they are fully briefed and know what they will be doing before entering the water. Children need constant adult supervision on board and in the water.</li>
                <li>To avoid putting yourself or others at risk, it is important to know how to use and feel comfortable with your equipment; otherwise, you could flood your mask or swallow nasty saltwater. This can be really scary and dangerous if you don’t know how to handle the situation!</li>
                <li>Most tour captain require you to be able to swim if you want to do snorkeling. Even if some activity providers let you sign up without knowing how to swim, don’t rely on guides to save you. You need to be responsible for yourself.</li>
                <li>Alcohol and ocean activities are not a good mix. Being under the influence can impair your swimming abilities and awareness, turning what should be a beautiful experience into a safety hazard.</li>
              </ol>
            </div>

            <div class="mb-4">
              <h6 class="mb-0 fw-bold">Ticketing General Requirement</h6>
              <p class="text-muted text-sm">Please check or not this questionnaire to complete this form:</p>

              <ul class="list-group list-group-borderless">
                <li class="list-group-item">
                  <label class="d-flex gap-2">
                    <input type="checkbox" name="medical_travel_assesment[]" id="" value="1" class="form-check-input form-check-sm">
                    <span>I am over 45 years of age.</span>
                  </label>
                </li>
                <li class="list-group-item">
                  <label class="d-flex gap-2">
                    <input type="checkbox" name="medical_travel_assesment[]" value="2" class="form-check-input form-check-sm">
                    <span>Be prepared to always use the personal safety equipment provided (Life jacket) & Personal belongings are the responsibility of each person individually.</span>
                  </label>
                </li>
                
                <li class="list-group-item">
                  <label class="d-flex gap-2">
                    <input type="checkbox" name="medical_travel_assesment[]" value="3" class="form-check-input form-check-sm">
                    <span>I struggle to perform moderate exercise (for example, walk 1.6 kilometer/one mile in 14 minutes or swim 200 meters/yards without resting), OR I have been unable to participate in a normal physical activity due to fitness or health reasons.</span>
                  </label>
                </li>
                <li class="list-group-item">
                  <label class="d-flex gap-2">
                    <input type="checkbox" name="medical_travel_assesment[]" value="4" class="form-check-input form-check-sm">
                    <span>I have had problems with my eyes, ears, or nasal passages/sinuses.</span>
                  </label>
                </li>
                <li class="list-group-item">
                  <label class="d-flex gap-2">
                    <input type="checkbox" name="medical_travel_assesment[]" value="5" class="form-check-input form-check-sm">
                    <span>I have lost consciousness, had migraine headaches, seizures, stroke, significant head injury, or suffer from persistent neurologic injury or disease.</span>
                  </label>
                </li>
              </ul>
            </div>

            <!--------SIGNATURE-------------->
            <div>
              <h6 class="mb-0 fw-bold">Signature</h6>
              <p class="text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
              <div id="signature-pad" class="signature-pad d-flex flex-column signature">
                <canvas class="border rounded-normal" style="touch-action: none;" width="600" height="150"></canvas>
                <button class="btn btn-tertiary text-xs text-muted ms-auto" onclick="clearSignature()" >Clear Signature</button>
                <input type="hidden" name="signature" id="signature">
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
            <div class="summary-details">
              <h6 class="pb-2 fw-semibold text-md border-bottom">Your Trip Summary</h6>
              <ul class="summary-info list-group list-group-light list-group-small mb-3">
                <li class="list-group-item d-flex align-items-center">
                  <div class="text-sm text-muted">Date</div>
                  <div class="ms-auto"><?php echo date("d M Y"); ?></div>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <div class="text-sm text-muted">Time</div>
                  <div class="ms-auto">00.00 - 00.00</div>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <div class="text-sm text-muted">Guests</div>
                  <div class="ms-auto">1 person(s)</div>
                </li>
              </ul>

              <h6 class="pb-2 fw-semibold text-md border-bottom">Pricing Breakdown</h6>
              <ul class="summary-price list-group list-group-light list-group-small mb-3">
                <li class="list-group-item d-flex align-items-center">
                  <div class="text-sm text-muted">Ticket price x 1</div>
                  <div class="ms-auto">Rp 350.000</div>
                </li>
                <li class="d-none list-group-item d-flex align-items-center">
                  <div class="text-sm text-muted">Transportation</div>
                  <div class="ms-auto">Rp 0</div>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <div class="text-sm text-muted">Service fee</div>
                  <div class="ms-auto">Rp 50.000</div>
                </li>
              </ul>

              <hr class="my-2">
              <ul class="summary-total list-group list-group-light list-group-small mb-3">
                <li class="list-group-item d-flex align-items-center fw-bold">
                  <div class="text-sm text-muted">Total before taxes</div>
                  <div class="ms-auto">Rp 0</div>
                </li>
              </ul>
            </div>
            <div class="d-grid pb-3">
              <button type="submit" class="btn btn-primary bg-primary-new py-3 text-xs rounded-normal" >Continue</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="guideModal" tabindex="-1" aria-labelledby="guideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold" id="guideModalLabel">Tour Guide</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-guide-modal">
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://via.placeholder.com/150?text=John+Smith" alt="Guide 1">
                <h6>John Smith</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://via.placeholder.com/150?text=Maria+Garcia" alt="Guide 1">
                <h6>Maria Garcia</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://via.placeholder.com/150?text=William+Brown" alt="Guide 1">
                <h6>William Brown</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://via.placeholder.com/150?text=Li+Wei" alt="Guide 1">
                <h6>Li Wei</h6>
              </label>
            </li>
            <li>
              <label class="guide-box">
                <input type="radio" name="tour-guide" id="guide1" class="d-none">
                <img src="https://via.placeholder.com/150?text=Elena+Petrova" alt="Guide 1">
                <h6>Elena Petrova</h6>
              </label>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn text-xs btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
          <button type="button" class="btn text-xs btn-primary" data-mdb-ripple-init>Save changes</button>
        </div>
      </div>
    </div>
  </div>

<?php
  include './component/footer.php';
?>



<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script>
        var canvas = document.querySelector("canvas");
        var signaturePad = new SignaturePad(canvas);

        function resizeCanvas() {
            var ratio =  Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
            signaturePad.clear(); // otherwise isEmpty() might return incorrect value
        }

        window.addEventListener("resize", resizeCanvas);
        resizeCanvas();

        function clearSignature() {
            signaturePad.clear();
        }

      /*
        function submitForm() {
            if (signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
                return false;
            }

            var dataURL = signaturePad.toDataURL();
            document.getElementById("signature").value = dataURL;
            return true;
        }
      */

    </script>

<script>

  var agent_name = document.getElementById("agent_name");
  var guest_name = document.getElementById("guest_name");
  var guest_email = document.getElementById("guest_email");
  var guest_phone = document.getElementById("guest_phone");
  var date_checkin = document.getElementById("date_checkin");
  var package_time = document.getElementById("package_time");
  var guest_amount = document.getElementById("guest_amount");

  var guestAddNames = document.getElementsByName("guest_add_name[]");
  var guestAddNotes = document.getElementsByName("guest_add_note[]");

  var captain_id = document.getElementById("captain_id");

  var additionalID = document.getElementsByName("additional_id[]");
  var additionalReq = document.getElementsByName("additional_req[]");

  var medicalAssesment = document.getElementsByName("medical_travel_assesment[]");


 
  var formData=document.getElementById("Myform");
  formData.addEventListener("submit", (event) => {

    var dataURL = signaturePad.toDataURL();
        document.getElementById("signature").value = dataURL;

    var Data = new FormData();


    Data.append("administrasi_id", "1");
    Data.append("date_booking", "<?php echo(date("Y-m-d")); ?>");
    Data.append("package_id", "1");
    Data.append("package_price", "300000");
    Data.append("promo_id", "34de131");
    

    Data.append("agent_name", agent_name.value);
    Data.append("guest_name", guest_name.value);
    Data.append("guest_email", guest_email.value);
    Data.append("guest_phone", guest_phone.value);
    
    Data.append("date_checkin", date_checkin.value);
    Data.append("package_time", package_time.value);
    Data.append("guest_amount", guest_amount.value);

    for (var i = 0; i < guestAddNames.length; i++) {
        Data.append("guest_add_name[]", guestAddNames[i].value);
    }
    for (var i = 0; i < guestAddNotes.length; i++) {
        Data.append("guest_add_note[]", guestAddNotes[i].value);
    }

    for (var i = 0; i < additionalID.length; i++) {
        Data.append("additional_id[]", additionalID[i].value);
    }
    for (var i = 0; i < additionalReq.length; i++) {
        Data.append("additional_req[]", additionalReq[i].value);
    }

    for (var i = 0; i < medicalAssesment.length; i++) {
      if (medicalAssesment[i].checked) {
        Data.append("medical_travel_assesment[]", medicalAssesment[i].value);
      }
    }

    Data.append("captain_id", captain_id.value);
    Data.append("signature", dataURL);

    Data.append("order_ticket", '');


    var chr = new XMLHttpRequest();
        chr.open("POST", "./backend/process_temp.php", true);
        chr.send(Data);
        chr.onreadystatechange = function() {
        

          if (chr.readyState === 4 && chr.status === 200) {
            console.log(this.status);
            console.log(this.responseText);
            
          }
        };

    event.preventDefault();
  });

</script>


