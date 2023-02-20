<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $roles      =  Role::orderBy('id','desc')->get();
        return view('users.create',compact('roles'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            "first_name"    => 'required',
            "last_name"     => 'required',
            "email"         => 'required | unique:users',
            "role_id"       => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'message' => 'Email already taken']);
        }

        $user       = User::create($request->all());

        return response()->json(['status'=>'success', 'message' => 'User created successfully']);
    }

    public function display()
    {
        $users      =  User::orderBy('id','desc')->get();
        return view('users.index',compact('users'));
    }
}
