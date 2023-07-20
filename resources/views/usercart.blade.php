<html lang="en">

<head>
    @include("layouts/head")
    <title>Shopping Cart</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/errors')
    <div class="container-fluid my-5">
        <h3 class="text-light mb-3">Your Cart</h3>
        <form action="#" method="POST">
            @csrf
            <div class="row d-flex">
                <div class="col-lg-12">
                    <div class="col-lg-6 justify-content-center align-items-center text-center">
                        @for($i = 0; $i < count($g); $i++) @if ($pg[$i]>0)
                            <table class="table table-striped text-light">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <h3>Game Name</h3>
                                        </th>
                                        <th>
                                            <h3>Price</h3>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-light">
                                    @foreach($g as $games)
                                    <tr>
                                        <td><img src="/img/games/{{$games->image_1}}" style="width: 40%; border-radius:20px;" /></td>
                                        <td class="text-light">{{$games->game_name}}</td>
                                        <td class="text-light">₱{{$games->price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <p class="text-light">Total: ₱{{$total}}</p>
                            </div>
                            @endif
                            @endfor
                    </div>

                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn">Complete Your Purchase</button>
                </div>
            </div>
    </div>