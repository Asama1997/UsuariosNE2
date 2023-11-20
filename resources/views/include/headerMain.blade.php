<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="header-top d-flex justify-content-center">
        <div class="logo">
          <a href="http://localhost:88/UsuariosNE2/public/"><img src="images/logo.png" alt="Logo"/></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">         
          <li class="nav-item"> 
            <a href="http://localhost:88/UsuariosNE2/public/">
              Hogar
            </a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link active" aria-current="page" href="http://localhost:88/UsuariosNE2/public/catalogo">
              Productos
            </a> 
          </li>      
          <li class="nav-item"> 
            <a class="nav-link active" aria-current="page" href="http://localhost:88/UsuariosNE2/public/vehicules/">
              Mi Perfil
            </a> 
          </li>             
          <li class="nav-item"> 
            <a class="nav-link active" aria-current="page" href="http://localhost:88/UsuariosNE2/public/vehicules/">
              Login
            </a> 
          </li>        
          <li class="nav-item"> 
            <a class="nav-link active" aria-current="page" href="http://localhost:88/UsuariosNE2/public/vehicules/">
              Lista de Deseados
            </a>
          </li>
          <li class="nav-item"> 
            <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_cart&business=96XL9CFWH268G&display=1">
              Carrito
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#contactos">
              Contactanos
            </a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div>
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid padding_dd">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="text-bg">
                        <span>
                          Bienvenido a Abarrotex
                        </span>
                        <h1>
                          Distrubuidor de productos de abarrotes
                        </h1>
                        <p>
                          Abarrotex es un distribuidor de productos de abarrotes el cuanl brinda el servicio en linea. Con el objetivo de que personas no tienen tiempo para comprar su mandado, nosostros te lo hacemos llegar 
                        </p>
                        <form class="Vegetable">
                          <input class="Vegetable_fom" placeholder="Abarrotes" type="text" name="Abarrote">
                          <button class="Search_btn">
                            Buscar
                          </button>
                        </form>
                        <a href="#">
                          Contactanos
                        </a> 
                        <a href="#">
                          Productos
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="images_box">
                        <figure>
                          <img src="images/img1.png">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid padding_dd">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="text-bg">
                        <span>
                          Bienvenido a Abarrotex
                        </span>
                        <h1>
                          Tienda de Abarrotes
                        </h1>
                        <p>
                          Tu mejor aliado a la hora de comprar la despensa. Actualmente operamos en la ciudad de Aguascalientes
                        </p>
                        <!-- Modificacion de busqueda-->
                        <form id="searchForm" class="Vegetable">
                          <input id="searchInput" class="Vegetable_fom" placeholder="Abarrotes" type="text" name="Abarrote">
                          <button class="Search_btn">
                            Buscar
                          </button>
                        </form>
                        <!--Contenedor para mostrar las busquedas-->
                        <div id="searchResults">
                        </div>
                        <!--Termina modificacion-->
                        <a href="#">
                          Contactanos
                        </a> 
                        <a href="#">
                          Abarrotes
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="images_box">
                        <figure>
                          <img src="images/img2.png">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">
          Anterior
        </span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">
          Siguiente
        </span>
      </a>
    </div>
    </section>
  </div>
</header>