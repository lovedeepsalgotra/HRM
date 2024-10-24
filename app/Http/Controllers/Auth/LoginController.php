<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\IpAddress;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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



    // public function login(Request $request){
        // $IpAddress = IpAddress::all();
        // dd($IpAddress);
        // return view('auth.login');
    //     $user = User::where('email',$request->email)->first();
    //     if($user && Hash::check($request->password, $user->password)){
    //         if($user->ip_address !== $request->ip()){
    //             return redirect()->route('login')->with('error','Your IP Address does not Matched');
    //         }
    //         return $request->only($this->username(),'password');
    //     }
    //     return redirect()->route('login')->with('error', 'Invalid credentials');
    // }



    // public function login(Request $request){
    //     if(Auth::attempt(['email' => $request->email , 'password' => $request->password])){
    //         if(Auth::user()->ip_address !== $request->ip()){
    //             Auth::logout();
    //             return redirect()->route('login')->with('error','Your IP Address does not Matched');
    //         }
    //         return redirect()->route('home');
    //     }
    // }
}
