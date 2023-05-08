<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="RAZAFIMANDIMBY Toky Jonathan ETU 1660">
        <link rel="shortcut icon" href="{{ asset ('assets/img/favicon.png') }}">
        
        <meta name="keywords" content="IA, Artificial Intelligence, Intelligence Artificiel, News, Actu" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        
    {{--    STYLE CSS     --}}
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/tomselect.min.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/fonts/flaticon/font/flaticon.css') }}">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
        <link rel="stylesheet" href="{{ asset ('assets/css/tiny-slider.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
    
        <link rel="stylesheet" href="{{ asset ('assets/css/flatpickr.min.css') }}">
        
        <style>
            @layer reset {
                button {
                    all: unset;
                }
            }
        </style>
    
         <title>@yield('title') | Actu IA</title>
    </head>
    <body>

    @yield('navigation')
    
    <div class="container mt-5">
         @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    
        @if(session('error'))
             <div class="alert alert-danger alert-dismissible" role="alert">
                {{ session('error') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
             @endif

    </div>
    
    @yield('content')


        
    
        {{--    JAVASCRIPT  --}}
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    
    
        <script src="{{ asset ('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset ('assets/js/tiny-slider.js') }}"></script>
    
        <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    
    
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset ('assets/js/glightbox.min.js') }}"></script>
        <script src="{{ asset ('assets/js/navbar.js') }}"></script>
        <script src="{{ asset('assets/js/counter.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    </body>
</html>
