@extends('Catalogo.layout')
@section('title', 'Catalogo')
@section('content')
    <!-- 
        Catalogo de productos
    -->
    <div class="container-fluid">
        <div class="row">
            <div class="col mt-5">
                
                    <div class="mb-3">
                      <input type="text" class="form-control" id="search" placeholder="Busca un producto">
                    </div>
                    <button class="btn btn-primary" onclick="listarName()">Buscar</button>
                    <a href="http://localhost:88/UsuariosNE2/public/catalogo"><button class="btn btn-dark">Restablecer</button></a>

                    <h3 class="h3 mt-5">Filtros</h3>
                    <h5 class="h5 mt-3">Categorías</h5>
                    <a href="#" onclick="listarLimpiezaHogar()">Limpieza del Hogar</a>
                    <br/>
                    <a href="#" onclick="listarSemillas()">Arroz, Frijol y Semillas</a>
                    <h5 class="h5 mt-3">Precio</h5>
                    <a href="#" onclick="listarCaros()">De Mayor a Menor</a>
                    <br/>
                    <a href="#" onclick="listarBaratos()">Menor a Mayor</a>
                  
            </div>
            <div class="col-md-9" id="containerCat">
                <div class="row">
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesFabuloso.html"><img src="https://imgur.com/KZQYcsl.jpeg" class="card-img-top" alt="Fabulosos Varios"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Fabuloso Fresca Lavanda</h5>
                                <p class="card-text text-justify">
                                    Producto de Limpieza de 2L con fragancia a Fresca Lavanda. Antibacterial y Antiviral<br />
                                <h3>$28 c/u</h3><br />
                                <strong>Limpieza del Hogar</strong> <br>
                                <strong>Fabuloso</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5739CREXYRQ7L" class="btn btn-outline-primary" ><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Fabuloso Fresca Lavanda','detallesFabuloso.html', 'imgur.com/KZQYcsl.jpeg', '28','Producto de Limpieza de 2L con fragancia a Fresca Lavanda. Antibacterial y Antiviral')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=V5J8C56SNGELU" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesArroz.html"><img src="https://imgur.com/BT53dX3.jpeg" class="card-img-top"
                                        alt="Arroz Verde Valle"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Arroz Verde Valle</h5>
                                <p class="card-text text-justify">
                                    Arroz Verde Valle súper extra 1 kg<br />
                                <h3>$38 c/u</h3> <br>
                                <strong>Arroz, Frijol y Semillas</strong> <br>
                                <strong>Verde Valle</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2U9KG6FF6769N" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Arroz Verde Valle','detallesArroz.html', 'imgur.com/BT53dX3.jpeg', '38','Arroz Verde Valle súper extra 1 kg')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QBKVAD6U62FLW" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesAzucar.html"><img src="https://imgur.com/RAmVr1B.jpeg" class="card-img-top"
                                        alt="Azucar_GV"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Azucar Great Value</h5>
                                <p class="card-text text-justify">
                                    Con una textura fina que se disuelve fácilmente - Ideal para darle a tus alimentos el sabor dulce que tanto te gusta<br>
                                <h3>$42 c/u</h3><br>
                                <strong>Great Value</strong><br>
                                <strong>Azucar y Postres</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WQTJMRUVPCE3C" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Azucar Great Value','detallesAzucar.html', 'imgur.com/RAmVr1B.jpeg', '42','Con una textura fina que se disuelve fácilmente - Ideal para darle a tus alimentos el sabor dulce que tanto te gusta')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YJR5ANYC2Y7HQ" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesLechera.html"><img src="https://imgur.com/4qXl7Bf.jpeg" class="card-img-top"
                                        alt="lechera_nestle"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Lechera</h5>
                                <p class="card-text text-justify">
                                    Leche condensada Nestlé La Lechera original 375 g a un súper precio.<br />
                                <h3>$35 c/u</h3><br>
                                <strong>Nestle</strong><br>
                                <strong>Leche</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KFLBU86LQUSLS" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Lechera','detallesLechera.html', 'imgur.com/4qXl7Bf.jpeg', '35','Leche condensada Nestlé La Lechera original 375 g a un súper precio.')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HD2QM49J9FUMJ" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesFrijoles.html"><img src="https://imgur.com/6swvWmc.jpeg"
                                        class="card-img-top" alt="Frijol Negro Verde Valle"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Frijol Verde Valle</h5>
                                <p class="card-text text-justify">
                                    Frijol Verde Valle súper extra 1 kg<br />
                                <h3>$37 c/u</h3><br>
                                <strong>Verde Valle</strong><br>
                                <strong>Arroz, Frijol y Semillas</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C8XSNMPAPLN5N" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Frijoles Verde Valle','detallesFrijoles.html', 'imgur.com/6swvWmc.jpeg', '37','Frijol Verde Valle súper extra 1 kg')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6RN67ZZLH54KN" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesGalletasM.html"><img src="https://imgur.com/SsAQLov.jpeg" class="card-img-top"
                                        alt="Marias Rollo"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Galletas María</h5>
                                <p class="card-text text-justify">
                                    Son galletas de bajo precio y relativo bajo contenido en grasa y azúcar. En principio son redondas y llevan el nombre grabado en un lado<br />
                                <h3>$42 c/u</h3><br>
                                <strong>Gamesa</strong><br>
                                <strong>Galletas</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4RJ5LAGTK8YKN" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Galletas María','detallesGalletasM.html','imgur.com/SsAQLov.jpeg','42', 'Son galletas de bajo precio y relativo bajo contenido en grasa y azúcar. En principio son redondas y llevan el nombre grabado en un lado')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W8XJLL8MAFEAW" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesPan.html"><img src="https://imgur.com/5oGcQDa.jpeg" class="card-img-top" alt="PanBimboBlanco"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pan Bimbo</h5>
                                <p class="card-text text-justify">
                                    El pan blanco Bimbo, es un pan de caja adicionado para darle a toda tu familia un alimento saludable en cada una de sus comidas.<br />
                                    <h3>$48 c/u</h3><br>
                                    <strong>Bimbo</strong><br>
                                    <strong>Pan</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XX2CMH6XQRGCQ" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Pan Bimbo','detallesPan.html', 'imgur.com/5oGcQDa.jpeg', '48','El pan blanco Bimbo, es un pan de caja adicionado para darle a toda tu familia un alimento saludable en cada una de sus comidas.')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HD2QM49J9FUMJ" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesPapel.html"><img src="https://imgur.com/hWsjPfP.jpeg" class="card-img-top" alt="Papel Suave"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Papel Higiénico Suave</h5>
                                <p class="card-text text-justify">
                                    Papel higiénico de hojas dobles, grandes y de textura suave, que rinden el doble y cuidan la piel.<br />
                                    <h3>$168 c/u</h3><br>
                                    <strong>Suave</strong><br>
                                    <strong>Limpieza del Hogar</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KAX22L4N8Y27N" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Papel Higiénico Suave','detallesPapel.html', 'imgur.com/hWsjPfP.jpeg', '168','Papel higiénico de hojas dobles, grandes y de textura suave, que rinden el doble y cuidan la piel.')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BNQ9QMGRFMMFW" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesSabritas.html"><img src="https://imgur.com/3Bmssx1.jpeg" class="card-img-top" alt="SabritasOriginal"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Sabritas Original</h5>
                                <p class="card-text text-justify">
                                    Sabritas Original, papas fritas con sal (bolsa de 45 gramos) <br />
                                    <h3>$22 c/u</h3><br>
                                    <strong>Sabritas</strong><br>
                                    <strong>Botanas</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VQUHHB4CX73M4" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Sabritas','detallesSabritas.html', 'imgur.com/3Bmssx1.jpeg', '22','Sabritas Original, papas fritas con sal (bolsa de 45 gramos)')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=L66GQQ8W3WL2A" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 my-5">
                        <div class="card border-dark mb-3">
                            <div class="card-header">
                                <a href="detallesSalchichas.html"><img src="https://imgur.com/MIS1XP6.jpeg" class="card-img-top" alt="Salchicha_Fud"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Salchichas Fud</h5>
                                <p class="card-text text-justify">
                                    Paquete de Salchichas de Pavo de 1 Kg. de la marca FUD<br />
                                    <h3>$42</h3><br>
                                    <strong>Fud</strong><br>
                                    <strong>Carnes Frías</strong>
                                </p>
                            </div>
                            <div class="card-footer border-dark text-nowrap">
                                <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GFNQ8J8CE9J4W" class="btn btn-outline-primary"><i class="bi bi-cart-plus"></i></a>
                                <a href="#" class="btn btn-outline-danger" onclick="agregar('Salchichas FUD','detallesSalchichas.html', 'imgur.com/MIS1XP6.jpeg', '42','Paquete de Salchichas de Pavo de 1 Kg. de la marca FUD')"><i class="bi bi-heart"></i></a>
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ELWH8JQMUYHW2" class="btn btn-outline-warning">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
