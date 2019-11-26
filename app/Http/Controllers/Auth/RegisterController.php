<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image;

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

    protected function register(Request $request){
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'nrc' => 'required',
           'usertype'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        if ($request->image) {
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $file_path = '/storage/image/' . $file_name;
            $image = Image::make($request->image)->save(public_path($file_path));
        }
        // dd($image);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nrc' => $request->nrc,
            'image' => $file_path
        ]);
        /*$user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->nrc = $request->nrc;
        $user->image = $file_path;
        $user->save();*/

        
        if ($request->usertype == 'User') {
            $usertype='user';

        }elseif ($request->usertype == 'Owner') {
             $usertype='owner';
        }
        /*else{

            $usertype='admin';
        }*/
        
        $user->assignRole($usertype);
        $this->guard()->login($user);

        return redirect()->route('owner.index');
    }
}
