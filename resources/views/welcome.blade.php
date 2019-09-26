<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
    <div id="app">
        <header>
            <nav>
                <a href="">Inicio</a>
                <a href="">Acerca de</a>
                <a href="">Portafolio</a>
                <a href="">Servicios</a>
                <a href="">Contacto</a>
                @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/home') }}">ESCRITORIO</a>
                        @else
                            <a href="{{ route('login') }}">INGRESAR</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">REGISTRARSE</a>
                            @endif
                        @endauth

                @endif
            </nav>
            <section class="textos-header">

                     @yield('content')

            </section>
            <div class="holaa" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.22,54.77 C262.69,157.39 235.04,-24.17 504.79,69.56 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
        </header>
        <main>
            <section class="contenedor sobre-nosotros">
                <h2 class="titulo">
                    Nuestro producto
                </h2>
                <div class="contenedor-sobre-nosotros">
                    <img src="img/developer.svg" alt="" class="imagen-developer">
                    <div class="contenido-textos">
                        <h3><span>1</span> Los mejores productos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vero, perspiciatis doloribus totam beatae provident quo natus consequuntur autem facilis! Sit eius deleniti dicta veritatis quam accusantium nemo modi qui!</p>

                        <h3><span>2</span> Los mejores productos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vero, perspiciatis doloribus totam beatae provident quo natus consequuntur autem facilis! Sit eius deleniti dicta veritatis quam accusantium nemo modi qui!</p>

                        <h3><span>3</span> Los mejores productos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vero, perspiciatis doloribus totam beatae provident quo natus consequuntur autem facilis! Sit eius deleniti dicta veritatis quam accusantium nemo modi qui!</p>
                    </div>
                </div>
            </section>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Portafolio</h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="img/img1.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/img2.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/img3.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/img4.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/img5.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/img6.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/img7.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/img8.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Nuestro trabajo</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="clientes contenedor">
                <h2 class="titulo">Que dicen nuestro clientes</h2>
                <div class="cards">
                    <div class="card">
                        <img src="img/face1.jpg" alt="">
                        <div class="contenido-textos-card">
                            <h4>Jorge Peralta</h4>
                            <p>Lorem ipsum laboriosam, repellat odit voluptatem ipsum laboriosam, repellat odit voluptatem!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/face2.jpg" alt="">
                        <div class="contenido-textos-card">
                            <h4>Silvana marquina</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur  ipsum laboriosam, repellat odit volupt atemvo luptatem!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-services">
                <div class="contenedor">
                    <h2 class="titulo">Nuestros servicios</h2>
                    <div class="servicio-cont">
                        <div class="servicio-ind">
                            <img src="img/ilustracion1.svg" alt="">
                            <h3>Marcos andia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quisquam iu e officia quibusdam provident perspiciatis, deserunt similique! Sapiente, corporis.</p>
                        </div>
                        <div class="servicio-ind">
                            <img src="img/ilustracion2.svg" alt="">
                            <h3>Marcos andia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quisquam iusto officia quibusdam provident perspiciatis, deserunt similique! Sapiente, corporis.</p>
                        </div>
                        <div class="servicio-ind">
                            <img src="img/ilustracion3.svg" alt="">
                            <h3>Marcos andia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quisquam iust officia quibusdam provident perspiciatis, deserunt similique! Sapiente, corporis.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="contenedor-footer">
                <div class="content-foo">
                    <h4>Teléfono</h4>
                    <p>312685161</p>
                </div>
                <div class="content-foo">
                    <h4>E-mail</h4>
                    <p>jorge@gmail.com</p>
                </div>
                <div class="content-foo">
                    <h4>Dirección</h4>
                    <p>312685161</p>
                </div>
            </div>
            <h2 class="titulo-final">&copy; Jorge Peralta | UATF </h2>
        </footer>
        </div>
    </body>
</html>
