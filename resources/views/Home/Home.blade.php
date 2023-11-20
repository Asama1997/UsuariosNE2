@extends('Home.layoutH')
@section('title', 'Home')
@section('content')
<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>Acerca de nosotros</h2>
          <p>Surgimos al ver la necesidad de las personas que no tienen tiempo u oportunidad para hacer su mandado, es por ello que les brindamos el servicio de llevarlo a sus casas.</p>
          <a href="Javascript:void(0)">Leer más!</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <a href="detallesSabritas.html"><figure><img src="images/img2.png" alt="#" /></figure></a>
          <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VQUHHB4CX73M4" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
          <a href="#" class="btn btn-outline-danger" onclick="agregar('Sabritas','detallesSabritas.html', 'imgur.com/3Bmssx1.jpeg', '22','Sabritas Original, papas fritas con sal (bolsa de 45 gramos)')"><i class="bi bi-heart"></i></a>
          <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=L66GQQ8W3WL2A" class="btn btn-outline-warning">Comprar Ahora</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="vegetable" class="vegetable">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div  class="titlepage">
          <h2> Amplia variedad de <strong class="llow">Abarrotes</strong> </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>El mejor abarroterero</h3>
          <p>Contamos con toda variedad de productos y precios accesibles para todos!</p>
        </div>
      </div>
       <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="images/v2.jpg" alt="#"/></figure>
        </div>
      </div>
       <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
        <div class="vegetable_img margin_top">
         <figure><img src="images/v1.png" alt="#"/></figure>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
          <div class="card" style="width: 18rem;">
           <a href="detallesArroz.html"><img src="images/arroz.jpg" class="card-img-top" alt="arroz"></a>
            <div class="card-body">
              <h5 class="card-title">Arroz Verde Valle</h5>
              <p class="card-text">Bolsas de Arroz Super Extra de 1 kg. marca Verde Valle</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2U9KG6FF6769N" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Arroz Verde Valle','detallesArroz.html', 'imgur.com/BT53dX3.jpeg', '38','Arroz Verde Valle súper extra 1 kg')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QBKVAD6U62FLW" class="btn btn-outline-warning">Comprar Ahora</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesPapel.html"><img src="images/papel.jpg" class="card-img-top" alt="papel"></a>
            <div class="card-body">
              <h5 class="card-title">Papel Higienico Suave</h5>
              <p class="card-text">Paquete de 48 rollos de papel Marca Suave Cuidado Completo</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KAX22L4N8Y27N" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Papel Higiénico Suave','detallesPapel.html', 'imgur.com/hWsjPfP.jpeg', '168','Papel higiénico de hojas dobles, grandes y de textura suave, que rinden el doble y cuidan la piel.')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BNQ9QMGRFMMFW" class="btn btn-outline-warning">Comprar Ahora</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesSalchichas.html"><img src="images/salchichas.jpg" class="card-img-top" alt="salch"></a>
            <div class="card-body">
              <h5 class="card-title">Salchichas FUD</h5>
              <p class="card-text">Paquete de Salchichas de Pavo de 1 Kg. de la marca FUD</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GFNQ8J8CE9J4W" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Salchichas FUD','detallesSalchichas.html', 'imgur.com/MIS1XP6.jpeg', '42','Paquete de Salchichas de Pavo de 1 Kg. de la marca FUD')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ELWH8JQMUYHW2" class="btn btn-outline-warning">Comprar Ahora</a>                
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesFabuloso.html"><img src="images/img1.png" class="card-img-top" alt="Fabuloso"></a>
            <div class="card-body">
              <h5 class="card-title">Fabuloso Fresca Lavanda</h5>
              <p class="card-text">Producto de Limpieza de 2L con fragancia a Fresca Lavanda. Antibacterial y Antiviral</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5739CREXYRQ7L" class="btn btn-outline-primary" ><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Fabuloso Fresca Lavanda','detallesFabuloso.html', 'imgur.com/KZQYcsl.jpeg', '28','Producto de Limpieza de 2L con fragancia a Fresca Lavanda. Antibacterial y Antiviral')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=V5J8C56SNGELU" class="btn btn-outline-warning">Comprar Ahora</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesLechera.html"><img src="images/Lechera.jpg" class="card-img-top" alt="lech"></a>
            <div class="card-body">
              <h5 class="card-title">Lechera</h5>
              <p class="card-text">Leche condensada Nestlé La Lechera original 375 g a un súper precio.</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KFLBU86LQUSLS" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Lechera','detallesLechera.html', 'imgur.com/4qXl7Bf.jpeg', '35','Leche condensada Nestlé La Lechera original 375 g a un súper precio.')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HD2QM49J9FUMJ" class="btn btn-outline-warning">Comprar Ahora</a>               
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesPan.html"><img src="images/pan.jpg" class="card-img-top" alt="pan"></a>
            <div class="card-body">
              <h5 class="card-title">Pan Blanco Bimbo</h5>
              <p class="card-text">El pan blanco Bimbo, es un pan de caja adicionado para darle a toda tu familia un alimento saludable en cada una de sus comidas.</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XX2CMH6XQRGCQ" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Pan Bimbo','detallesPan.html', 'imgur.com/5oGcQDa.jpeg', '48','El pan blanco Bimbo, es un pan de caja adicionado para darle a toda tu familia un alimento saludable en cada una de sus comidas.')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HD2QM49J9FUMJ" class="btn btn-outline-warning">Comprar Ahora</a>              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesGalletasM.html"><img src="images/galletas.jpg" class="card-img-top" alt="galletas"></a>
            <div class="card-body">
              <h5 class="card-title">Galletas María 3 Rollos</h5>
              <p class="card-text">Son galletas de bajo precio y relativo bajo contenido en grasa y azúcar. En principio son redondas y llevan el nombre grabado en un lado</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4RJ5LAGTK8YKN" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Galletas María','detallesGalletasM.html','imgur.com/SsAQLov.jpeg','42', 'Son galletas de bajo precio y relativo bajo contenido en grasa y azúcar. En principio son redondas y llevan el nombre grabado en un lado')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W8XJLL8MAFEAW" class="btn btn-outline-warning">Comprar Ahora</a>                
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesFrijoles.html"><img src="images/Frijoles.jpg" class="card-img-top" alt="Frijoles"></a>
            <div class="card-body">
              <h5 class="card-title">Frijol Verde Valle</h5>
              <p class="card-text">Frijol Negro Querétaro, regularmente viene de Zacatecas y Durango, es un de tamaño mediano y de color negro brillante, cocido tiene una textura cremosa</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C8XSNMPAPLN5N" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Frijoles Verde Valle','detallesFrijoles.html', 'imgur.com/6swvWmc.jpeg', '37','Frijol Verde Valle súper extra 1 kg')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6RN67ZZLH54KN" class="btn btn-outline-warning">Comprar Ahora</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <a href="detallesAzucar.html"><img src="images/Azucar.jpg" class="card-img-top" alt="Azucar"></a>
            <div class="card-body">
              <h5 class="card-title">Azúcar Great Value</h5>
              <p class="card-text">Con una textura fina que se disuelve fácilmente - Ideal para darle a tus alimentos el sabor dulce que tanto te gusta</p>
              <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WQTJMRUVPCE3C" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
              <a href="#" class="btn btn-outline-danger" onclick="agregar('Azucar Great Value','detallesAzucar.html', 'imgur.com/RAmVr1B.jpeg', '42','Con una textura fina que se disuelve fácilmente - Ideal para darle a tus alimentos el sabor dulce que tanto te gusta')"><i class="bi bi-heart"></i></a>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YJR5ANYC2Y7HQ" class="btn btn-outline-warning">Comprar Ahora</a>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Reseñas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/checo.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Review<br><strong class="ornage_color">Sergio Pérez</strong></h3>
                                            <p>Cambiate a Abarrotex, ellos nunca te quedaran mal, siempre podrás confiar en ellos!
                                          
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/alonso.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Review<br><strong class="ornage_color">Fernando Alonso</strong></h3>
                                            <p>Si quieres padrear y que nunca te falte nada en reuniones o en tu día a día, pide ayuda a Abarrotex, ellos si que son los GOAT
                                              
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div id="testomonial" class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/tes.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Review<br><strong class="ornage_color">Jose Luis Morales</strong></h3>
                                            <p>Sinceramente Abarrotex me ha ayudado bastante, me la paso en mi programa de radio y persiguiendo a las ratas del gobieno y en especial a Martin del Campo, siempre tengo la despensa en mi casa cuando la ocupo. 100% Recomendada
                                              
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<!-- 
Modal para el aviso de cookies, requiere importar jQuery 
y el script que referencía al modal para abrirlo automaticamente 
-->
<div class="modal hide fade" id="cookiesModal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title text-secondary">Uso de Cookies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Utilizamos cookies de terceros para generar estadísticas de audiencia y mostrar publicidad
            personalizada analizando tu navegación. Si sigues navegando estarás aceptando su uso.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" onclick="hideModal()">Rechazar</button>
        <button type="button" class="btn btn-success" onclick="hideModal()">Aceptar</button>
    </div>
