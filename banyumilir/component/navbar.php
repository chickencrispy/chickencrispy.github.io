<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <div class="container">
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fi fi-rr-menu-burger"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand mt-2 mt-lg-0 fw-bold text-primary text-serif" href="/">
        <i class="fi fi-rr-dolphin me-2"></i> BanyuMilir
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Team</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
      </ul>
    </div>

    <div class="d-flex align-items-center">
      <a class="text-reset me-3" href="#"> <i class="fi fi-rr-shopping-cart"></i> </a>

      <div class="dropdown">
        <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
          <i class="fi fi-rr-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <div class="dropdown">
        <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow border rounded-circle" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
          <img src="./assets/memoji/Memoji-<?php echo(sprintf("%02d",rand(1,26))); ?>.png" class="rounded-circle" height="40" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>