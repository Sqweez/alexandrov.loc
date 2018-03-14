<?php

namespace App\Http\Controllers;
use Gate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
    	if (Gate::denies('admin_access')){
    		return redirect('/')->with('status', 'Доступ запрещен');
    	}
    	$data = [
    		'logged_user' => Auth::user()
	    ];
    	return view('admin.index', $data);
    }
}
