<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View; 
use App\Models\Vehicule;
use App\Models\User;

class VehiculeController extends Controller
{
    public function index():View
    {
        $vehicules = Vehicule::latest()->paginate(50);
        
        return view('vehicule.index',compact('vehicules'));
    }
    public function create()
    {
        return view('vehicule.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipov' => 'required',
            'marca' => 'required',
            'placa' => 'required',
            'conductor' => 'required',
        ]);
        $user = new User();
        $user = User::find($request->conductor);
        $user->update(['vehiculo' => $request->placa]);
        Vehicule::create($request->all());         
        return redirect()->route('vehicules.index')
                        ->with('success','User created successfully.');
    }
    public function show(Vehicule $vehicule)
    {
        return view('vehicules.show', compact('vehicule'));
    }
    
    public function edit(Vehicule $vehicule)
    {
        return view('vehicules.edit', compact('vehicule'));
    }
    public function update(Request $request, Vehicule $vehicule)
    {
        $request->validate([
            'nombre' => 'required',
            'tipov' => 'required',
            'marca' => 'required',
            'placa' => 'required',
            'conductor' => 'required',
        ]);    

        $user = new User();
        $user = User::find($request->conductor);     
        Vehicule::update($request->all());         
        $user->update(['vehiculo' => $request->placa]);
        return redirect()->route('vehicules.index')
                        ->with('success','User updated successfully');
    }
    public function destroy(Vehicule $vehicule):View
    {
        $vehicule->delete();
         
        return redirect()->route('vehicules.index')
                        ->with('success','User deleted successfully');
    }
}
