<?php

namespace App\Http\Controllers;

use App\MaterialSubCategories;
use Illuminate\Http\Request;
use Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data = [
    		'categories' => \App\MaterialCategories::all()
	    ];
        return view('admin.categories', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token', 'subcategory_name');
        $validator = Validator::make($input,[
        	'name' => 'required'
        ]);
        if($validator->fails()){
        	return redirect()->route('categories.index')->withErrors($validator);
        }
        $category = new \App\MaterialCategories();
		$category->fill($input);
		$category->save();
		$input = $request->except('_token', 'name');
		foreach($input['subcategory_name'] as $subcat_name){
			$subcategory = new \App\MaterialSubCategories();
			$input['subcategory_name'] = $subcat_name;
			$input['category_id'] = $category->id;
			$subcategory->fill($input);
			$subcategory->save();
		}
		return redirect()->route('categories.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
