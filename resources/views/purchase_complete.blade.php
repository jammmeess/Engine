<html lang="en">

<head>
    @include("layouts/head")
    <title>Purchase Complete</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/errors')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center text-center">
                <img src="/img/icons/check.png" width="100px" class="img-fluid mb-4" alt="check-icon">
                <h2 class="text-light display-3">Thank you</h2>
                <h2 class="text-light display-3 mb-3">Purchase Complete</h2>
                <p class="text-light">Your payment was successful and your purchase is complete!</p>
                <p class="text-light">To download and install your game, press the link below.</p>
                <!-- <p class="text-light">Purchase ID: {{$purchase->purchase_id}}</p> -->
                <div class="col-lg-12">
                    <a class="btn mt-3" href="/my_library">Proceed to Your Library</a>
                </div>
                <img src="/img/logo/logo_white_main.png" class="img-fluid mt-5" width="150px" alt="Engine_  Games Logo">
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>