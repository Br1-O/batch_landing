<?php
  $tittle= "Batch · Trámites y Procesos";
  require 'headLoader.php';
?>

<html>
<body>

<!-- ■■■■■■■■ NavBar ■■■■■■■■-->  

  <nav class="navbar-container">
    <div class="navbar">
        
      <img class='logo' src="../../public/images/batch_logo.png" alt="logo Batch Tramites y Procesos" aria-label="logo Batch Tramites y Procesos">
      
      <div class='nav-list'>
        <ul class='nav-list'>
          <li class='nav-item'><a href="#">  Inicio</a></li>
          <li class='nav-item'><a href="#about-us">  Quienes somos  </a></li>
          <li class='nav-item'><a href="#services">  Servicios  </a></li>
          <li class='nav-item'><a href="#contact">  Contacto  </a></li>
        </ul>
      </div>

    <div>
  </nav>

<!-- ■■■■■■■■ Hero Section ■■■■■■■■-->  
  
  <main>

    <!-- ■■■■■■■■ Header ■■■■■■■■-->  
  
      <section class="blueprint-container">
        <div class="blueprint">

          <h1 class='tittle'> Tus trámites y procesos, de manera simple </h1>
          <p>Occaecat est ipsum reprehenderit reprehenderit veniam anim laborum est esse duis occaecat reprehenderit pariatur.</p>
          <button class='btn-blueprint'> Empieza ahora </button>
          <a href="#">Conoce más</a>
        
        </div>
      </section>

    <!-- ■■■■■■■■ Main ■■■■■■■■-->  

      <section class="solutions-container">
        
        <article>

          <h2> 4 soluciones diseñadas para <u>simplificar tus procesos</u> </h2>

          <div class="even-columns">
            
            <div class='split-image'>
              <img src="../../public/images/splash-solutions.png" alt="splash de edificio visto desde abajo" aria-label="imagen splash de edificio visto desde abajo">
            </div>
            
            <div class="grid">

                <div class="ag-offer-block">
              <div class="ag-format-container">
                <ul class="ag-offer_list">
                  <li class="ag-offer_item">
                    <div class="ag-offer_visible-item">
                      <div class="ag-offer_img-box">
                        <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-1.svg" class="ag-offer_img" alt="" />
                      </div>
                      <div class="ag-offer_title">
                        Lorem ipsum
                      </div>
                    </div>
                    <div class="ag-offer_hidden-item">
                      <p class="ag-offer_text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                      </p>
                    </div>
                  </li>
                  <li class="ag-offer_item">
                    <div class="ag-offer_visible-item">
                      <div class="ag-offer_img-box">
                        <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-2.svg" class="ag-offer_img" alt="" />
                      </div>
                      <div class="ag-offer_title">
                        Donec quam
                      </div>
                    </div>
                    <div class="ag-offer_hidden-item">
                      <p class="ag-offer_text">
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                      </p>
                    </div>
                  </li>
                  <li class="ag-offer_item">
                    <div class="ag-offer_visible-item">
                      <div class="ag-offer_img-box">
                        <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-4.svg" class="ag-offer_img" alt="" />
                      </div>
                      <div class="ag-offer_title">
                        DIli
                      </div>
                    </div>
                    <div class="ag-offer_hidden-item">
                      <p class="ag-offer_text">
                        Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.
                      </p>
                    </div>
                  </li>
                  <li class="ag-offer_item">
                    <div class="ag-offer_visible-item">
                      <div class="ag-offer_img-box">
                        <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-3.svg" class="ag-offer_img" alt="" />
                      </div>
                      <div class="ag-offer_title">
                        Donec pede
                      </div>
                    </div>
                    <div class="ag-offer_hidden-item">
                      <p class="ag-offer_text">
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                      </p>
                    </div>
                  </li>

                </ul>
                </div>
              </div>
            </div>

          </div>

        </article>

        <article class='flame-wave-container overlay-container'>

          <h2> Empresas que <u>nos respaldan</u> </h2>

          <div class="even-columns">

            <img id='flame-solutions' src="../../public/images/flame_solutions.png" alt="logotipo de flama blanco y negro">

            <div class='grid-icons'>
              <span class="icon-circle">
                <a href="#" class="circle-anchor"></a>
              </span>
              <span class="icon-circle">
                <a href="#" class="circle-anchor"></a>
              </span>
              <span class="icon-circle2">
                <a href="#" class="circle-anchor"></a>
              </span>
              <span class="icon-circle3">
                <a href="#" class="circle-anchor"></a>
              </span>
            </div>
          </div>

          <img id='wave-solutions' src="../../public/images/wave_solutions.png" alt="ola azul">

        </article>

      </section>

    <!-- ■■■■■■■■ Carrousel ■■■■■■■■-->  
      <section class="carrousel">
        <div>

        </div>
      </section>
    
    <!-- ■■■■■■■■ Form ■■■■■■■■-->  

      <section class="form-container">

        <h2>Solicita más información</h2>

        <form class='even-columns form' action="../Controller/insert_consultation" method='POST'>

          <div class="form-col1">
          <label class='form-label' for="name">*Nombre de la empresa</label>
          <input class='form-input' type="text" name='name' placeholder="Escribe aquí el nombre de tu empresa">

          <label class='form-label' for="nameResponsible">*Nombre completo</label>
          <input class='form-input' type="text" name='nameResponsible' placeholder="Escribe aquí tu nombre completo">

          <label class='form-label' for="positionResponsible">*Cargo</label>
          <input class='form-input' type="text" name='positionResponsible' placeholder="Escribe aquí tu cargo">

          <label class='form-label' for="phoneResponsible">*Teléfono</label>
          <input class='form-input' type="text" name='phoneResponsible' placeholder="Escribe aquí tu teléfono">

          <label class='form-label' for="emailResponsible">*Correo electrónico</label>
          <input class='form-input' type="text" name='emailResponsible' placeholder="Escribe aquí tu correo">
          </div>

          <div class="form-col2">
            <div class='radio-container'>
              <input class='form-radio' type="radio" name='request'>
              <label class='form-label radio-label' >Quiero pedir un presupuesto</label>
            </div>

            <div class='radio-container'>
              <input class='form-radio' type="radio" name='request'>
              <label class='form-label radio-label' >Quiero hacer una consulta</label>
            </div>

          <label class='form-label text-area-label' for="">*Favor indicar...</label>
          <input id='text-area' class='form-input' type="textarea">

          <button>Enviar</button>
          </div>
          
        </form>
      </section>

  </main>
</body>

  <!-- ■■■■■■■■ Footer ■■■■■■■■-->  

    <footer class='footer'>

      <div class="footer-container even-columns">
        <div class='nav-footer'>
          <h3>Nuestra empresa</h3>
          <ul>
            <li>Sobre nosotros</li>
            <li>Términos y condiciones</li>
            <li>Preguntas frecuentes</li>
          </ul>
        </div>
          
        <div id='contact'>
          <h3>Contáctanos</h3>
          <p>Tel: 4000-4000</p>
          <p>Mail: info@batchpanama.com</p>
        </div>

        <div>
          <h3>Nuestras oficinas</h3>
          <p>Plaza Ramos, 300 mts oeste de la Sabana, Monterrico, Papá Noel</p>
          <a href="#">Ver en el mapa</a>
        </div>
      </div>

    </footer>

</html>