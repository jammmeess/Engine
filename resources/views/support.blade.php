<html lang="en">

<head>
    @include("layouts/head")
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Support</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="container-fluid mx-5 py-5 my-5" id="support">
        <div class="row">
            <div class="col-lg-12 text-light">
                <h2>Engine_ Support</h2>
                <h3>What do you need help with?</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-light mt-5">
                <p>Please Sign in to your account to review purchases, account status, and get personalized help.</p>
                <div class="col-lg-8">
                    <a class="btn mb-5 me-3" href="/login">Log in to Engine_ </a>
                    <a class="btn mb-5" href="/register">Register</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-light">
                <p>Having trouble logging in?</p>
                <a class="btn" href="/support/forgot_password">Click Here</a>
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>

</html>