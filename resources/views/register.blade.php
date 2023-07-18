<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Register</title>
</head>

<body>
    @include("layouts/navbar")

    <div class="container px-5 py-5 my-5 d-none d-sm-block" id="reg-bg">
        <div class="row d-flex justify-content-start align-items-center text-light" style="line-height: 40px">
            <div class=" col-lg-12 mx-1 my-4 d-none d-sm-block ">
                <h1>Your adventure is about to begin!</h1>
            </div>

            <div class=" col-lg-6 d-none d-sm-block">
                <h2>Create your account.</h2>
                <form action="/register/success" method="POST">
                    @csrf
                    <div class=" form-group col-lg-10">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="ex. super_mario@gmail.com">
                    </div>


                    <div class="form-group col-lg-10">
                        <label for="username">Username: </label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="ex. supermario_64">
                    </div>


                    <div class="form-group col-lg-10">
                        <label for="f_name">First Name: </label>
                        <input type="text" class="form-control" name="first_name" id="f_name" placeholder="ex. Juan">
                    </div>


                    <div class="form-group col-lg-10">
                        <label for="l_name">Last Name: </label>
                        <input type="text" class="form-control" name="last_name" id="l_name" placeholder="ex. Dela Cruz">
                    </div>

                    <div class="form-group col-lg-10">
                        <label for="b_day">Birthday: </label>
                        <input type="date" class="form-control" name="birthday" id="b_day">
                    </div>

                    <!-- <div class="form-group col-lg-10">
                        <label for="m_number">Phone Number: </label>
                        <input type="number" class="form-control" name="phone_number" id="p_number" placeholder="ex. 09123456789">
                    </div> -->


                    <div class="form-group col-lg-10">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn mt-3 mx-3">Submit</button>
                    <a href="/" class="btn mx-3 mt-3">Cancel</a>

                </form>
            </div>


            <div class="col-lg-6 mb-4 d-none d-sm-block">
                <img src="/img/landing/register.gif" class="img-fluid" style="height: 650px; border: 10px solid black">
            </div>

        </div>
    </div>

    <!-- Responsive -->
    <div class="container px-3 py-3 my-5 d-block d-sm-none" id="reg-bg-responsive">
        <div class="row d-flex justify-content-start align-items-center text-light" style="line-height: 40px">
            <div class=" col-12 mx-1 my-4 d-block d-sm-none">
                <h1>Your adventure is about to begin!</h1>
            </div>

            <div class=" col-12 d-block d-sm-none">
                <h2>Create your account.</h2>
                <form action="/register/success" method="POST">
                    @csrf
                    <div class=" form-group col-12">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="ex. super_mario@gmail.com">
                    </div>


                    <div class="form-group col-12">
                        <label for="username">Username: </label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="ex. supermario_64">
                    </div>


                    <div class="form-group col-12">
                        <label for="f_name">First Name: </label>
                        <input type="text" class="form-control" name="first_name" id="f_name" placeholder="ex. Juan">
                    </div>


                    <div class="form-group col-12">
                        <label for="l_name">Last Name: </label>
                        <input type="text" class="form-control" name="last_name" id="l_name" placeholder="ex. Dela Cruz">
                    </div>

                    <div class="form-group col-12">
                        <label for="b_day">Birthday: </label>
                        <input type="date" class="form-control" name="birthday" id="b_day">
                    </div>

                    <!-- <div class="form-group col-12">
                        <label for="m_number">Phone Number: </label>
                        <input type="number" class="form-control" name="phone_number" id="p_number" placeholder="ex. 09123456789">
                    </div> -->


                    <div class="form-group col-12">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn mt-3  col-5">Submit</button>
                    <a href="/" class="btn  mt-3 me-2 col-5">Cancel</a>

                </form>
            </div>


            <!-- <div class="col-12 mb-4 d-block d-sm-none">
                <img src="/img/landing/register.gif" class="img-fluid" style="height: 650px; border: 10px solid">
            </div> -->

        </div>
    </div>

    @include('layouts/footer')
</body>

</html>