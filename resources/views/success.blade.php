<html lang="en">

<head>
    @include("layouts/head")
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Success!</title>
</head>

<body>
    <section>
        @include("layouts/navbar")

        <div class="container">
            <div class="row px-5 py-5" id="success">
                <div class="col-lg-12">
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