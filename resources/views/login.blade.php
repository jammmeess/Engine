<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Log In</title>
</head>

<body> 
    @include("layouts/errors")
    @include("layouts/navbar")

    <section>
        <div class="container">
            <div class="row" id="login-bg">

                <div class="col-lg-6  d-none d-sm-block mx-5 mt-2 ">
                    <img src="/img/logo/logo_black_main.png" class="img-fluid my-3" style="width: 70%">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group my-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" >Remember Me</label>
                        </div> -->
                        <a href="/" type="button" class="btn mt-3">Cancel</></a>
                        <button type="submit" class="btn mt-3">Log In</button>
                    </form>
                    <p>Not yet a member?</p> <a href="/login/register"><button type="button" class="btn mb-5">Register Here</button></a>
                </div>

                <!-- Responsive -->
                <div class="col-11 d-block d-sm-none mx-3 mt-2 ">
                    <img src="/img/logo/logo_black_main.png" class="img-fluid my-3" style="width: 70%">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group my-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label">Remember Me</label>
                        </div> -->
                        <a href="/" type="submit" class="btn mt-3">Cancel</a>
                        <button type="submit" class="btn mt-3">Log In</button>
                    </form>
                    <p>Not yet a member?</p> <a href="/login/register"><button type="button" class="btn mb-5">Register Here</button></a>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center d-none d-sm-block my-5 me-3">
                    <img src="/img/landing/symmetra.gif" id="login_img" style="height: 90%; border: 10px solid">
                </div>

            </div>
        </div>
    </section>
    @include('layouts/footer')
</body>

</html>