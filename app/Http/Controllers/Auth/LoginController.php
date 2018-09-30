<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/Main';


    public function showLoginForm()
    {
        return view('client.auth.loginclient');
    }

//    public function login(Request $request){
//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);
//
//        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
//            return redirect()->intended(route('user.index'));
//        }
//
//        return redirect()->back()->withInput($request->only('email', 'remember'));
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['userLogout', 'logout']);
    }

    public function userLogout(Request $request){
        Auth::guard('web')->logout();
        return redirect('/Main');
    }

    public function authenticated(Request $request, $user)
    {

        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            return redirect()->intended(route('user.index'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


}
