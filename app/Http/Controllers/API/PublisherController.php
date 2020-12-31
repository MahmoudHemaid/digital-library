<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::withCount("books")->orderBy('created_at','desc')->paginate(10);
        return response([
            "count" => $publishers->count(),
            "limit" => 10,
            "total" => $publishers->total(),
            "data" => $publishers->items()
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

        $publisher = new Publisher();
        $publisher->name = $request->name;
        $publisher->save();

        return response($publisher);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {

        return response($publisher);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
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

        $publisher->name = $request->name;
        $publisher->save();

        return response($publisher);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return response($publisher);;
    }
}
