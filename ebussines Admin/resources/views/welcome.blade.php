<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="generator" content="Hugo 0.111.3">
        <title>Home</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">




        <link href="../js/assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
            z-index: 1500;
        }
        </style>


        <!-- Custom styles for this template -->
        <link href="product.css" rel="stylesheet">
    </head>
    <body >
            <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 10px;">
                <div class="my-3 py-3">
                    <h2 class="display-5">EBUSINESS</h2>
                    <p class="lead">Bienvenido.</p>
                </div>
            </div>
        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-dark">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            
        </div>
            

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" >
            <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 10px;">
                <div class="my-3 py-3">
                    <h2 class="display-5">Los mejores escritorios</h2>
                    <p class="lead">Calidad y precio.</p>
                    <img src="https://ebani.com.co/wp-content/uploads/2021/07/Escritorio-para-pc-o-Estudio-Doble-Extensible-1-Ebani-Colombia-tienda-online-de-decoracion-y-mobiliario-Jardin-de-julia.jpg" 
                    height="800">
                </div>
            </div>
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 10px;">
            <div class="my-3 p-3">
                <h2 class="display-5">Los mejores estilos</h2>
                <p class="lead">Diferentes modelos a tu disposición</p>
                <img src="https://www.viviendasaludable.es/wp-content/uploads/2015/06/elegir-armario-dormitorio.jpg" 
                    width="400" height="800">
            </div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" style="display: flex; justify-content: center; ">
            
            <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 10px; display: flex; justify-content: center;">
                <div class="my-3 py-3">
                    <h2 class="display-5">Encuentranos</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4944022814207!2d-74.10548368255616!3d4.683796099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b6b0a37d83d%3A0xf1859530a183293c!2sCra.%2076%20%2366-21%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1654031793807!5m2!1ses-419!2sco" 
                        width="1000" height="450" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        
        </div>
        </main>

        <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            <small class="d-block mb-3 text-body-secondary">&copy; 2017–2023</small>
            </div>
            <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Cool stuff</a></li>
                <li><a class="link-secondary" href="#">Random feature</a></li>
                <li><a class="link-secondary" href="#">Team feature</a></li>
                <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                <li><a class="link-secondary" href="#">Another one</a></li>
                <li><a class="link-secondary" href="#">Last time</a></li>
            </ul>
            </div>
            <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Resource name</a></li>
                <li><a class="link-secondary" href="#">Resource</a></li>
                <li><a class="link-secondary" href="#">Another resource</a></li>
                <li><a class="link-secondary" href="#">Final resource</a></li>
            </ul>
            </div>
            <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Business</a></li>
                <li><a class="link-secondary" href="#">Education</a></li>
                <li><a class="link-secondary" href="#">Government</a></li>
                <li><a class="link-secondary" href="#">Gaming</a></li>
            </ul>
            </div>
            <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Team</a></li>
                <li><a class="link-secondary" href="#">Locations</a></li>
                <li><a class="link-secondary" href="#">Privacy</a></li>
                <li><a class="link-secondary" href="#">Terms</a></li>
            </ul>
            </div>
        </div>
        </footer>


    <script src="../js/assets/dist/js/bootstrap.bundle.min.js"></script>

      
            
        </div>
        
       
        
    </body>
</html>
