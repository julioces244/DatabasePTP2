<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';



    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        //$pos =  Auth::attempt($credentials);
        //return $pos;


        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->intended('intranet');
              $user = Auth::user();

              return $user;

        }else{
          return response()->json(['error' => 'Usuario y/o clave inválido'], 401);
        }


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
