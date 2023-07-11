<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css" />
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
                            <button class="button text-center" style="font-family: Vanilla">Press Start</button>
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
                <div class="col-lg-12">
                    <h3 class="mt-3 display-3 text-light text-start">About</h3>
                    <div class="line mb-5"></div>
                </div>

                <div class="col-lg-6">

                    <h3 class="ms-3 my-5 display-5 text-light about-content">Embark on an incredible Journey with us!</h3>
                    <p class="ms-3 my-3 text-justify text-start text-light about-content">Engine_ emerged from a simple idea and has transformed into an extraordinary gaming ecommerce company. </p>
                </div>
                <div class="col-lg-6  pt-5">
                    <img src="/img/About.gif" class="img-fluid mt-5 ms-5 " alt="Zombie Attack" id="about_img" />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p class="ms-3 my-4 text-justify text-start text-light about-content">Discover a curated collection of games, join a vibrant community, and unleash your passion. With an intuitive interface and exceptional service, we're here to make your gaming dreams a reality. </p>
                    <p class="ms-3 my-3 text-justify text-start text-light about-content">Experience the thrill of Engine_ and embrace unforgettable adventures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Games -->
    <section id="Games">
        <div class="container">
            <div class="col-lg-12">
                <h3 class=" mt-3 display-3 text-light">Our Games</h3>
                <div class="line mb-5"></div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/Valorant.gif" class="d-block w-100" alt="Valorant">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/rdr2.gif" class="d-block w-100" alt="Red Dead Redemption 2">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/spider-man.gif" class="d-block w-100" alt="New World">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <img src="/img/Valorant.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Valorant</h5>
                                <p>Riot Games</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <img src="/img/rdr2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Red Dead Redemption II</h5>
                                <p>Rockstar Games</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <img src="/img/spider-man.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Marvel's Spider-Man Remastered</h5>
                                <p>Insomiac</p>
                            </div>
                        </div>
                    </div>
                    <dh3 class="col-lg-12">
                        <h3 class="text-center text-light display-6">Discover New Games with Engine_ </h3>

                </div>

                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img src="/img/newworld.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">New World</h5>
                            <p>Amazon Games</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img src="/img/Stray.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Stray</h5>
                            <p>BlueTwelve Studio</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img src="/img/ugg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Untitled Goose Game</h5>
                            <p>House House</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <button class="button text-center" style="font-family: Vanilla">Shop Now</button>
                    </div>

                </div>



            </div>
        </div>
        </div>
    </section>

</body>

</html>