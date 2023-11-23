@extends('ClientsL.layoutH')
@section('title', 'Login')
@section('content')
<div class="container-md bg-dark ms-5">
        <p class="h1 font-family-sans-serif pl-5 pt-3 text-success">Agrega los siguientes datos</p>
        <div class="container-fluid align-items-center" id="contenedorPadre">
            <div class="row g-3 bg-white text-center">
                <form>
                    <div id="contenedorHijo">
                        <div class="col ml-5">
                        </div>
                        <div class="col pl-5">
                            <div class="mb-3">
                                <div class="text-center">
                                    <img src="images/defaultUser.jpg" class="rounded" width="150" height="150">
                                </div>    
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Dirección de Correo</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa contraseña">
                            </div>
                            <button type="submit" class="btn btn-success"><a class="text-white" href="index.html">Ingresar</a></button>
                            <button type="submit" class="btn btn-success"><a class="text-white" href="register.html">Crea una cuenta</a></button>
                        </div>
                      </div>
                    </div>
                  </form>
              </div>
        </div>
    </div>
@endsection
