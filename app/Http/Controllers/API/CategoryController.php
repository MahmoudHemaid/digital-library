<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::withCount("books")->orderBy('created_at','desc')->paginate(10);
        return response([
            "count" => $categories->count(),
            "limit" => 10,
            "total" => $categories->total(),
            "data" => $categories->items()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
        ];

        $messages = [

        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response(["status" => "error", "errors" => $validator->errors()]);
        }

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

        return response($category);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required',
        ];

        $messages = [

        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return response(["status" => "error", "errors" => $validator->errors()]);
        }

        $category->name = $request->name;
        $category->save();

        return response($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response($category);;
    }
}
