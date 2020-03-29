<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     *
     * @param Request $request
     * @return array
     */

    protected function credentials(Request $request)
    {
        if(is_numeric($request->get('email'))){
            return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
        }
        elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return ['email' => $request->get('email'), 'password'=>$request->get('password')];
        }
        else{
            return '';
        }
    }



    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function validateLogin(Request $request)
    {
        if(is_numeric($request->get('email'))){
            $user = User::where('phone',$request->email)->first();
            if( $user && $user->is_active == 0){
                throw ValidationException::withMessages([$this->username() => __('panel.unactivated_account')]);
            }
            // Then, validate input.
            return $request->validate([
                $this->username() => 'required|string',
                'password' => 'required|string',
            ]);
        }
        elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email',$request->email)->first();
            if( $user && $user->is_active == 0){
                throw ValidationException::withMessages([$this->username() => __('panel.unactivated_account')]);
            }

            // Then, validate input.
            return $request->validate([
                $this->username() => 'required|string',
                'password' => 'required|string',
            ]);
        }
        else{
            return '';
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');

    }
}
