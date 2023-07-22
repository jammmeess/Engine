<html lang="en">

<head>
    @include("layouts/head")
    <title>Game Profile</title>
</head>

<body>
    @include('layouts/navbar')
    @include("layouts/errors")
    <h1>Profile</h1>
    @foreach ($game as $g)
    <p>Welcome, {{$g -> game_name}}</p>
    <img src="/img/user_profiles/{{$g -> image_1}}" width="250px" /><br>
    <form action="/profile/{{$g -> user_id}}/upload_photo" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="file" name="image"></input><br>
        <input type="submit" class="btn btn-success" value="Upload photo" />
    </form>
    <a href="/logout">Logout</a>
    <h2>Basic Info</h2>
    <ul>
        <li>Birthdate: {{$g-> birthdate}}</li>
        <li>Gender: {{$g-> gender}}</li>
        <li>Province: {{$g-> province}}</li>
    </ul>
    @endforeach
    @include ('layouts/footer')
</body>

</html>