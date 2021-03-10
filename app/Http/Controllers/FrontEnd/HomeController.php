<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
 public function home(){
 	return view('FrontEnd.home.home');
 }
 public function index(){
     return view('FrontEnd.All.index');
 }
}

