<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLoan;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $books = Book::orderBy('created_at','desc')->with(["authors:id,name", "categories:id,name"])->paginate(20);

        return response([
            "count" => $books->count(),
            "limit" => 20,
            "total" => $books->total(),
            "data" => $books->items()
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
            'title' => 'required',
            'description' => '',
            'location' => 'nullable',
            'number_of_copies' => 'required',
            'date_of_publication' => 'required|date',
            'publisher_id' => 'required|integer',
            "authors" => 'array|nullable',
            'categories' => 'array|nullable',
        ];


        $messages = [
            'title.required' => 'The Book title field should be entered',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response(["status" => 'error', "errors" => $validator->errors() ]);
        }

        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->location = $request->location;
        $book->number_of_copies = $request->number_of_copies;
        $book->date_of_publication = $request->date_of_publication;
        $book->publisher_id = $request->publisher_id;

        $book->save();
        if (is_array($request->authors)){
            $book->authors()->sync($request->authors);
        }
        if (is_array($request->categories)){
            $book->categories()->sync($request->categories);
        }
        return response(Book::with("authors:id,name")->find($book->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        $rules = [
            'title' => 'required',
            'description' => '',
            'location' => 'nullable',
            'number_of_copies' => 'required',
            'date_of_publication' => 'required|date',
            'publisher_id' => 'required|integer',
            'authors' => 'array|nullable',
            'categories' => 'array|nullable',
        ];

        $messages = [
            'title.required' => 'The Book title field should be entered',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response(["status" => 'error', "errors" => $validator->errors() ]);
        }

        $book->title = $request->title;
        $book->description = $request->description;
        $book->location = $request->location;
        $book->number_of_copies = $request->number_of_copies;
        $book->date_of_publication = $request->date_of_publication;
        $book->publisher_id = $request->publisher_id;

        $book->save();
        if (is_array($request->authors)){
            $book->categories()->sync($request->authors);
        }
        if (is_array($request->categories)){
            $book->categories()->sync($request->categories);
        }
        return response(Book::with("authors:id,name")->find($book->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book){
        return response(Book::with(["authors:id,name", "categories:id,name"])->find($book->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return response($book);
    }
}
