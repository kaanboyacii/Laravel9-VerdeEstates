<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" />
    <title>
      Verde estates
    </title>
  </head>
  <body>
        @include("home.header")

        @yield('content')

        @include("home.footer")
</body>

</html>