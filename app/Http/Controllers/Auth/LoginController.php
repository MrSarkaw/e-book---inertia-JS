<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function index(){
        return Inertia::render('login');
    }

    public function store(Request $request){
        $user= $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(!Auth::attempt($user)){
            return redirect()->back()->withErrors(['email' => 'invalid information']);
        }

        return redirect()->route('admin.users.index');
    }
}