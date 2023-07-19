<html lang="en">

<head>
    @include("layouts/head")
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Success!</title>
</head>

<body>
    <section>
        @include("layouts/navbar")

        <div class="container-fluid d-none d-sm-block mx-5 my-5">
            <div class="row px-5 py-5" id="success">
                <div class="col-lg-12 text-light">
                    <h3>Registration Success!</h3>
                    <p> Click the link below to Proceed to the Log in page</p>
                    <a href='/login' class="btn">To Login Page</a>
                </div>
            </div>
        </div>
        <!-- Responsive -->
        <div class="container-fluid d-block d-sm-none mx-2 my-5">
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