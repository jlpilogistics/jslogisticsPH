<?php

namespace App\Http\Controllers;

use App\AdminLogin;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;


class RegTrial extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   protected $redirectTo = '/admin-registration';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
       return view('admin.users.addUser');
    }
//    public function store(Request $request)
//    {
//        $user = new Admin;
//        if ($file = $request->file('image')) {
//            $file->move(public_path(). '/', $file->getClientOriginalName());
//            $user->user_id = $request->idAdmin;
//            $user->fullname= $request->fullname;
//            $user->username= $request->username;
//            $user->password= $request->password;
//            $user->email= $request->email;
//            $user->orgrole= $request->orgrole;
//            $user->img= $file->getClientOriginalName();
//        }
//        $user->save();
//        return redirect("/admin-registration")->with('success','Data has been added');
//    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:admins,email',
            'password' => 'required|string|min:6|hash',
            'AdminID' => 'required|string|max:255',
            'adminName' => 'required|string|max:255',
            'Adminuser' =>  'required|string|max:255',
            'orgrole' => 'required|string|max:255',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
    }
    protected function create(array $data)
    {
        if ($file = $data['image']) {
            $file->move(public_path('admin_images'). '/', $file->getClientOriginalName());
            $client = Admin::create([
                'admin_ref' => $data['AdminID'],
                'name' => $data['adminName'],
                'username' => $data['Adminuser'],
                'password' => Hash::make($data['password']),
                'email' => $data['email'],
                'org_role' => $data['orgrole'],
                'image' => $file->getClientOriginalName(),

            ]);
        }
//

//        $user = AdminLogin::create([
//            'fullname' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//            'admin_id' => $client->id,
//        ]);
        return $client;
    }

    public function register(Request $request)
    {
        $this->validator($request->all());

        event(new Registered($user = $this->create($request->all())));


        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
//    public function register(Request $request)
//    {
//        $this->validator($request->all());
//
//        event(new Registered($user = $this->create($request->all())));
//
//        $this->guard()->login($user);
//
//        return $this->registered($request, $user)
//            ?: redirect($this->redirectPath());
//    }
}
