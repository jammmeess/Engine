@include('layouts/app')
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand mx-4" href="/"><img src="/img/logo/logo_white_main.png" style="width: 100px" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="/img/icons/toggle.png" style="width: 30px">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="/#About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="/#Games">Games</a>
        </li>

        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="/#Faqs">FAQS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="#Store">Store</a>
        </li>
        @if (Session::has('user_id'))
        <li class=" nav-item">
          <a class="nav-link  text-light" href="#Support">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="#Library">Library</a>
        </li>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown">
            <img src="/img/icons/profile.png" style="width: 25px">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Go to Profile</a></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </li>
        </li>
        @else
        <li class=" nav-item">
          <a class="nav-link  text-light" href="/support">Support</a>
        </li>
        <a href="/login"><button type="button" class="btn mx-3">
            Log In / Sign Up
          </button></a>
        @endif


    </div>
  </div>
</nav>