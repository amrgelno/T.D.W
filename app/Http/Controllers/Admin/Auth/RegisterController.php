<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\regestir_req;
use App\Services\RegestirService;
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
     * @param  array  $requests
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $requests
     * @return \App\Models\user
     * @param  \App\Services\RegestirService;
     *@param regestir_req $request
regestir_req;
    //  *  @param  \Illuminate\Http\Request  $requests
     *@return \Illuminate\Http\Response
     */
    protected function reg(regestir_req $request,RegestirService $regestirService){

        // $validated = $request->validate(['name'     => 'required|string','email'    => 'required|email|unique:users,email','password' => 'required|min:8',]);

        $user=user::where('email', $request->email )->get();

        $Count_user= count($user);

        if( $Count_user==1){

            return redirect()->route('user.register')
            ->with('register-fail','your email in DB');

        }else{



 $createuser=$regestirService->createUser($request->validated());



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
