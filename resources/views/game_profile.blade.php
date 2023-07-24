<html lang="en">

<head>
    @include("layouts/head")
    <title>Game Profile</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var quadimages = document.querySelectorAll("#quad figure");
            for (var i = 0; i < quadimages.length; i++) {
                quadimages[i].addEventListener('click', function() {
                    this.classList.toggle("expanded");
                    quad.classList.toggle("full");
                });
            }
        });
    </script>
</head>

<body>
    @include('layouts/navbar')
    @include("layouts/errors")
    @foreach ($game as $g)

    <div class="overlay-game" id="overlay"></div>
    <div class="hero-store col-lg-12 col-12">
        <img src="/img/games/{{$g -> image_2}}" id="hero-store" />
    </div>
    <div class="container-fluid mb-5 pb-5 text-light">
        <h1 class="ms-3 mb-2" style="font-family:Neo-latina">{{$g->game_name}}</h1>
        <p class=" ms-4 mb-5">{{$g->developer}}</p>
        <div class="row">
            <div class="col-lg-7 mb-5">
                <div id="quad" class="d-flex flex-wrap">
                    <figure>
                        <img src="/img/games/{{$g->image_3}}" alt="{{$g->game_name}}">
                        <figcaption>{{$g->game_name}}</figcaption>
                    </figure>
                    <figure>
                        <img src="/img/games/{{$g->image_4}}" alt="{{$g->game_name}}">
                        <figcaption>{{$g->game_name}}</figcaption>
                    </figure>
                    <figure>
                        <img src="/img/games/{{$g->image_5}}" alt="{{$g->game_name}}">
                        <figcaption>{{$g->game_name}}</figcaption>
                    </figure>
                    <figure>
                        <img src="/img/games/{{$g->image_6}}" alt="{{$g->game_name}}">
                        <figcaption>{{$g->game_name}}</figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-lg-4 me-5">
                <label><b>Description:</b></label>
                <p class="mb-3">{{$g->description}}</p>
                <label>Category: </label>
                <p class="mb-3">{{$g->category}}</p>
                <a class="btn mb-3" href="/userstore">Back to Store</a>
            </div>
        </div>
    </div>
    @endforeach
    @include ('layouts/footer')
</body>

</html>