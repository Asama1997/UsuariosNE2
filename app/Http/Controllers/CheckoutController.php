<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View; 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Checkout;
use Carbon\Carbon;


class CheckoutController extends Controller
{
    //Ve informacion del empleado en la pagina index de empleado
    public function index(Request $request):View
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $email = $request->email;
        $ym = Carbon::now();
        dd($ym);
        $checkout = new User();
        $checkout -> checkout = $ym;
        dd($checkout);
        $checkout -> update();
        $cko = new Checkout();        
        $cko -> checkout = $ym;        
        $cko -> save();
        $user = User::where('email', $email)->first();
        if ($user) {
            return view('employee.index',compact('user'));
        } else {
            return redirect()->route('login.login')->with('error', 'User not found for the given email.');
        }        
    }
}
