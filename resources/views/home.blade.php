<html lang="en">

<head>
    @include("layouts/head")
    <script src="/js/welcome.js"></script>
    <link rel="stylesheet" href="/css/styles.css" />
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
        <!-- footer -->
        @include("layouts/footer")
    </section>
</body>


</html>