<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\user;
use App\Models\permissions;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new user as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect user after registration.
     *
     * @var string
     */
  //  protected $redirectTo = RouteServiceProvider::Dashboard;

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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\user
    //  *  @param  \Illuminate\Http\Request  $data
     *@return \Illuminate\Http\Response
     */
    protected function reg(Request $data)
    {


         $validated = $data->validate([
            'name' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           ]);


        $user=user::where('email', $data->email )->get();

        $Count_user= count($user);

        if( $Count_user==1){

            return redirect()->route('user.register')
            ->with('register-fail','your email in DB');

        }else{


        user::create([
            'Name' => $data->name,
            'email' => $data->email,
            //'remember_token' => base64_encode($data->password),
            'password' => bcrypt($data->password),
            //'password' => Hash::make($data->password),
        ]);


          user::where( 'id' ,'>', '1')->where('User_Role',Null)->update([

            'User_Role' => 'supervisor'


          ]);


          user::where( 'id', '1')->update([

            'User_Role' => 'Admin'


          ]);


 return redirect()->route('user.Login') ->with('register-success','reg success');




    ?>


<?php


}
    }
    public function showRegistrationForm()
    {
        return view('Admin.Auth.register');
    }

    protected function guard()
    {
        return Auth::guard("user");
    }

}
