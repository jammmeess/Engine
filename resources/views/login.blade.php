<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Log In</title>
</head>

<body>
    @include("layouts/navbar")
    <section>
        <div class="container">
            <div class="row" id="login-bg">

                <div class="col-lg-6  d-none d-sm-block mx-5 mt-2 ">
                    <img src="/img/logo/logo_black_main.png" class="img-fluid my-3" style="width: 70%">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleInputPassword1">Password:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <a href="/"><button type="submit" class="btn mt-3">Cancel</button></a>
                        <button type="submit" class="btn mt-3">Submit</button>
                    </form>
                    <p>Not yet a member?</p> <a><button type="submit" class="btn mb-5">Register Here</button></a>
                </div>

                <!-- Responsive -->
                <div class="col-11 d-block d-sm-none mx-3 mt-2 ">
                    <img src="/img/logo/logo_black_main.png" class="img-fluid my-3" style="width: 70%">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleInputPassword1">Password:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <a href="/" type="submit" class="btn mt-3">Cancel</a>
                        <button type="submit" class="btn mt-3">Submit</button>
                    </form>
                    <p>Not yet a member?</p> <a><button type="submit" class="btn mb-5">Register Here</button></a>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                    <img src="/img/landing/symmetra.gif" id="login_img" style="height: 90%; border: 10px solid">
                </div>

            </div>
        </div>
    </section>
    @include('layouts/footer')
</body>

</html>