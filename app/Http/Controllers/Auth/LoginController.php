<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo;
    public function redirectTo()
    {
        error_log("function start");
        switch(Auth::user()->tipo_de_cuenta){
            case 2:
                error_log("analista true");
                return redirect()->route('analista');
                break;
            case 3:
                return redirect()->route('trabajador');
                break;
            case 1:
                error_log("admin true");
                return redirect()->route('/');
                break;
            default:
                return redirect()->route('trabajador');
        }
         
        // return $next($request);
        error_log("function end");
    } 
    /**
     * Create a new controller instance.
     *
     * @return void
     */


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

