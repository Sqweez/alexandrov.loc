<?php

namespace App\Http\Controllers;

use App\Discounts;
use Illuminate\Http\Request;

class AdminDiscountsController extends Controller
{
	public function ajax(){
		$id = Input::get('id');
		$subcategories = \App\MaterialSubCategories::all()->where('category_id', $id)->pluck('subcategory_name', 'id');
		return response()->json(['success' => $id, 'data' => $subcategories]);
	}
	public function accept($id){
		$discount = \App\Discounts::findOrFail($id);
		$discount->status = 1;
		$discount->update();
		return redirect()->route('admin_discounts.index');
	}
	public function decline(Request $request, $id){
		$discount = \App\Discounts::findOrFail($id);
		if($request->isMethod('post')){
			$input = $request->except('_token');
			$message = new \App\MessageForDiscounts();
			$input['discount_id'] = $discount->id;
			$discount->status = 2;
			$discount->update();
			$message->fill($input);
			$message->save();
			return redirect()->route('admin_discounts.index');
		}
		$data = [
			'data' => $discount
		];
		return view('admin.message_discount', $data);
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data = [
    		'discounts' => \App\Discounts::all()
	    ];
        return view('admin.discounts', $data);
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
        //
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
    	$discount = \App\Discounts::findOrFail($id);
    	$data = [
    		'discount' => $discount,
		    'shops' => \App\Shops::all()->where('user_id', $discount->user->id)->pluck('shop_name', 'id'),
		    'category' => \App\MaterialCategories::all()->pluck('name', 'id')
	    ];
	   return view('admin.discount_edit', $data);

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
			$file = $request->file('discount_image');
			$input['discount_image'] = $file->getClientOriginalName();
			$file->move(public_path().'/images/m_desc/', $file->getClientOriginalName());
		}
		else{
			$input['discount_image'] = $old_img;
		}
		$discount->fill($input);
		$discount->update();
	    return redirect()->route('admin_discounts.index');
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
        return redirect()->route('admin_discounts.index');
    }
}
