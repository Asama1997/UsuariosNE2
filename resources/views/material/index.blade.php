@extends('vehicule.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Flotilla</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicules.create') }}"> Create a New Vehicule</a>
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
            <th>Tipo</th>
            <th>Marca</th>
            <th>Placa</th>
            <th>Conductor(ID)</th>
        </tr>
        @foreach ($vehicules as $vehicule)
        <tr>
            <td>{{ $vehicule->nombre }}</td>
            <td>{{ $vehicule->tipov }}</td>
            <td>{{ $vehicule->marca }}</td>
            <td>{{ $vehicule->placa }}</td>
            <td>{{ $vehicule->conductor }}</td>
            <td>
                <form action="{{ route('vehicules.destroy',$vehicule->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('vehicules.show',$vehicule->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('vehicules.edit',$vehicule->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
  {!! $vehicules->links() !!}
      
@endsection