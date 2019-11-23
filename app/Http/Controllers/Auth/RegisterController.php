<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input;

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
    protected $redirectTo = '/admin';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'nrc' => ['required', 'string'],
             'image' => ['required','mimes:jpeg,jpg,png'],
             /*'usertype'=>['required','string'],*/
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        /*if ($data['usertype']=='User') {
            $usertype='user';
        }elseif ($data['usertype']=='Owner') {
            $usertype='owner';
        }*//*else{
            $usertype='admin';
        }*/



        if ($data['image']) {
            $photo=$data['image'];
            $name=time().'.'.$photo->getCLientOriginalExtension();
            $photo->move(public_path().'/storage/image/',$name);
            $photo='/storage/image/'.$name;
        }else{
            $photo='';
        }

        // dd($photo);      


        
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'nrc'=>$data['nrc'],
        //     'image'=> "/storage/image/1574423163.jpg",
        //     'password' => Hash::make($data['password']),
        // ]);
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->nrc = $data['nrc'];
        // $user->image = 'temp.jpg';
        $user->password = Hash::make($data['password']);
        $user->save();

        dd($user);
        $user->assignRole('admin');
        return $user;
    }
}
