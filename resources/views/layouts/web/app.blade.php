<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="body-wrapper body-digital-agency">

    @include('partials.header')

    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>
                {{ $slot }}
            </main>

            @include('partials.footer')

        </div>
    </div>

</body>

</html>