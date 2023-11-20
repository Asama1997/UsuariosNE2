@extends('employee.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Your information data</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Supervisor</th>
            <th>Telefono</th>
            <th>E-Mail</th>
            <th>Vehiculo asignado</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Justificante</th>
            <th>Reporte</th>
        </tr>
        <tr>
            <td>{{ $user->nombre }}</td>
            <td>{{ $user->apellido }}</td>
            <td>{{ $user->supervisor }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->vehiculo }}</td>
            <td>{{ $user->checkin }}</td>
            <td>{{ $user->checkout }}</td>
            <form action="{{ route('users.update2',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <td>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="file" name="justificante">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </td>
                <td>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="file" name="justificante">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </td>
            </form>
        </tr>
    </table>      
@endsection