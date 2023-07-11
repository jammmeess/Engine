<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css"/>
    <title>Home</title>
</head>
<body>
    @include("layouts/navbar")
    <!-- Hero Banner -->
    <section>
        <div class="hero">
        <div class="overlay" id="overlay"></div>
        <img src="/img/HeroBanner.gif" id="hero" />
        <div class="content" id="content">
            <div class="container">
                <div class="row mx-5 mt-5">
                    <div class="col-lg-6 col-10">
                        <h1 class="fw-bolder display-1">WELCOME TO ENGINE_</h1>
                    </div>
                    <div class="col-lg-12 col-12 mt-4">
                        <!-- <a class="btn btn-light" href="/">SHOP NOW!</a> -->
                        <button>PRESS START!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    

<!--About  -->
<section id="About">
    <div class="container">
        <div class="row text-light">
          <div class="col-lg-6">
            <h3 class="ms-3 my-3 display-1 text-light">About</h3>
            <h3 class="ms-3 my-3 display-5 text-light">Embark on an incredible Journey with us!</h3>
            <h3 class="ms-3 my-3 text-justify text-start text-light">Engine_ emerged from a simple idea and has transformed into an extraordinary gaming ecommerce company. </h3>
            <h3 class="ms-3 my-3 text-justify text-start text-light">Discover a curated collection of games, join a vibrant community, and unleash your passion. </h3>
            <h3 class="ms-3 my-3 text-justify text-start text-light">With an intuitive interface and exceptional service, we're here to make your gaming dreams a reality. </h3>
            <h3 class="ms-3 my-3 text-justify text-start text-light">Experience the thrill of Engine_ and embrace unforgettable adventures.</h3>
          </div>
          <div class="col-lg-6 mt-5  pt-5">
            <img src="/img/About.gif" class="img-fluid mt-5 ms-5 " alt="Zombie Attack" id="about_img"/>
          </div>
        </div>
    </div>
</section>
    
</body>

</html>