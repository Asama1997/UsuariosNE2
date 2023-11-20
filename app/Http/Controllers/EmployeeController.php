<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View; 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //Ve informacion del empleado en la pagina index de empleado
    public function index(Request $request):View
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if ($user) {
            return view('employee.index',compact('user'));
        } else {
            return redirect()->route('login.login')->with('error', 'User not found for the given email.');
        }        
    }
    //Sube reporte a la tabla
    public function reporte(Request $request, User $user)
    {
        if ($request->hasFile('reporte')) {
            $filename = $request->file('reporte')->store('public');
            $user->reporte = $filename;
        }    
        $user -> update($request->all());
        return redirect()->route('employee.index')
                        ->with('success','User updated successfully');
    }   
    //Sube justificante a la tabla
    public function justificante(Request $request, User $user)
    {
        if ($request->hasFile('justificante')) {
            $filename = $request->file('justificante')->store('public');
            $user->justificante = $filename;
        }    
        $user -> update($request->all());
        return redirect()->route('employee.index')
                        ->with('success','User updated successfully');
    }
}
