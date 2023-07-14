<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Log In</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="overlay-login" id="overlay-login"></div>
    <div class="container">
        <div class="row">

            <div class="col-lg-12 d-flex justify-content-center">
                <h3 class="text-light display-6" id="login-title">Welcome to Engine_</h3>
            </div>
            <div class="line"></div>
            <div class="col-lg-12 d-flex justify-content-center">
                <h3 class="text-light mt-5" id="login-sub">Log in to your Account</h3>
            </div>

            <div class="col-lg-12 d-flex justify-content-center">
                <form id="form">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="exampleInputEmail1" class="form-label text-light">Email: </label>
                        <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-light">Password: </label>
                        <input type="password " class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-light" for="exampleCheck1">Keep me signed in</label>
                    </div>
                    <button type="submit" class="button" style="font-family: Vanilla; width: 200px; height: 55px; font-size: 20px">Submit</button>
                </form>
            </div>


        </div>
    </div>
    @include('layouts/footer')
</body>


</html>