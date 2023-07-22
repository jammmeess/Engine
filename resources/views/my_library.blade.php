<html lang="en">

<head>
    @include("layouts/head")
    <title>My Library</title>
    <script>
        function show(shown, hidden) {
            document.getElementById(shown).style.display = 'block';
            document.getElementById(hidden).style.display = 'none';
            return false;
        }
    </script>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/errors')

    <div id="Page1"></div>

    <div class="Container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-light mb-5">My Library</h1>
            </div>
            <div class="col-lg-12 d-flex">
                <div class="col-lg-5 text-light">
                    <h5>My Games</h5>
                    <ul class="mt-3 text-light" id="categories">
                        @foreach ($purchases as $p)
                        <li><a class="category" href="/my_library/{{$p ->game_id}}">{{$p->game_name}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-7">
                    <div class="row">
                        @foreach ($purchases as $p)
                        <div class="col-lg-4 my-3">
                            <div class="card-library" style="width: 150px;">
                                <a href="/my_library/{{$p ->game_id}}"> <img src="/img/games/{{$p->image_1}}" class="img-fluid card-img-top" alt="{{$p->game_name}}"></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>