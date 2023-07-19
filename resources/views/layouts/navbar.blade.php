@include('layouts/app')
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    @if(Session::has('user_id'))
    <a class="navbar-brand mx-4" href="/userhome"><img src="/img/logo/logo_white_main.png" style="width: 100px" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="/img/icons/toggle.png" style="width: 30px">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="/userhome#About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="/userhome#Games">Games</a>
        </li>

        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="/userhome#Faqs">FAQS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="/userstore">Store</a>
        </li>
        <li class=" nav-item">
          <a class="nav-link  text-light" href="/usersupport">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light ms-2" href="#Library">Library</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown">
            <img src="img/user_profiles/{{$u->image}}" style="width: 20px; height: 20px; border-radius: 28%; border: 1px solid white">
            {{$u->username}}
          </a>
          <ul class="dropdown-menu" style="background: linear-gradient(135.8deg, rgb(26, 26, 29) 27.1%, rgb(111, 34, 50) 77.5%);">
            <li>
              <h5 class="mb-1 ps-3 text-light">Welcome, </h5>
              <h6 class="mb-1 ps-3 text-light"><b><i>{{$u->username}}!</i></b></h6>

            </li>
            <div class="dropdown-divider"></div>
            <li><a class="category text-light ms-3" href="/profile">Go to Profile</a></li>
            <li><a class="category text-light ms-3" href="/logout">Logout</a></li>
        </li>
        @else
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
              <a class="nav-link  text-light ms-2" href="/store">Store</a>
            </li>
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