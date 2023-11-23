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
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="number" class="form-control" id="telefono" placeholder="Ingresa Telefono">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Ingresa nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Ingresa direccion</label>
                                <input type="text" class="form-control" id="direccion" placeholder="Ingresa Direccion">
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Código Postal</label>
                                <input type="number" class="form-control" id="codigo" placeholder="Ingresa Código Postal">
                            </div>
                            <button type="submit" class="btn btn-success"><a class="text-white" href="index.html">Registrarse</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
