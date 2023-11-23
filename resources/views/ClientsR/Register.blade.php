@extends('ClientsL.layoutH')
@section('title', 'Whishlist')
@section('content')
<div class="container-md bg-dark ms-5">
    <p class="h1 font-family-sans-serif pl-5 pt-3 text-success">Agrega los siguientes datos</p>
    <div class="container-fluid align-items-center" id="contenedorPadre">
        <div class="row g-3 bg-white text-center" id="contenedorHijo">
            <form>
                <div class="row">
                    <div class="col ml-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Dirección de Correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                            <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa contraseña">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Valida contraseña">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="number" class="form-control" id="telefono" placeholder="Ingresa Telefono">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Ingresa nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="Estado" class="form-label">Selecciona Estado</label>
                                <select>
                                    <option value="CDMX">Ciudad de México</option>
                                    <option value="AGS">Aguascalientes</option>
                                    <option value="BCN">Baja California</option>
                                    <option value="BCS">Baja California Sur</option>
                                    <option value="CAM">Campeche</option>
                                    <option value="CHP">Chiapas</option>
                                    <option value="CHI">Chihuahua</option>
                                    <option value="COA">Coahuila</option>
                                    <option value="COL">Colima</option>
                                    <option value="DUR">Durango</option>
                                    <option value="GTO">Guanajuato</option>
                                    <option value="GRO">Guerrero</option>
                                    <option value="HGO">Hidalgo</option>
                                    <option value="JAL">Jalisco</option>
                                    <option value="MEX">M&eacute;xico</option>
                                    <option value="MIC">Michoac&aacute;n</option>
                                    <option value="MOR">Morelos</option>
                                    <option value="NAY">Nayarit</option>
                                    <option value="NLE">Nuevo Le&oacute;n</option>
                                    <option value="OAX">Oaxaca</option>
                                    <option value="PUE">Puebla</option>
                                    <option value="QRO">Quer&eacute;taro</option>
                                    <option value="ROO">Quintana Roo</option>
                                    <option value="SLP">San Luis Potos&iacute;</option>
                                    <option value="SIN">Sinaloa</option>
                                    <option value="SON">Sonora</option>
                                    <option value="TAB">Tabasco</option>
                                    <option value="TAM">Tamaulipas</option>
                                    <option value="TLX">Tlaxcala</option>
                                    <option value="VER">Veracruz</option>
                                    <option value="YUC">Yucat&aacute;n</option>
                                    <option value="ZAC">Zacatecas</option>
                                </select>
                            </div>
                    </div>
                    <div class="col pl-5">
                        <div class="mb-3">
                            <label for="dirección" class="form-label">Ingresa dirección</label>
                            <input type="text" class="form-control" id="dirección" placeholder="Ingresa Dirección">
                        </div>
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código Postal</label>
                            <input type="number" class="form-control" id="codigo" placeholder="Ingresa Código Postal">
                        </div>
                        <div class="mb-3">
                            <div class="text-center">
                                <img src="images/defaultUser.jpg" class="rounded" alt="editImage" width="150" height="150">
                                <button type="button" class="btn btn-warning text-white mt-1">Selecciona Imagen</button>
                            </div>    
                        </div>
                        <button type="submit" class="btn btn-success"><a class="text-white" href="index.html">Registrarse</a></button>
                    </div>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection
