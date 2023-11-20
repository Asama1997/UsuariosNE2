<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View; 
use App\Models\Employee;

class UserController extends Controller
{
    public function index():View
    {
        $users = User::latest()->paginate(20);
        
        return view('users.index',compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'empleado' => 'required',
            'supervisor' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);
        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->store('/public');
            $user->foto = $filename;
        }
        if ($request->hasFile('archivo')) {
            $filename2 = $request->file('archivo')->store('/public');
            $user->archivo = $filename2;
        }        
        $employee = new Employee();
        $nombre = $request -> nombre;
        $employee->name = $nombre;
        $apellido = $request -> apellido;
        $employee -> lastname = $apellido;        
        $email = $request -> email;
        $employee -> email = $email;
        $employee -> password = 'admin12345';
        $employee->save(); 
        User::create($request->all());         
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'empleado' => 'required',
            'supervisor' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);
        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->store('public');
            $user->foto = $filename;
        }
        if ($request->hasFile('archivo')) {
            $filename2 = $request->file('archivo')->store('public');
            $user->archivo = $filename2;
        }
    
        $employee = new Employee();
        $employee = Employee::where('email', $request->email)->first(); 
        $employee->delete();
        $nombre = $request -> nombre;
        $employee->name = $nombre;
        $apellido = $request -> apellido;
        $employee -> lastname = $apellido;        
        $email = $request -> email;
        $employee -> email = $email;
        $employee -> password = 'admin12345';   
        $user -> update($request->all());
        
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    public function destroy(User $user)
    {
        $user->delete();
         
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
    public function update2(Request $request, User $user):View
    {
        if ($request->hasFile('justificante')) {
            $filename = $request->file('justificante')->store('public');
            $user->justificante = $filename;
        }
        if ($request->hasFile('archivo')) {
            $filename2 = $request->file('archivo')->store('public');
            $user->reporte = $filename2;
        }
        $email = $request->email;
        $user = User::where('email', $email)->first();
        $user -> update($request->all());        
        return view('employee.index',compact('user'));
    }
}