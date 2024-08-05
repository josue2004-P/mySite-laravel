<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D&A Software R</title>
    <link href="https://fonts.cdnfonts.com/css/orbitron" rel="stylesheet" />
    <link rel="stylesheet" href={{ asset('css/styles.css')}} />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <article class="contact-section">
      <section>
        <h1 class="contact-title">Contacto</h1>
        <p class="contact-paragraph">
          Nuestros desarrollo de software son personalizado y a la medida de
          cada empresa, contamos con desarrolladores altamente preparados en
          diferentes áreas industrias.
        </p>

        <br />

        <p class="contact-paragraph text2">
          Realiza tu cotización de tu proyecto.
        </p>


        @if(Session::has('success'))

        <script>
      Swal.fire({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success"
      });
        </script>
        @endif
        


        <form action="/create" method="POST" class="contact-form">
        @csrf
          <div class="content-input">
            <label id="label-form" class="block mb-2 text-sm font-medium">
              Correo
            </label>
            <input
              type="email"
              id="correo"
              name="correo"
              class="contact-input"
              placeholder="name@example.com"
              required
            />
          </div>

          <div class="content-input">
            <label id="label-form"> Titulo </label>
            <input
              type="text"
              id="titulo"
              name="titulo"
              class="contact-input"
              placeholder="Escribe tu titulo"
              required
            />
          </div>
          <div class="content-input">
            <label id="label-form" class="block mb-2 text-sm font-medium">
              Mensaje
            </label>
            <textarea
              id="mensaje"
              name="mensaje"
              rows="6"
              class="contact-textarea"
              placeholder="Escribe un mensaje"
            ></textarea>
          </div>
          <button type="submit" class="contact-button">Enviar</button>
        </form>

      </section>
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

    <script src="./js/main.js"></script>

  </body>
</html>
