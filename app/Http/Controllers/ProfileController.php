<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(){
    	if(Gate::denies('isUserBanned')){
    		$data = [
    			'user' => Auth::user()
		    ];
    		return view('profile.banned', $data);
	    }
    	return view('profile.profile');
    }
}
