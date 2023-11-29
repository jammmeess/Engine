<html lang="en">

<head>
    @include("layouts/head")

    <title>Profile</title>
</head>

<body>
    @include('layouts/navbar')
    @include("layouts/errors")
    <div class="container d-none d-sm-block">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 mt-5">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <img src="/img/user_profiles/{{$u -> image}}" class="img-fluid" id="display-photo" /><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="glitch-wrapper">
                            <h4>
                                <div class="glitch userprofile" data-text="Welcome, {{$u->username}}!">Welcome, {{$u->username}}!</div>
                            </h4>
                        </div>
                        <h5 class="text-light"><i>{{$u->first_name}} {{$u->last_name}}</i></h5>
                        <h5 class="text-light"><i>{{$u->birthday}}</i></h5>
                        <button type="button" class="btn mt-3" data-bs-toggle="modal" data-bs-target="#uploadModal">
                            Upload Photo
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row">
            <h3 class="text-light text-center mt-5 pt-5">Games you own</h3>
            <div class="line mt-3"></div>
        </div> -->
    </div>


    <!-- Responsive -->
    <div class="container d-block d-sm-none">
        <div class="row d-flex justify-content-center ">
            <div class="col-12">
                <div class="text-start">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <img src="/img/user_profiles/{{$u -> image}}" id="display-photo-responsive" /><br>
                        </div>
                        <div class="col-12 ">
                            <div class="glitch-wrapper">
                                <h4>
                                    <div class="glitch mt-3 userprofile-responsive" data-text="Welcome, {{$u->username}}!">Welcome, {{$u->username}}!</div>
                                </h4>
                            </div>
                            <h5 class="text-light"><i>{{$u->first_name}} {{$u->last_name}}</i></h5>
                            <h5 class="text-light"><i>{{$u->birthday}}</i></h5>
                            <button type="button" class="btn mt-3" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                Upload Photo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Photo -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-dark">
                    <h5 class="modal-title" id="uploadModalLabel">Change your profile picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-secondary">
                    <form action="/profile/{{$u -> user_id}}/upload_photo" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input class="mt-5" type="file" name="image"></input><br>
                        <button type="submit" class="btn mt-5">Upload</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>

</html>