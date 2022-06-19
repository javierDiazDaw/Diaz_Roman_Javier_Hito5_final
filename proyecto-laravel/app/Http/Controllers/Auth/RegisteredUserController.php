<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $email = $request ['email'];
       $patron = "/\w@iespoligonosur.org$/i";
        if (preg_match($patron, $email)){

        $request->validate([
            
            'nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dni' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'integer', 'max:999999999'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()], 
            'rol' => ['required', 'string', 'max:255']
        ]);



        $user = User::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'dni' => $request->dni,
            'telefono' => $request->telefono,
            'password' => Hash::make($request->password),
            'rol' => $request->rol
        ]);



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }else{
        return redirect()->back()->withErrors("Error al introducir email");
    }

    }
    
}

