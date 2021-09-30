<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class NormalUserController extends Controller
{
    public function index(){
        $users = User::all();
        $roles = Role::all();
        return view('/home',compact('users','roles'));
    }
}
