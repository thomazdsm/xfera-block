<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description"
          content="Somos a XFera Tech, sua parceira de confiança no desenvolvimento de plataformas inovadoras. Combinamos expertise e paixão para oferecer soluções de ponta em eventos acadêmicos e ensino EAD. Junte-se a nós e embarque na jornada da educação digital.">
    <meta name="keywords"
          content="EAD, Educação a Distância, Ensino EAD, AVA, Ambiente Virtual de Aprendizagem, Eventos Acadêmicos">
    <meta name="author" content="XFera Tech">

    <meta property="og:title" content="XFera Tech">
    <meta property="og:description"
          content="Somos a XFera Tech, sua parceira de confiança no desenvolvimento de plataformas inovadoras. Combinamos expertise e paixão para oferecer soluções de ponta em eventos acadêmicos e ensino EAD. Junte-se a nós e embarque na jornada da educação digital.">
    <meta property="og:image" content="{{ asset('images/xfera/logo.png') }}">

    <title>XFera Tech</title>
    <link rel="icon" type="image/png" href="{{ asset('images/xfera/logo.png') }}">


    @include('home.partials.head-links')

    @yield('style')
</head>
<body>
@include('home.partials.navbar')

@yield('content')

@include('home.partials.footer')

<!-- Scroll top -->
<div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path
            d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z"/>
    </svg>
</div>

@include('home.partials.scripts')
@yield('script')
</body>
</html>
