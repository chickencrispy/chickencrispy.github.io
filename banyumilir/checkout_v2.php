<?php
  include './component/head.php';
  include './component/navbar.php';

  include './backend/function.php';
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
                <select name="" id="resv-type" class="form-select" required>
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
                <input type="text" name="guest_name" id="guest_name" class="form-control" required>
              </li>
              <li class="list-group-item">
                <label for="">Email</label>
                <input type="email" name="guest_email" id="guest_email" inputmode="email" class="form-control" required>
              </li>
              <li class="list-group-item">
                <label for="">Phone Number</label>
                <input type="tel" name="guest_phone" id="guest_phone" inputmode="tel" class="form-control" required>
              </li>
            </ul>
          </div>

          <!------------DATE & TIME---------------->
          <div id="date-time" class="p-3 bg-white border rounded-normal mb-3">
            <h6 class="fw-bold">Date and Time</h6>
            
            <ul class="list-group list-group-borderless list-group-1/3">
              <li class="list-group-item">
                <label for="">Select Date</label>
                <input type="date" name="date_checkin" id="date_checkin" class="form-control min-today" required>
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
                  <button type="button" class="btn btn-secondary"><i class="fi fi-rr-minus"></i></button>
                  <input type="number" name="guest_amount" id="guest_amount" class="form-control" data-low="1" data-price="<?php echo $packageInfo['package_price']; ?>">
                  <button type="button" class="btn btn-secondary"><i class="fi fi-rr-plus"></i></button>
                </div>
              </li>
            </ul>

            <ul id="list-guests" class="list-group list-group-borderless list-group-1/3">
              <li class="list-group-item">
                <label class=" align-self-baseline pt-2">Guest Name 1</label>
                <div class="d-flex flex-column gap-2">
                  <div class="d-flex gap-2">
                    <input type="text" name="guest_add_name[]" id="" class="form-control" required>
                    <button type="button" class="btn-add-note btn btn-link text-reset" onclick="addGuestNote(this)" title="Add guest note"><i class="fi fi-rr-note-medical"></i></button>
                  </div>
                  <div class="guest-note d-none d-flex gap-2">
                    <input type="text" name="guest_add_note[]" id="" class="form-control" placeholder="Guest note...">
                    <button type="button" class="btn-del-note btn btn-link text-danger" onclick="delGuestNote(this)" title="Remove guest note"><i class="fi fi-rr-cross"></i></button>
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

              <?php
                foreach ($info_cp as $row) {
              ?>
                <li>
                  <label class="guide-box">
                    <input type="radio" name="captain_id" id="captain_id" class="d-none" value="<?php echo($row['captain_id']); ?>">
                    <img src="https://i.pinimg.com/474x/ec/ce/c8/eccec8817c5d0391e030d86c7de07df6.jpg" alt="Guide 1">
                    <h6><?php echo ucwords($row['captain_name']); ?></h6>
                  </label>
                </li>

              <?php
                }
              ?>

            </ul>
          </div>

          <!----------ADDITIONAL----------------------->
          <div id="additional" class="p-3 bg-white border rounded-normal mb-3">
            <h6 class="fw-bold">Additional</h6>
            <p class="text-xs text-muted">Choose here to get pick up from your place</p>

            <ul class="list-group list-group-borderless list-group-1/3">
              <li class="list-group-item">
                <label for="">Transportation</label>
                <select name="" id="transportation" class="form-select">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
              </li>
              <li class="list-group-item d-none">
                <label for="">Pickup Area</label>
                <select name="" id="transport-area" class="form-select">
                  <option value="1" data-price="100000">Singaraja Area</option>
                  <option value="2" data-price="200000">Outside Singaraja Area</option>
                </select>
              </li>
              <li class="list-group-item d-none">
                <label for="">Location Name</label>
                <div>
                  <input type="text" id="address-input" class="form-control mb-3" placeholder="Fill & Choose addres here" oninput="fetchAddresses()" autocomplete="off">
                  <div id="suggestions" class="autocomplete-suggestions"></div>
                </div>
              </li>
            </ul>
          </div>

          <!-- LOCATION -->
          <div id="location" class="p-3 bg-white border rounded-normal mb-3">
            <div id="maps" class="overflow-hidden" style="height: 350px"></div>
          </div>

          <!----------MEDICAL TRAVEL----------------->
          <div id="medical-travel" class="p-4 bg-white border rounded-normal mb-3">

            <!-------MEDICAL TRAVEL---------------->
            <div class="mb-4">
              <h6 class="fw-bold">Medical Traveler by POKMASWAS BANYUMILIR</h6>
              <ol>
                <?php
                  foreach ($info_mc as $row) {
                ?>
                  <li><?php echo ($row['medical_text']); ?></li>
                <?php
                  }
                ?>
              </ol>
            </div>

            <div class="mb-4">
              <h6 class="mb-0 fw-bold">Ticketing General Requirement</h6>
              <p class="text-muted text-sm">Please check or not this questionnaire to complete this form:</p>

              <ul class="list-group list-group-borderless">
                <?php
                  foreach ($info_ma as $row) {
                ?>
                  <li class="list-group-item">
                    <label class="d-flex gap-2">
                      <input type="checkbox" name="medical_travel_assesment[]" id="" value="<?php echo($row['assesment_id']); ?>" class="form-check-input form-check-sm">
                      <span><?php echo($row['assesment_text']); ?></span>
                    </label>
                  </li>
                <?php
                  }
                ?>
              </ul>
            </div>

            <!--------SIGNATURE-------------->
            <div>   
              <h6 class="fw-bold">Signature</h6>
              <label class="d-flex gap-2 text-muted text-sm mb-3">
                <input type="checkbox" class="form-check-input form-check-sm" required>
                <span> I the undersigned above, have read all the provision and regulation. I will be responsible for the risks posed by my negligence and will not take the management to legal action for my own risks.</span>
              </label>

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
                <h6><?php echo ucwords($packageInfo['package_title']); ?></h6>
                <small><?php echo ucwords($packageInfo['package_subtitle']); ?></small>
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
                  <div class="ms-auto">Rp <?php echo number_format($packageInfo['package_price'], 0, ",", "."); ?></div>
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
  </script>

  <script>
    var formCheckout = document.getElementById("Myform");

    formCheckout.addEventListener("submit", (event) => {
      if (signaturePad.isEmpty()) {
        alert("Please provide a signature first.");
        event.preventDefault(); // Menghentikan submit form
        return false;
      }

      var dataURL = signaturePad.toDataURL();
      document.getElementById("signature").value = dataURL;

      var Data = new FormData(event.target);

      Data.append("administrasi_id", "<?php echo $packageInfo['administrasi_id']; ?>");
      Data.append("package_id", "<?php echo $packageInfo['package_id']; ?>");
      Data.append("package_price", "<?php echo $packageInfo['package_price']; ?>");
      Data.append("promo_id", "");
      Data.append("order_ticket", ""); 

      for (const [key, value] of Data.entries()) {
        //console.log(`${key}: ${value}`);
      }

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

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script>
      let map = L.map('maps').setView([0, 0], 2); // Inisialisasi peta dengan view default
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
      }).addTo(map);

      let marker;

      async function fetchAddresses() {
        const query = document.getElementById('address-input').value;
        if (query.length < 3) return; // Minimal 3 karakter untuk mulai mencari

        const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&addressdetails=1&limit=5`);
        const data = await response.json();

        const suggestions = document.getElementById('suggestions');
        suggestions.innerHTML = '';

        data.forEach(place => {
            const div = document.createElement('div');
            div.textContent = place.display_name;
            div.className = 'autocomplete-suggestion';
            div.onclick = () => selectAddress(place);
            suggestions.appendChild(div);
        });
      }

      function selectAddress(place) {
          document.getElementById('address-input').value = place.display_name;
          document.getElementById('suggestions').innerHTML = '';

          const lat = place.lat;
          const lon = place.lon;
          //alert('lat ='+lat +' - '+'long ='+ lon);
          map.setView([lat, lon], 13);


          // Fungsi untuk menghitung jarak menggunakan rumus Haversine
          function haversineDistance(lat1, lon1, lat2, lon2) {
              const R = 6371; // Radius bumi dalam kilometer
              const toRad = (degree) => degree * (Math.PI / 180);

              const dLat = toRad(lat2 - lat1);
              const dLon = toRad(lon2 - lon1);
              const a = 
                  Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                  Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
                  Math.sin(dLon / 2) * Math.sin(dLon / 2);
              const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

              return R * c; // Hasil dalam kilometer
          }

              // Koordinat awal
              console.log(lat);
              console.log(lon);
              
              const latAwal = lat;
              const lonAwal = lon;

              // Koordinat tujuan lovina bali
              const latTujuan = -8.16305115;
              const lonTujuan = 115.02246398708351;

                // Hitung jarak
                const jarak = haversineDistance(latAwal, lonAwal, latTujuan, lonTujuan);

              console.log(`Jarak radius titik penjemputan ke titik tujuan adalah ${jarak.toFixed(2)} kilometer.`)


          if (marker) {
              marker.setLatLng([lat, lon]);
          } else {
              marker = L.marker([lat, lon]).addTo(map);
          }
      }
  </script>



