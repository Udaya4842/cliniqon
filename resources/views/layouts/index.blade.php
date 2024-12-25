<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>@yield('title') - Cliniqon</title>
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon.png" />
    
    
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/assets/css/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/css/main.css" />
    <link rel="stylesheet" href="public/assets/css/services.css" />
    <link rel="stylesheet" href="public/assets/css/blogs.css" />
    
</head>

<body>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')









    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/popper.min.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>
    <script src="public/assets/js/swiper-bundle.min.js"></script>
    <script src="public/assets/js/main.js"></script>
</body>

</html>
