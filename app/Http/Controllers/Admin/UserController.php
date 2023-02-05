<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request){
        $user= User::when($request->q, function($q) use($request){
            $q->where('name', 'LIKE', '%'.$request->q.'%');
        })->paginate(10);

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
