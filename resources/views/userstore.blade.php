<html lang="en">

<head>
    @include("layouts/head")
    <title>Store</title>
    <script>
        $(document).ready(function() {
            $(".add_button").click(function() {
                $pid = $(this).attr('id');
                $new_val = Number($("input.purchase_" + $pid).val()) + 1;
                if ($new_val < 99) {
                    $("input.purchase_" + $pid).val($new_val);
                    $(".popup-success-message").fadeIn();
                    setTimeout(function() {
                        $(".popup-success-message").fadeOut();
                    }, 1000);
                }
            });
        });
    </script>
</head>

<body>
    @include('layouts/navbar')

    <div class="overlay-store" id="overlay"></div>
    <div class="hero-store col-lg-12 col-12">
        <img src="/img/landing/About1.gif" id="hero-store" />
    </div>
    @include('layouts/errors')

    <div class="container">
        <div class="row">
            <h3 class="text-light mb-4">Welcome, {{$u->username}}!</h3>
            <a href="/userhome" class="btn d-flex col-lg-3 col-5 me-3 mb-5">Home</a>
            <a href="/profile" class="btn d-flex col-lg-3 col-5 mb-5">Profile</a>
            <div class="col-lg-12 d-flex">
                <div class="col-lg-3 text-light d-none d-sm-block">
                    <h5>Categories</h5>
                    <ul class="mt-3 text-light" id="categories">
                        <li><a class="category" href="#">Action</a></li>
                        <li><a class="category" href="#"> Adventure</a></li>
                        <li><a class="category" href="#">MMORPG</a></li>
                        <li><a class="category" href="#">Multiplayer</a></li>
                        <li><a class="category" href="#">RPG</a></li>
                        <li><a class="category" href="#">Singleplayer</a></li>
                        <li><a class="category" href="#">Tactical Shooter</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <h5 class="text-light mb-4">Featured Games of the Week</h5>
                    <div id="store_carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#store_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#store_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#store_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#store_carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#store_carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner img-fluid" style="width: 100%" id="carousel_store">
                            <div class="carousel-item active">
                                <img src="/img/store_carousel/gta.jpg" class="d-block w-100" alt="Grand Theft Auto V">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/store_carousel/cyberpunk.jpg" class="d-block w-100" alt="Cyberpunk 2077">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/store_carousel/maneater.jpg" class="d-block w-100" alt="Man Eater">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/store_carousel/thedivision.jpg" class="d-block w-100" alt="The Division II">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/store_carousel/mhw.jpg" class="d-block w-100" alt="Monster Hunter World: Iceborne">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#store_carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#store_carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <h3 class="mt-5 text-light d-flex justify-content-center">More Games</h3>
                <div class="line mb-5"></div>
            </div>

            <form action="/userstore" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary add_button d-flex me-5">View Cart <img src="/img/icons/cart.png" style="width: 25px" class="ms-2 " /></button>
                <div class=" row">
                    <div class="popup-success-message" style="display: none;">
                        <div class="popup-content">
                            Game added to cart successfully!
                        </div>
                    </div>
                    @foreach($game_list as $gl)

                    <div class="col-lg-4 col-11 ">
                        <a class="category" href="/userstore/{{$gl ->game_id}}">
                            <div class="card-store pe-1 me-3 my-4">
                                <div class="infos">
                                    <div class="image">
                                        <img src="img/games/{{$gl->image_1}}" class="card-img-top-game" alt="{{$gl->game_name}}">
                                    </div>
                                    <div class="info">
                                        <div>
                                            <p class="name">
                                                {{$gl->game_name}}
                                            </p>
                                            <p class="function">
                                                {{$gl->developer}}
                                            </p>
                                        </div>
                                        <input type="hidden" min="1" max="1" style="width: 50px" class="purchase_{{$gl->game_id}}" name="purchase_{{$gl->game_id}}" value="0">

                                    </div>
                                </div>
                                <p class="price my-3">
                                    <i>₱ {{$gl->price}}</i>
                                </p>
                        </a>
                        <a class="btn btn-primary add_button" id="{{$gl->game_id}}">Add to cart</a>
                    </div>
                </div>
                @endforeach
        </div>
        {{$game_list->links('pagination::bootstrap-5')}}
        </form>
    </div>
    </div>
    @include('layouts/footer')
</body>

</html>