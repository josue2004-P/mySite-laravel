<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D&A Software R</title>
    <link href="https://fonts.cdnfonts.com/css/orbitron" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" type="image" href="./img/favicon.png" />

    <style>
      swiper-container {
        width: 100%;
        height: 100%;
        border-radius: 1rem;
        background-color: white;
      }


      swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>
  <body id="main">
    <!-- HEADER -->
    <header class="header-content">
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
      <!-- NAVBAR -->
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

    <!-- HERO INDEX -->
    <article class="article-grid">
      <section class="section-flex">
        <div>
          <h1 class="title-hero">
            <span class="block">Diseño</span>
            <span class="block">de</span>
            <span class="block">Sitios Web & Apps</span>
          </h1>
          <h2 class="paragraph">
            Calidad e innovación en la creación de tus ideas
          </h2>
        </div>
      </section>
      <section class="container-img-hero">
        <iframe
          src="./img/iphone/index.html"
          width="300"
          height="640"
          class="no-border"
        >
        </iframe>
      </section>
    </article>

    <!-- QUIENES SOMOS -->
    <article class="article-quienes">
      <div class="header-quienes">
        <h3 class="header-title">¿Quiénes somos?</h>
      </div>
      <section class="section-quienes" id="section-quienes">
        <div class="image-container">
          <img
            class="image"
            src="./img/png-robot.png"
            width="240"
            height="500"
            class="no-border"
            alt="robot-boysend"
          />
        </div>

        <div class="text-container">
          <div class="container-texts">
            <div class="container-mision">
              <h4 class="text-title">Misión</h4>

              <p class="text-description">
                Proporcionar desarrollos tecnológicos y de comunicación para el
                alcance de todos, con el objetivo de incrementar la
                productividad, eficiencia y competitividad en creación de
                proyectos innovadores de software.
              </p>
            </div>

            <div class="grid">
              <div class="space-y-4 mt-10">
                <h4 class="text-title">Visión</h4>
                <p class="text-description">
                  “Desbloquear el potencial tecnológico para todos”
                </p>
              </div>

              <div class="values mt-10">
                <h4 class="text-title">Valores</h4>
                <p class="text-description">Honestidad</p>
                <p class="text-description">Responsabilidad</p>
                <p class="text-description">Calidad</p>
                <p class="text-description">Innovación</p>
                <p class="text-description">Originalidad</p>
              </div>
            </div>
          </div>
        </div>

        <div id="image-containerDos">
          <img
            class="image"
            src="./img/png-robot.png"
            width="240"
            height="500"
            class="no-border"
          />
        </div>
      </section>
    </article>

    <!-- GALERIA -->
    <article class="container-galery">
      <div class="header-galery">
        <h2 class="header-title">Proyectos</h2>
      </div>
      <section class="grid-container-galery">
        <div class="column-galery">
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg"
              alt=""
            />
          </div>
        </div>
        <div class="column-galery">
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg"
              alt=""
            />
          </div>
        </div>
        <div class="column-galery">
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg"
              alt=""
            />
          </div>
        </div>
        <div class="column-galery">
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              id="image-galery"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
              alt=""
            />
          </div>
        </div>
      </section>
    </article>

    <!-- TESTIMONIOS CARRUsEL -->

    <article class="article-testimonios">
      <div class="header2">
        <h2 class="header-title2">Testimonios</h2>
      </div>

      <swiper-container class="mySwiper" navigation="true">
        <swiper-slide class="testimonial">
          <section class="section2-carrusel">
            <article >
              <h3 class="title">Boys End</h3>
              <p class="description-testimonio">
                Fue un gran apoyo y quisiera agradecer el profesionalismo que se
                mantuvo durante el desarrollo de la aplicación.
              </p>
              <div class="image-container2">
                <img class="image2" src="./img/resena.png" alt="" />
              </div>
            </article>
          </section>
        </swiper-slide>
        <swiper-slide class="testimonial">
          <section class="section2-carrusel">
            <article >
              <h3 class="title">Boys End</h3>
              <p class="description-testimonio">
                Fue un gran apoyo y quisiera agradecer el profesionalismo que se
                mantuvo durante el desarrollo de la aplicación.
              </p>
              <div class="image-container2">
                <img class="image2" src="./img/resena.png" alt="" />
              </div>
            </article>
          </section>
        </swiper-slide>
        <swiper-slide class="testimonial">
          <section class="section2-carrusel">
            <article >
              <h3 class="title">Boys End</h3>
              <p class="description-testimonio">
                Fue un gran apoyo y quisiera agradecer el profesionalismo que se
                mantuvo durante el desarrollo de la aplicación.
              </p>
              <div class="image-container2">
                <img class="image2" src="./img/resena.png" alt="" />
              </div>
            </article>
          </section>
        </swiper-slide>

      </swiper-container>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  </body>
</html>
