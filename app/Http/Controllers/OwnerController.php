<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
    	$data = [
    		'title' => 'Для держателей'
	    ];
    	return view('main.for_owners', $data);
    }
}
