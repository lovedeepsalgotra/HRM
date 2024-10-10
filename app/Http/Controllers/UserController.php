<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

use App\Models\Services;
use Illuminate\Http\Request;
use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index');
    }

   
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    
}
