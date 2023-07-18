<html lang="en">

<head>
    @include("layouts/head")
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Support</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="container-fluid mx-3 ps-5 py-5 my-5" id="support">
        <div class="row">
            <div class="col-lg-12 col-10 text-light">
                <h2>Engine_ Support</h2>
                <h3>What do you need help with?</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-10 text-light mt-5">
                <label for="issue" class="mb-2">Please describe the issue.</label>
                <div class="form-outline col-lg-6  form-white">
                    <textarea class="form-control mb-3" name="issue" id="issue" rows="8" placeholder="Type your message here..."></textarea>
                </div>
                <div class="col-lg-8">
                    <a class="btn mb-5 me-3" href="#">Submit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5 ps-5">
        <div class="col-lg-12 col-10 text-light">
            @include('layouts/contact')
        </div>
    </div>


    @include('layouts/footer')
</body>

</html>