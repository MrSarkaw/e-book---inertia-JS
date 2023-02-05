<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(){
        $user= User::paginate(10);
        return Inertia::render('Admin/User/Index',[
            'data' => $user
        ]);
    }

    public function create(){
        return Inertia::render('Admin/User/Form');
    }


    public function store(Request $request){

        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        User::create($data);

        return redirect()->back();
    }


}
