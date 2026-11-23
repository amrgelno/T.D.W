<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\user;
use Illuminate\Foundation\Auth\Registersuser;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\logtime;
//use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating user for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect user after login.
     *
     * @var string
     */

   protected $redirectTo ;


  public function __construct()
   {

    $this->redirectTo =route('user.Dashboard');
      $this->middleware('guest')->except('logout');   // middleware for login
    }

   public function showLoginForm()
     {
         return view('Admin.Auth.login');
    }




     public function customLogin(Request $request)
     {

      $credentials = $request->validate([
    'email' => 'required',
         'password' => 'required',
      ]);

if (Auth::guard('user')->attempt($credentials)) {

     $request->session()->regenerate();


     return redirect()->route('user.Dashboard');


        }

return redirect("/admin/Log_in")->withSuccess('Login details are not valid');

  return redirect()->route('Admin.Login')
   ->with('Success','The provided credentials do not match our records');    // false return to login */


     }




 public function logout(Request $request)
    {

      $Aid=auth::guard('user')->user()->id;

         $now=NOW();


logtime::where("logouttime",'')->where("user_id",$Aid)->update([


             'logouttime' =>$now,

        ]);


        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }



    protected function guard()
    {
        return Auth::guard('user');
    }



}
