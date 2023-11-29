<html lang="en">

<head>
    @include("layouts/head")
    <title>Cart</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/errors')
    <div class="container-fluid mt-3">
        <h3 class="text-light ms-3 mb-3"><b>Your Cart:</b></h3>
        <form action="/userstore/checkout" method="POST">
            @csrf
            <div class="row d-flex">
                <div class="col-lg-8 col-11">
                    <div class="col-lg-12 justify-content-center align-items-center">

                        <table class="table table-borderless table-striped align-middle table-md text-light ms-3">

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
                            @for ($i = 0; $i < count($g); $i++ ) @if ($sg[$i]> 0)
                                <tbody class="text-light ">
                                    <tr>
                                        <td class="text-light "><img src="/img/games/{{$g[$i]->image_1}}" alt="{{$g[$i]->game_name}}" /></td>
                                        <td class="text-light">{{$g[$i]->game_name}}</td>
                                        <td class="text-light text-center">₱{{$g[$i]->price}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                @endif
                                <input type="text" name="purchase_{{$g[$i]->game_id}}" value="{{$sg[$i]}}" hidden />
                                @endfor
                                <tfoot class="table-bordered">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                        </table>
                        <p class="text-light text-end" style="font-size: 25px"><b>Total</b>: <i> ₱{{ $total }} </i></p>

                    </div>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <select class="btn custom-select mr-sm-2 ms-4 mb-3">
                        <option selected>Choose Your Payment Method...</option>
                        <option class="text-dark" value="Visa">Visa</option>
                        <option class="text-dark" value="MasterCard">MasterCard</option>
                        <option class="text-dark" value="Gcash">Gcash</option>
                        <option class="text-dark" value="Maya">Maya</option>
                        <option class="text-dark" value="Paypal">Paypal</option>
                        <option class="text-dark" value="Mobile-Bank">Mobile Bank <li>(BDO, BPI, etc.)</li>
                        </option>
                    </select>
                </div>

                <div class="col-lg-8 mt-2 mx-5">
                    <button type="submit" class="btn">Complete Your Purchase</button>
                </div>
        </form>
    </div>

    <div class="row ms-3 mb-5">
        <h5 class="text-light ms-3 mt-3mb-3">Delivery: </h5>
        <div class="col-lg-6 col-10 ms-3 d-flex" style="background: linear-gradient(135.8deg, rgb(26, 26, 29) 27.1%, rgb(111, 34, 50) 77.5%);  border-radius: 10px;
             border: 3px solid black; padding: 15px;">
            <img src=" /img/logo/logo_white.png" width="50px" class="img-fluid" alt="Engine_ Logo" />
            <p class="text-light ms-3">All games are available for download upon purchase in your personal Engine_ library.</p>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>