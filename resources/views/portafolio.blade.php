<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D&A Software R</title>
    <link href="https://fonts.cdnfonts.com/css/orbitron" rel="stylesheet" />
    <link rel="stylesheet" href={{ asset('css/styles.css')}} />
    <link rel="icon" type="image" href="./img/favicon.png" />

    <style>
      swiper-container {
        width: 100%;
        height: 52rem;
      }

      @media (min-width: 1024px) {
        swiper-container {
          height: 27rem;
        }
      }

      swiper-slide {
        display: flex;
        justify-content: center;
      }
    </style>
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

    <!-- HERO -->
    <article class="portfolio-section" id="section1">
      <div class="portfolio-header">
        <h1 class="portfolio-title">Portafolio de proyectos</h1>
      </div>

      <article class="portfolio-content">
        <section class="portfolio-items">
          <div class="portfolio-item-container">
            <div>
              <h1 class="portfolio-item-title">
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
                  class="icon icon-tabler icons-tabler-outline icon-tabler-star"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                  />
                </svg>
                Sitios Web
              </h1>
              <p class="portfolio-item-description">
                Los Sitios Web que desarrollamos cuentan con sistemas de
                optimización de búsqueda (SEO). Los cuales tienen la finalidad
                de aumentar hasta un 65% del tráfico proveniente de los motores
                de búsqueda.
              </p>
            </div>
            <div>
              <h1 class="portfolio-item-title">
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
                  class="icon icon-tabler icons-tabler-outline icon-tabler-star"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                  />
                </svg>
                E-Commerce
              </h1>
              <p class="portfolio-item-description">
                E-Commerce establece una conexión con tus posibles clientes,
                para proporcionar características de los productos o servicios
                que se desea vender, mejorando 40% el margen de venta.
              </p>
            </div>
            <div>
              <h1 class="portfolio-item-title">
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
                  class="icon icon-tabler icons-tabler-outline icon-tabler-star"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                  />
                </svg>
                Marketing digital
              </h1>
              <p class="portfolio-item-description">
                Marketing digital tiene como objetivo posicionar a tu marca en
                el lugar y momento adecuado de la jornada de compra para ofrecer
                las mejores soluciones.del mercado.
              </p>
            </div>
            <!-- Repeat for other items -->
          </div>
        </section>
        <section class="portfolio-welcome">
          <iframe
            width="580"
            height="340"
            src="https://www.youtube-nocookie.com/embed/4jhdse_JgjI/edit"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
        </section>
      </article>
    </article>

    <!-- FORMAS DE TRABAJO -->
    <article class="forma-trabajo">
      <header class="header-forma-trabajo">
        <h2 class="header-title-forma-trabajo">Nuestra forma de trabajo</h2>
      </header>
      <section class="container-forma-trabajo">
        <div class="card-forma-trabajo">
          <div class="img-forma-trabajo">+</div>
          <div class="title-forma-trabajo">Idea</div>
          <div class="text-forma-trabajo">
            Es una etapa que integra la investigación de todos los parámetros
            necesarios para la contrucción de un sistema, con el objetivo de
            idealizar un prototipo que esté abierto a cambios y mejoras.
          </div>
        </div>

        <div class="card-forma-trabajo">
          <div class="img-forma-trabajo">+</div>
          <div class="title-forma-trabajo">Diseño</div>
          <div class="text-forma-trabajo">
            En esta etapa de presentación se incluye un Mockup, el cual brinda
            características de interacción usuario-sistema. Con el objetivo de
            verificar el funcionamiento del sistema con el mundo real.
          </div>
        </div>
        <div class="card-forma-trabajo">
          <div class="img-forma-trabajo">+</div>
          <div class="title-forma-trabajo">Codificación</div>
          <div class="text-forma-trabajo">
            En esta etapa se realiza la construcción del sistema por medio de
            módulos, que brindan opciones de escabilidad y rendimiento. Los
            módulos se desarrollan a través de sub etapas llamadas modelo, vista
            y controlador.
          </div>
        </div>
        <div class="card-forma-trabajo">
          <div class="img-forma-trabajo">+</div>
          <div class="title-forma-trabajo">Entrega</div>
          <div class="text-forma-trabajo">
            Es el momento donde el sistema se pone en marcha con el mundo real,
            se debe corroborar que todos los procesos del sistema sean correctos
            de acuerdo a las peticiones del cliente.
          </div>
        </div>
        <div class="card-forma-trabajo">
          <div class="img-forma-trabajo">+</div>
          <div class="title-forma-trabajo">Mantenimiento</div>
          <div class="text-forma-trabajo">
            Es la revisión del sistema para conocer el rendimiento de los
            procesos.
          </div>
        </div>
      </section>
      <div class="container-button-forma-trabajo">
        <button>Saber más</button>
      </div>
    </article>

    <!-- DESTACADOS -->
    <article class="article-destacados">
      <header class="header-destacados">
        <h2 class="header-title-destacados">Destacados</h2>
      </header>

      <swiper-container
        class="mySwiper"
        pagination-clickable="true"
        slides-per-view="1"
        grid-rows="2"
        space-between="30"
      >
        <swiper-slide>
          <section class="container-card">
            <div class="img-destacados">
              <img
                src="./img/mega-farmacia.png"
                class="image-destacado-1"
                alt="Logo"
              />
            </div>
            <div class="container-text-destacados">
              <h3 class="title-destacados">Mega Servicios</h3>
              <p class="text-destacados">
                Software para la gestión y administración de medicamentos,
                cuenta con diferentes conexiones a base de datos de provedores
                obteniendo un catálago de precios y productos optimizado.
              </p>
            </div>
            <div class="container-buttons-destacados">
              <button class="button-destacados">Leer Mas ></button>
            </div>
          </section>
        </swiper-slide>

        <swiper-slide>
          <article class="container-card">
            <div class="img-destacados">
              <img
                src="./img/cecauv.png"
                class="image-destacado-2"
                alt="Logo"
              />
            </div>
            <div class="container-text-destacados">
              <h3 class="title-destacados">CECAUV</h3>
              <div class="container-title-subtitle">
                <h3 class="subtitle-destacados">A.I.R.E</h3>
              </div>

              <p class="text-destacados">
                Tiene como objetivo la reanimación cardiopulmonar de calidad
                para público en general, que no cuenta con conocimientos
                técnicos para realizar RCP de manera automática.
              </p>
            </div>
            <div class="container-buttons-destacados">
              <button class="button-destacados">Leer Mas ></button>
            </div>
          </article>
        </swiper-slide>
        <swiper-slide>Slide 3</swiper-slide>
        <swiper-slide>Slide 4</swiper-slide>
      </swiper-container>
    </article>

    <!-- BOYSENG -->
    <article class="grid-article-boy-send" id="section1">
      <section class="container-boy-send">
        <div class="">
          <img
            class="logo-boyseng"
            src="./img/boyseng.png"
            height="125"
            width="125"
            alt=""
          />
          <h2 class="title-boyseng">BoySeng</h2>

          <br />

          <p class="article-boyseng">
            TODOS PODEMOS REALIZAR <br />
            PROYECTOS DE INGENIERIA
          </p>
        </div>

        <div class="container-boysend-dowload">
          <div class="container-dowload">
            <div>
              <img class="img-play-store" src="./img/playstore.png" alt="" />
            </div>
            <div>
              <img class="img-apple-store" src="./img/appstore.png" alt="" />
            </div>
          </div>
          <div class="container-text-boy-send">
            <p class="text-12px mt-8 text-boy-send">
              Un buen ingenierio trabaja con disciplina y constancia desde el
              primer día. Te deseamos éxito!!!
            </p>
          </div>
        </div>
      </section>
    </article>

    <div class="container-phone">
      <div class="" id="container-img-phone">
        <img
          id="img-phone-1"
          src="./img/boyseng.jpeg"
          alt="aplicacion-boysend"
        />
      </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
