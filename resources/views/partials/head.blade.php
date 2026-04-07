<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ $description ?? config('app.name') }}">

<title>
    {{ filled($title ?? null) ? $title . ' - ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

<!-- Fav Icon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/favicon.png') }}">

<!-- Dependencies CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome-pro.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Vicio" />
<link rel="manifest" href="/site.webmanifest" />


<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">