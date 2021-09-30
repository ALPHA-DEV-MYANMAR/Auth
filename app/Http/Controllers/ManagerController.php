<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{

    public function __construct(){
        $this->middleware('ismanager');
    }

    public function index(){
        return view('back.db_one');
    }
}
