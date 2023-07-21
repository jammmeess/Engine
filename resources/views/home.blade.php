<html lang="en">

<head>
    @include("layouts/head")
    @include('layouts/scroll_fade')
    <title>Home</title>
</head>

<body>
    <section>
        @include("layouts/navbar")
        <!-- Hero Banner -->
        @include('landing/hero')
        <!--About  -->
        @include('landing/about')
        <!-- Games -->
        @include('landing/games')
        <!-- FAQS -->
        @include('landing/faqs')
        <!-- footer -->
        @include("layouts/footer")
    </section>
</body>


</html>