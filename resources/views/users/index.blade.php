@extends('users.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>RRHH</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create a New User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Empleado?</th>
            <th>Supervisor</th>
            <th>Telefono</th>
            <th>Vehiculo</th>
            <th>E-Mail</th>
            <th>Foto</th>
            <th>Archivo</th>
            <th>Justificante</th>
            <th>Reporte</th>
            <th>Checkin</th>
            <th>Checkout</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->nombre }}</td>
            <td>{{ $user->apellido }}</td>
            <td>{{ $user->empleado }}</td>
            <td>{{ $user->supervisor }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->vehiculo }}</td>
            <td>{{ $user->email }}</td>
            <td><img src="http://localhost:88/UsuariosNE2/public/{{ $user->foto }}" alt="{{ $user->nombre }}" /></td>
            <td><a href="{{ asset('./' . $user->archivo) }}">{{ $user->archivo }}</a></td>
            <td><a href="{{ asset('./' . $user->justificante) }}">{{ $user->justificante }}</a></td>
            <td><a href="{{ asset('./' . $user->reporte) }}">{{ $user->reporte }}</a></td>
            <td>{{ $user->checkin }}</td>
            <td>{{ $user->checkout }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
  {!! $users->links() !!}
      
@endsection