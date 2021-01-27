<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

     protected function authenticated(Request $request, $user) {
    //   dd('djdsgjds');
      if ($user->role_id == 1) {
        return redirect('/user');
     } else if ($user->role_id == 2) {
      return redirect('/store');
      } else {
        return redirect('/dashboard');
       }
  }
   

     protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function credentials(Request $request)
    {
      if(is_numeric($request->get('email'))){
        return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
      }
      elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
        return ['email' => $request->get('email'), 'password'=>$request->get('password')];
      }
  }   
}
