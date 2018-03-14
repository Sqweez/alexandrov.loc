<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    	$id = Auth::user()->id;
    	$data = [
		    'shops' => \App\Shops::all()->where('user_id', $id)
	    ];
		return view('profile.shops', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('profile.shop_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $this->validate($request, [
	    'shop_name' => 'required|unique:shops_table|max:100',
	    'shop_logo' => 'image',
	    'shop_address' => 'required',
	    'shop_mail' => 'email',
	    'shop_web' => 'url',
	    'shop_phone' => 'numeric|max:15',
	    'shop_vk_url' => 'url',
	    'shop_fb_url' => 'url',
	    'shop_ok_url' => 'url'
        ], [
        	'required' => 'Поле :attribute обязательно к заполнению!',
	        'unique' => 'Поле :attribute должно быть уникальным',
	        'image' => 'В поле :attribute дожно быть загружено изображение',
	        'email' => 'Введеные в поле :attribute данные должны быть в формате e-mail',
	        'url' => 'Введеные данные в поле :attribute должны соответстовать формате URL',
	        'numeric' => 'Введеные данные в :attribute должны быть в формате в цифр'
        ]);
        $input['user_id'] = Auth::user()->id;
        if($request->hasFile('shop_logo')){
        	$file = $request->file('shop_logo');
        	$input['shop_logo'] = $file->getClientOriginalName();
	        $file->move(public_path() .'/assets/images/shops', $file->getClientOriginalName());
        }
        $shop = new \App\Shops();
	    $shop->fill($input);
	    $shop->save();
        return redirect()->route('shops.index');
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
    public function edit($id)
    {
        $data = [
        	'shop' => \App\Shops::findOrFail($id),
        ];
        return view('profile.shop_edit', $data);
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
        $input = $request->except('_token');
	    $this->validate($request, [
		    'shop_name' => 'required|unique:shops_table|max:100',
		    'shop_logo' => 'image',
		    'shop_address' => 'required',
		    'shop_mail' => 'email',
		    'shop_web' => 'url',
		    'shop_phone' => 'numeric|max:15',
		    'shop_vk_url' => 'url',
		    'shop_fb_url' => 'url',
		    'shop_ok_url' => 'url'
	    ], [
		    'required' => 'Поле :attribute обязательно к заполнению!',
		    'unique' => 'Поле :attribute должно быть уникальным',
		    'image' => 'В поле :attribute дожно быть загружено изображение',
		    'email' => 'Введеные в поле :attribute данные должны быть в формате e-mail',
		    'url' => 'Введеные данные в поле :attribute должны соответстовать формате URL',
		    'numeric' => 'Введеные данные в :attribute должны быть в формате в цифр'
	    ]);
        $shop = \App\Shops::findOrFail($id);
        $old_logo = $shop->shop_logo;
        if($request->hasFile('shop_logo')){
        	$file = $request->file('shop_logo');
        	$input['shop_logo'] = $file->getClientOriginalName();
        	$file->move(public_path() .'/assets/images/shops', $file->getClientOriginalName());
        }
        else{
        	$input['shop_logo'] = $old_logo;
        }
        $shop->fill($input);
        $shop->update();
        return redirect()->route('shops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = \App\Shops::findOrFail($id);
        $shop->delete();
        return redirect()->route('shops.index');
    }
}
