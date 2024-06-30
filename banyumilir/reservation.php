<?php
  include './component/head.php';
  include './component/navbar.php';
?>

  <div class="container">
    <section class="py-4">
      <div class="row g-3">
        <div class="col-12">
          <div class="d-flex justify-content-between gap-3 pb-3 mb-2 border-bottom">
            <h4 class="fw-bold mb-0">Paket Hemat Dolphine, Snorkling, Wisata Plankton</h4>
            <div class="fw-bold text-sm text-end">
              <a href="#" class="text-nowrap">See details <i class="fi fi-rr-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card border p-3">
            <div class="fw-bold text-sm">Select date</div>
            <div class="date-picker"></div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card border p-3">
            <div class="mb-3">
              <div class="">
                <div class="fw-bold">Pilihan Paket</div>
                <p class="text-muted text-xs">Silahkan salah satu paket yang tersedia</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item px-0">
                  <label class="form-check">
                    <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                    Wisata Dolphin (Regular)
                  </label>
                </li>
                <li class="list-group-item px-0">
                  <label class="form-check">
                    <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                    Wisata Dolphin + Snorkeling (Regular)
                  </label>
                </li>
                <li class="list-group-item px-0">
                  <label class="form-check">
                    <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                    Wisata Dolphin (Private)
                  </label>
                </li>
                <li class="list-group-item px-0">
                  <label class="form-check">
                    <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                    Wisata Dolphin + Snorkeling (Private)
                  </label>
                </li>
                <li class="list-group-item px-0">
                  <label class="form-check">
                    <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                    Paket Hemat Wisata Dolphin + Snorkelin + Plankton
                  </label>
                </li>
              </ul>
            </div>

            <div class="mb-3">
              <div class="">
                <div class="fw-bold">Transportasi</div>
                <p class="text-muted text-xs">Pilihan untuk layanan antar jemput</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item px-0">
                  <select class="form-select">
                    <option value="">Tidak Termasuk antar jemput</option>
                    <option value="">Termasuk antar jemput</option>
                  </select>
                </li>
                <li class="list-group-item px-0">
                  <select class="form-select">
                    <option value="">Pilih lokasi antar jemput</option>
                    <option value="">Lokasi 1</option>
                    <option value="">Lokasi 2</option>
                    <option value="">Lokasi 3</option>
                  </select>
                </li>
              </ul>

              <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 d-flex align-items-center justify-content-between">
                  <div class="flex-fill">
                    <strong>Adult</strong>
                  </div>

                  <div class="input-number-button d-flex">
                    <button class="btn btn-floating border"><i class="fi fi-rr-minus"></i></button>
                    <input type="number" name="" id="" class="form-control text-center border-0" style="width:60px">
                    <button class="btn btn-floating border"><i class="fi fi-rr-plus"></i></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
  include './component/footer.php';
?>