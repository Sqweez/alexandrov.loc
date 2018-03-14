<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use PhpParser\Node\Stmt\Foreach_;

class DiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ajax(Request $request){
    	$id = Input::get('id');
    	$subcategories = \App\MaterialSubCategories::all()->where('category_id', $id)->pluck('subcategory_name', 'id');
    	return response()->json(['success' => $id, 'data' => $subcategories]);
    }
    public function index()
    {
        $data = [
            'discounts' => \App\Discounts::all()->where('user_id', Auth::user()->id)
        ];
        return view('profile.discounts', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$data = [
    		'shops' => \App\Shops::where('user_id', Auth::user()->id)->pluck('shop_name','id'),
		    'category' => \App\MaterialCategories::all()->pluck('name', 'id'),
	    ];
        return view('profile.discount_add', $data);
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
        $file = $request->file('discount_image');
        $input['discount_image'] = $file->getClientOriginalName();
        $input['user_id'] = Auth::user()->id;
        $file->move(public_path().'/images/m_desc/', $input['discount_image']);
        $discount = new \App\Discounts();
        $discount->fill($input);
        $discount->save();
        return redirect()->route('discounts.index');
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
        return view('profile.discount_edit',[
        	'discount' => \App\Discounts::findOrFail($id),
	        'category' => \App\MaterialCategories::all()->pluck('name', 'id'),
	        'shops' => \App\Shops::all()->pluck('shop_name', 'id')
        ]);
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
        $discount = \App\Discounts::findOrFail($id);
        $old_img = $discount->discount_image;
        if($request->hasFile('discount_image')){
        	$file  = $request->file('discount_image');
        	$input['discount_image'] = $file->getClientOriginalName();
        	$file->move(public_path().'/images/m_desc/',$file->getClientOriginalName());
        }
        else{
        	$input['discount_image'] = $old_img;
        }
        $discount->fill($input);
        $discount->status = 0;
        $discount->update();
        return redirect()->route('discounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discount = \App\Discounts::findOrFail($id);
        $discount->delete();
        return redirect()->route('discounts.index');
    }
}
