<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class crudController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function getJquery(){
    	return view('jquery');
    }
}
