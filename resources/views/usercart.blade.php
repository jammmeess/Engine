<html lang="en">

<head>
    @include("layouts/head")
    <title>Cart</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/errors')
    <div class="container-fluid my-5">
        <h3 class="text-light ms-5 mb-3"><b>Checkout: </b></h3>
        <form action="#" method="POST">
            @csrf
            <div class="row d-flex">
                <div class="col-lg-8 col-10">
                    <div class="col-lg-12 justify-content-center align-items-center">
                        @for ($i = 0; $i < count($g); $i++ ) @if ($sg[$i]> 0)
                            <table class="table table-borderless align-middle table-md text-light ms-5">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <h3 class="text-center"><b>Game Name</b></h3>
                                        </th>
                                        <th>
                                            <h3 class="text-center"><b>Price</b></h3>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-light ">
                                    <tr>
                                        <td class="text-light "><img src="/img/games/{{$g[$i]->image_1}}" alt="{{$g[$i]->game_name}}" /></td>
                                        <td class="text-light">{{$g[$i]->game_name}}</td>
                                        <td class="text-light text-center">₱{{$g[$i]->price}}</td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-bordered">
                                    <tr>
                                        <td><b>Total:</b> </td>
                                        <td></td>
                                        <td class="text-light justify-content-center text-center"><b><i>₱{{ $total }}</i></b></td>
                                    </tr>
                                </tfoot>
                            </table>
                            @endif
                            @endfor
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-4 mx-5">
                <button type="submit" class="btn">Complete Your Purchase</button>
            </div>
        </form>
    </div>
</body>

</html>