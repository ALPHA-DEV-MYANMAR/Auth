<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Supervisorcontroller extends Controller
{

    public function __construct(){
        $this->middleware('isSupervisor');
    }

    public function index(){
        return view('back.db_one');
    }
}
