@extends('ClientsL.layoutH')
@section('title', 'Login')
@section('content')

<div class="container-lg bg-dark">
    <p class="h1 font-family-sans-serif pl-5 pt-3 text-success">Mi Perfil</p>
    <div class="container-md ">
      <div class="container text-center bg-white">
        <div class="row">
          <div class="col">
            <img src="images/alonso.jpg" class="img-fluid pt-5" alt="usuario" width="350" height="350">
          </div>
          <div class="col">
            <p class="h3 text-left text-dark">Nombre</p>
            <p class="h5 text-left text-secondary">Fernando Alonso Díaz</p>
            <p class="h3 text-left text-dark">Estado</p>
            <p class="h5 text-left text-secondary">Aguascalientes</p>
            <p class="h3 text-left text-dark">Registrado desde</p>
            <p class="h5 text-left text-secondary">3 de Diciembre del 2022</p>
            <p class="h3 text-left text-dark">Télefono</p>
            <p class="h5 text-left text-secondary">4498759876</p>
            <p class="h3 text-left text-dark">Correo</p>
            <p class="h5 text-left text-secondary">padreandoalonso@gmail.com</p>
            <p class="h3 text-left text-dark">Dirección</p>
            <p class="h5 text-left text-secondary">Las Adjuntas #119, Fracc. Municipio Libre. C.P. 20199,
              Aguascalinetes, Ags.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
          </div>
          <div class="col">
            <button type="button" class="btn btn-success"><a class="text-white" href="editUserInfo.html">Editar
                Información</a></button>
          </div>
          <div class="col">
            <a class="link-info" href="ordenCompra.html">
              <p class="text-success">Ver Historial de compras</p>
            </a>
            <a class="link-info" href="https://developer.paypal.com/dashboard/notifications/recent/5318987323427865965">
              <p class="text-success">Ver Notificaciones en Paypal</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
