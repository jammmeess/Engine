<html lang="en">

<head>
    @include("layouts/head")
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Support</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="container mx-5 my-4" id="support">
        <div class="row">
            <div class="col-lg-12 text-light text-align-center">
                <h2>We're sorry to hear you have trouble logging in.</h2>
                <h3>But hey, it happens to the best of us!</h3>
            </div>


            <div class="col-lg-12 text-light mt-5">
                <label for="forgot_pw">Please enter your email address and we'll send you a link to retrieve your account.</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control mt-2" name="forgot_pw" id="forgot_pw" placeholder="ex. super_mario@engine.com">
                    <a class="btn mb-5 mt-3" href="/register">Send </a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>

</html>