<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::withCount("books")->orderBy('created_at','desc')->paginate(10);
        return response([
            "count" => $authors->count(),
            "limit" => 10,
            "total" => $authors->total(),
            "data" => $authors->items()
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

        $author = new Author();
        $author->name = $request->name;
        $author->save();

        return response($author);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {

        return response($author);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
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

        $author->name = $request->name;
        $author->save();

        return response($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return response($author);;
    }
}
