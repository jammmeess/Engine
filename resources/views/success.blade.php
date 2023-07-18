<html lang="en">

<head>
    @include("layouts/head")
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Success!</title>
</head>

<body>
    <section>
        @include("layouts/navbar")

        <div class="container d-none d-sm-block">
            <div class="row px-5 py-5" id="success">
                <div class="col-lg-12 text-light">
                    <h3>Registration Success!</h3>
                    <p> Click the link below to Proceed to the Log in page</p>
                    <a href='/login' class="btn">To Login Page</a>
                </div>
            </div>
        </div>
        <!-- Responsive -->
        <div class="container d-block d-sm-none">
            <div class="row" id="success-responsive">
                <div class="col-12 text-light">
                    <h3>Registration Success!</h3>
                    <p> Click the link below to Proceed to the Log in page</p>
                    <a href='/login' class="btn">To Login Page</a>
                </div>
            </div>
        </div>

        @include("layouts/footer")
    </section>
</body>


</html>