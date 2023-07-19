<html lang="en">

<head>
    @include("layouts/head")
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Welcome</title>
</head>

<body>
    <section>
        @include("layouts/navbar")
        <!-- Hero Banner -->
        @include('landing/userhero')
        <!--About  -->
        @include('landing/about')
        <!-- Games -->
        @include('landing/usergames')
        <!-- Faqs -->
        @include('landing/faqs')
        <!-- footer -->
        @include("layouts/footer")
    </section>
</body>


</html>