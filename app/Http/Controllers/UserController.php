<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unban($id){
    	$user = \App\User::findOrFail($id);
    	$user->role = 'user';
    	$user->message_ban->delete();
    	$user->update();
    	return redirect()->route('users.index');
    }
    public function ban(Request $request, $id){
    	$user = \App\User::findOrFail($id);
    	if($request->isMethod('post')){
    		$input = $request->except('_token');
    		$input['user_id'] = $user->id;
    		$message = new \App\MessagesForBanned();
    		$message->fill($input);
    		$user->role = 'banned_users';
    		$message->save();
    		$user->update();
    		return redirect()->route('users.index');
	    }
    	$data = [
    		'user' => $user
	    ];
    	return view('admin.message_ban', $data);
    }
    public function index()
    {
        $data = [
        	'users' => User::all(),
	        'logged_user' => Auth::user()
        ];
        return view('admin.users', $data);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    	$user = User::findOrFail($id);
        $old = $user->toArray();
        if(Auth()->user()->role === 'admin') {
	        $data = [
		        'data'        => $old,
		        'logged_user' => Auth::user()
	        ];

	        return view( 'admin.user_edit', $data );
        }
        else{
        	return view('profile.user_edit',[
        		'user' => Auth::user()
        		]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	    $user  = User::findOrFail( $id );
	    if(Auth::user()->role === 'admin') {
		    $input = $request->except( '_token' );
		    $user->fill( $input );
		    $user->role = $input['role'];
		    if ( $user->update() ) {
			    return redirect()->route( 'users.index' );
		    }
	    }
	    else{
	    	if($request->new_password !== null) {
			    $this->validate( $request, [
				    'name'         => 'required',
				    'email'        => 'required|email',
				    'user_image'   => 'image',
				    'new_password' => 'confirmed|min:6'
			    ] );
			    $user->password = bcrypt( $request->new_password );
		    }
		    else{
			    $this->validate( $request, [
				    'name'         => 'required',
				    'email'        => 'required|email',
				    'user_image'   => 'image',
			    ] );
		    }
		    $input = $request->except('_token');
	    	if($request->hasFile('user_image')){
	    		$file = $request->file('user_image');
			    $input['user_image'] = $file->getClientOriginalName();
			    $file->move(public_path().'/images/user/', $file->getClientOriginalName());
		    }
    		$user->fill($input);
    		$user->update();
    		return redirect()->route('profile');

	    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$user = User::findOrFail($id);
		$user->delete();
		return redirect()->route('users.index');
    }
}