</div>
</div>
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="wish.js"></script>

<script>
  // This example adds a marker to indicate the position of Bondi Beach in Sydney,
  // Australia.
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {
        lat: 21.8853,
        lng: 102.2916
      },
    });

    var image = 'images/maps-and-flags.png';
    var beachMarker = new google.maps.Marker({
      position: {
        lat: 21.8853,
        lng: 102.2916
      },
      map: map,
      icon: image
    });
  }
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
<script>
$(document).ready(function showModal() {
$("#cookiesModal").modal('show');
});
</script>
<script>
function hideModal() {
$("#cookiesModal").modal('hide');
};
</script><script src="//code.tidio.co/wtvyuutbcmi3zl5j7u4yywgul6xdfzgq.js" async></script>

<!--  evita que la página se recargue. Luego, toma el valor del campo de búsqueda, lo procesa y muestra los resultados en el contenedor -->
<script>
document.addEventListener("DOMContentLoaded", function () {
const searchForm = document.getElementById("searchForm");
const searchInput = document.getElementById("searchInput");
const searchResultsContainer = document.getElementById("searchResults");

searchForm.addEventListener("submit", function (event) {
event.preventDefault();
const searchTerm = searchInput.value.trim().toLowerCase();

const productCards = document.querySelectorAll(".card"); // Seleccionar todas las tarjetas de productos

let matchingProducts = [];

productCards.forEach((card) => {
    const title = card.querySelector(".card-title").textContent.toLowerCase();
    const description = card.querySelector(".card-text").textContent.toLowerCase();

    if (title.includes(searchTerm) || description.includes(searchTerm)) {
        matchingProducts.push(card.outerHTML);
    }
});

if (matchingProducts.length > 0) {
    const searchResultsHTML = matchingProducts.join('');
    searchResultsContainer.innerHTML = searchResultsHTML;
} else {
    searchResultsContainer.innerHTML = "<p>No se encontraron productos.</p>";
}
});
});
</script>
@endsection
