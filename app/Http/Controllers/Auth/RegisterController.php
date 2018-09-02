<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use App\Mail\VerifyMail;

use App\User;
use App\Http\Controllers\Controller;
use App\VerifyUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/Main';
    private $emailTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'form-email' => 'required|string|email|max:255|unique:users,email',
            'form-password' => 'required|string|min:6|confirmed',
            'form-first-name' => 'required|string|max:255',
            'form-last-name' =>  'required|string|max:255',
            'form-number' => 'required|string|max:255',
            'form-company' => 'required|string|max:255',
            'form-address' => 'required|string|max:255',
            'form-zip' => 'required|string|max:255',
            'form-country' => 'required|string|max:255',
            'form-city' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $client = Client::create([
            'firstName' => $data['form-first-name'],
            'lastName' => $data['form-last-name'],
            'company' => $data['form-company'],
            'email' => $data['form-email'],
            'phone' => $data['form-number'],
            'address' => $data['form-address'],
            'city' => $data['form-city'],
            'country' => $data['form-country'],
            'zip' => $data['form-zip'],
        ]);



        $user = User::create([
            'name' => $data['form-first-name'],
            'email' => $data['form-email'],
            'password' => Hash::make($data['form-password']),
            'client_id' => $client->id,
        ]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        $name = $user->name;
        $verify = $user->verifyUser->token;
        $this->emailTo = $user->email;

        Mail::send('emails.confirmation', ['name' => $name, 'verify' => $verify], function ($message)
        {

            $message->from('jlpilogistics@gmail.com', 'Jexsan Logistics Philippines Inc.')
                    ->subject('Quotation Requested');

            $message->to($this->emailTo);

        });


        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all());

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/users/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();


        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();

                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('/users/login')->with('status', $status);
    }


}
