<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D&A Software R</title>
    <link href="https://fonts.cdnfonts.com/css/orbitron" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/bootstrap-4.3.1.css','resources/js/jquery-3.3.1.min.js', 'resources/js/popper.min.js','resources/js/bootstrap-4.3.1.js',])
    <link rel="icon" type="image" href="./img/favicon.png" />
  </head>
  <body id="main">
    <!-- HEADER -->
    <header class="header-nav">
      <div id="header">
        <div id="container_nav">
          <div class="container-logo">
            <img src="./img//icono-logo.png" id="icono-logo" alt="" />
            <span> D&A Software R </span>
          </div>
          <div class="container-svg-navbar">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="34"
              height="34"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2 tootle-navbar"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="" />
              <path d="M4 6l16 0" />
              <path d="M4 12l16 0" />
              <path d="M4 18l16 0" />
            </svg>
          </div>
        </div>
      </div>
      <nav id="navbar" class="hidden">
        <ul id="ul_navbar">
          <li><a href={{ route('inicio') }} >Inicio</a></li>
          <li><a href={{route('portafolio')}}>Portafolio</a></li>
          <li><a href={{route('catalago')}}>Catálogo</a></li>
          <li><a href={{route('contacto')}}>Contacto</a></li>
          <li>
            <a 
            href={{route('login')}}
            id="icono-span">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-user icono-user"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg>
              <span> Acceso </span>
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <!--INDEX  CATALAGO -->
    <article>
      <header class="header-catalogo">
        <h1 class="title-catalogo">Catálogo</h1>
      </header>

      <div class="container mt-3 mb-5">
        <!--<img src="images/D&A.png">
        <a>Software R</a> -->

        <div class="row">
          <div class="col-12">
            <div
              id="carouselExampleControls"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#carouselExampleControls"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li
                  data-target="#carouselExampleControls"
                  data-slide-to="1"
                ></li>
                <li
                  data-target="#carouselExampleControls"
                  data-slide-to="2"
                ></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    class="d-block w-100"
                    src="img/Banner1.png"
                    alt="First slide"
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Portafolio de proyectos</h5>
                    <p>Te invitamos a conocer nuestros trabajos realizados</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    class="d-block w-100"
                    src="img/Banner2.png"
                    alt="Second slide"
                  />
                  <div class="carousel-caption">
                    <h5 class="title-carousel">Sitios Web</h5>
                    <p>Del 17 - 24 junio</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    class="d-block w-100"
                    src="img/Banner3.png"
                    alt="Third slide"
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Cursos Online</h5>
                    <p>Conoce nuestros cursos online que tenemos para ti</p>
                    <p></p>
                  </div>
                </div>
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselExampleControls"
                role="button"
                data-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a
                class="carousel-control-next"
                href="#carouselExampleControls"
                role="button"
                data-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Siguiente</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- ARTE Y DISEÑO -->
    <article class="section2" id="section2">
      <div class="section2-header">
        <h2 class="section2-title">Arte Y Diseño</h2>
      </div>

      <section class="section2-content">
        
        <div class="section2-item">
          <div class="item-image-section2"></div>
          <div class="item-info">
            <br />
            <p class="item-data">9 MARZO 2024</p>
            <h3 class="items-title">Diseños</h3>
            <p class="item-body">
              Proyectamos comunicaciones visuales destinadas a transmitir
              mensajes especificos.
            </p>
          </div>
          <div class="content-items-footer">
            <div class="item-icons">
              <div class="icon-container">DATA</div>
              <div class="icon-container">DATA</div>
            </div>
          </div>
        </div>

        <div class="section2-item">
          <div class="item-image-section2"></div>
          <div class="item-info">
            <br />
            <p class="item-data">15 Mayo 2024</p>
            <h3 class="items-title">Mockups</h3>

            <p class="item-body">
              Diseñamos montajes que simula el resultado de un producto y que
              sirve para obtener aprobación de tu cliente.
            </p>
          </div>
          <div class="content-items-footer">
            <div class="item-icons">
              <div class="icon-container">DATA</div>
              <div class="icon-container">DATA</div>
            </div>
          </div>
        </div>

        <div class="section2-item">
          <div class="item-image-section2"></div>
          <div class="item-info">
            <br />
            <p class="item-data">01 JULIO 2024</p>
            <h3 class="items-title">Identidad</h3>
            <p class="item-body">
              Realizacmos elemntos visuales que expresan los valores y objetivos
              de tu empresa.
            </p>
          </div>
          <div class="item-icons">
            <div class="icon-container">DATA</div>
            <div class="icon-container">DATA</div>
          </div>
        </div>
        <div class="section2-item">
          <div>
            <div class="item-image-section2"></div>
            <div class="item-info">
              <br />
              <p class="item-data">12 AGOSTO 2024</p>
              <h3 class="items-title">Cursos Online</h3>
              <p class="item-body">
                Aprende a desarrollar y diseñar nuevas tecnologias de forma no
                presencial y a tu ritmo.
              </p>
            </div>
          </div>
          <div class="content-items-footer">
            <div class="item-icons">
              <div class="icon-container">DATA</div>
              <div class="icon-container">DATA</div>
            </div>
          </div>
        </div>
      </section>
    </article>

    <!-- TE PUEDE INTERESAR -->

    <article class="section1" id="section1">
      <section class="section1-content">
        <div class="section1-title">
          <h2>Te puede interesar</h2>
        </div>
        <div class="section1-grid">
          <div class="section1-item">
            <div class="item-image"></div>
            <div class="item-title">
              <h3>Sitios Web</h3>
            </div>
            <div class="item-price">
              <div class="price-old">$7500.00</div>
              <div class="price-new">$5625.00</div>
            </div>
          </div>
          <div class="section1-item">
            <div class="item-image"></div>
            <div class="item-title">
              <h3>E-Commerce</h3>
            </div>
            <div class="item-price">
              <div class="price-old">$17,400.00</div>
              <div class="price-new">$12,180.00</div>
            </div>
          </div>
          <div class="section1-item">
            <div class="item-image"></div>
            <div class="item-title">
              <h3>Marketing Digital</h3>
            </div>
            <div class="item-price">
              <div class="price-old">$2,700.00</div>
              <div class="price-new">$2,295.00</div>
            </div>
          </div>
          <div class="section1-item">
            <div class="item-image"></div>
            <div class="item-title">
              <h3>Aplicaciones Moviles</h3>
            </div>
            <div class="item-price">
              <div class="price-old">$2,300.00</div>
              <div class="price-new">$1,800.00</div>
            </div>
          </div>
        </div>
      </section>
    </article>

    <!-- TABLAS DE PRECIOS -->
    <article class="container">
      <div class="row">
        <div class="container py-sm-4">
          <div class="row">
            <div class="col-md-10 my-4 mx-auto">
              <h2 class="title-tablas-precio">Tablas de precios</h2>
              <div class="row no-gutters my-3">
                <div class="col-md-4">
                  <div class="list-group text-center my-3">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Curso Online</h4>
                    </div>
                    <div
                      class="list-group-item text-uppercase font-weight-bold"
                    >
                      Paquete
                    </div>
                    <a href="#" class="list-group-item">
                      HTML(HyperText Markup Language)
                    </a>
                    <a href="#" class="list-group-item">
                      CSS (Cascading Style Sheets)
                    </a>
                    <a href="#" class="list-group-item"> Java Script (JS) </a>
                    <a href="#" class="list-group-item">
                      WAMPServer (Servidor Virtual)
                    </a>
                    <div class="list-group-item">
                      <button
                        class="btn btn-success btn-lg btn-block text-truncate"
                      >
                        Contratar
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Ecommerce<br /></h4>
                    </div>
                    <div
                      class="list-group-item text-uppercase font-weight-bold"
                    >
                      $17350.00
                    </div>
                    <a href="#" class="list-group-item">
                      Diseño de la Ecommerce
                    </a>
                    <a href="#" class="list-group-item">
                      Correos electrónicos ilimitados
                    </a>
                    <a href="#" class="list-group-item"> Pasarela de pagos </a>
                    <a href="#" class="list-group-item">
                      50 Productos en tienda virtual
                    </a>
                    <a href="#" class="list-group-item">
                      Conectividad con Android & iOS
                    </a>
                    <a href="#" class="list-group-item"> Monitoreo 24/7 </a>
                    <div class="list-group-item">
                      <button
                        class="btn btn-success btn-lg btn-block text-truncate"
                      >
                        Contratar
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-group text-center my-3">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Sitio Web</h4>
                    </div>
                    <div
                      class="list-group-item text-uppercase font-weight-bold"
                    >
                      $9350.00
                    </div>
                    <a href="#" class="list-group-item">
                      Diseño del Sitio Web
                    </a>
                    <a href="#" class="list-group-item"> Correos ilimitados </a>
                    <a href="#" class="list-group-item">
                      Compatibilidad con Android & iOS
                    </a>
                    <a href="#" class="list-group-item"> Monitoreo 24/7 </a>
                    <div class="list-group-item">
                      <button
                        class="btn btn-success btn-lg btn-block text-truncate"
                      >
                        Contratar
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- FOOTER -->

    <footer class="footer">
      <div class="footer-content">
        <!-- COLUMNA 1 -->
        <div class="column1">
          <!-- LOGO -->
          <div class="logo-footer">
            <img src="./img/icono-logo.png" alt="Logo" />
            <p>&nbsp D&A Software R</p>
          </div>
          <!-- Social Icons and Newsletter -->
          <div class="social-newsletter">
            <div class="container-social">
              <div class="social-icons">
                <img src="./img/icono-facebook.png" alt="Facebook" />
                <img src="./img/icono-twiter.png" alt="Twitter" />
                <img src="./img/icono-linkeind.png" alt="LinkedIn" />
                <img src="./img/icono-instagram.png" alt="Instagram" />
                <img src="./img/icono-youtube.png" alt="YouTube" />
              </div>
            </div>
          </div>
        </div>
        <!-- COLUMNA 2 -->
        <div class="column2">
          <div class="links">
            <h3>Enlaces</h3>
            <p id="link">BoysEng</p>
            <p id="link">Calabozos y dragones</p>
            <p id="link">Delicias del hogar</p>
          </div>
          <div class="office">
            <h3>Oficina</h3>
          </div>
          <div class="info">
            <h3>Información</h3>
          </div>
          <div class="subscribe">
            <p>Cotizaciones</p>

            <input
              id="input-correo"
              type="text"
              placeholder="Correo electronico"
            />
            <button>Enviar</button>
          </div>
        </div>
        <!-- COLUMNA 3 -->
        <div class="column3" id="column3">
          <div class="content-comunicate">
            <img id="social" src="./img/icono-ubicacion.png" alt="Location" />
            <h3>Boca del Río,Veracruz</h3>
          </div>
          <div class="content-comunicate">
            <img id="social" src="./img/icono-mail.png" alt="Email" />
            <h3>rrodriguez@dasoftwarer.com</h3>
          </div>
          <div class="content-comunicate">
            <img
              class="content-comunicate"
              id="social"
              src="./img/icono-call.png"
              alt="Phone"
            />
            <h3>Teléfono: 2294618601</h3>
          </div>
        </div>
      </div>
      <!-- AVISO PRIVACIDAD -->
      <div class="privacy">
        <p class="privacy_descripcion">
          © 2024 All Rights Reserved. D&A Software R
        </p>
      </div>
    </footer>
  </body>
</html>
