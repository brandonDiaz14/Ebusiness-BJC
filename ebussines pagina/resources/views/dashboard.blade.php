<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Inicio</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <div style="border-radius: 10px; position: relative; margin: 10px; text-align: center;">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Hola Bienvenido ') }} {{ Auth::user()-> name }}
                    </h2>
                </div>
                <center>
                    <div name="carrito" style="margin: 5px; text-align: right; width: 10%;">
                        <x-dropdown style>
                            <x-slot name="trigger">
                                <button class="btn btn-light">
                                    <p style="color: black;">Carrito</p>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Lo que tienes en el carrito') }}
                                </div>

                                @foreach($carrito as $car)
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        <p>{{$car->nombre_poducto }}</p>
                                        <p>{{$car->precio_producto }}</p>
                                        <p>cantidad: {{$car->cantidad_productos }}</p>

                                    </div>
                                @endforeach
                                    <button>eliminar</button>
                                <div class="border-t border-gray-200"></div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </center>

            </div>

        </x-slot>
        @php
        $contador = 0;
        @endphp

        <div class="container">
            <div class="row">
                @foreach($producto as $produ)
                @if($contador == 4)
                <div
                    style="border-radius: 10px; display: flex; justify-content: center; background-color: black; position: relative; margin: 10px;">
                    <div style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); z-index: 1;">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: black;">Encuéntranos
                        </h2>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4944022814207!2d-74.10548368255616!3d4.683796099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b6b0a37d83d%3A0xf1859530a183293c!2sCra.%2076%20%2366-21%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1654031793807!5m2!1ses-419!2sco"
                        width="800" height="250" style="border:0; margin: 10px; border-radius: 10px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                @endif
                <div class="col-md-3" style="border-radius: 20px;">
                    <div class="card mt-3" style="height: 600px; border-radius: 20px;">
                        @foreach($imagen as $imag)

                        @if($imag->producto_id_produ == $produ->id_produ)
                        <img src="{{$imag->nombre_imagen}}" class="img-fluid">
                        @endif
                        @endforeach

                        <div class="card-body" style="border-radius: 20px; position: relative;">
                            <div style="text-align: center;">
                                <h3 class="display-6" >{{ $produ->Nom_produ }}</h3>
                                <p class="lead">{{ $produ->precio }}</p>
                                <form action="{{route('guardar.carrito')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$produ->Nom_produ}}" name="nombre_poducto">
                                    <input type="hidden" value="{{$produ->precio}}" name="precio_producto">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="usuario">
                                    <button type="submit" class="btn btn-primary" style="color: black;">Agregar
                                        Carrito</button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                @php
                $contador = $contador+1;
                @endphp

                @endforeach


            </div>
        </div>
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
                        viewBox="0 0 24 24">
                        <title>Product</title>
                        <circle cx="12" cy="12" r="10" />
                        <path
                            d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                    </svg>
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

    </x-app-layout>




</body>

</html>