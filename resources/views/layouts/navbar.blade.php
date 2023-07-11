<nav>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/img/logo_white_main.png" style="width: 100px"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light ms-5" aria-current="page" href="#About">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active text-light ms-3" aria-current="page" href="#Games">Games</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active text-light ms-3" aria-current="page" href="#Support">Support</a>
        </li>
             <li class="nav-item">
          <a class="nav-link active text-light ms-3" aria-current="page" href="#Faqs">Faqs</a>
        </li> 
        @if (Session::has('user_id'))
        <li class="nav-item">
          <a class="nav-link active text-light ms-3" aria-current="page" href="#Library">Library</a>
        </li>
            </li>
             <li class="nav-item">
          <a class="nav-link active text-light ms-3" aria-current="page" href="#Profile">Profile</a>
        </li>
            </li>
        @endif
             <li class="nav-item">
          <a class="nav-link active text-light ms-3" aria-current="page" href="#">Log in / Sign up</a>
        </li>
            </li>
            
    </div>
  </div>
</nav>
</nav>