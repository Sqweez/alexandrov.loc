<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutCardController extends Controller
{
	public function index(){
		$data = [
			'title' => 'О карте'
		];
		return view('main.about_card', $data);
	}
}
