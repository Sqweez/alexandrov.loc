<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Main;
use App\MaterialCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Globals;

class IndexController extends Controller
{
	public function execute(){

    	return view('main.index');
    }
	public function logout(){
		Auth::logout();
		return redirect('/');
	}
}
