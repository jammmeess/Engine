<html lang="en">

<head>
    @include("layouts/head")
    <title>Purchase Complete</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/errors')
    <h1 class="text-light">Purchase Complete!</h1>
    <p class="text-light">Purchase ID: {{$purchase->purchase_id}}</p>
    <a href="/library">Go to library</a>
    @include('layouts/footer')
</body>

</html>