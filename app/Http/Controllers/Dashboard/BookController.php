<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Author;
use App\Models\BookLoan;
use App\Models\Publisher;
use App\Models\BookAuthor;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('created_at','desc')->paginate(10);
        return view("dashboard.books.index", compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $publishers = Publisher::all();
        $authors = Author::all();
        $categories = Category::all();
        return view("dashboard.books.create", compact('publishers', 'authors', 'categories'));
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
            'number_of_copies' => 'integer',
            'date_of_publication' => 'required|date',
            'publisher_id' => 'required|integer',
            'authors' => 'array|nullable',
            'categories' => 'array|nullable',
        ];

        $messages = [
            'title.required' => 'The Book title field should be entered',
            'publisher_id.integer' => "You must select publisher"
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
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
        return redirect()->route('dashboard.books.index')->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        $publishers = Publisher::all();
        $authors = Author::all();
        $categories = Category::all();
        return view("dashboard.books.edit", compact('book', 'publishers', 'authors', 'categories'));
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
            'number_of_copies' => 'integer',
            'date_of_publication' => 'required|date',
            'publisher_id' => 'required|integer',
            'authors' => 'array|nullable',
            'categories' => 'array|nullable',
        ];

        $messages = [
            'title.required' => 'The Book title field should be entered',
            'publisher_id.integer' => "You must select publisher"
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

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
        return redirect()->route('dashboard.books.index')->with('success','Book updated successfully');;
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
        return redirect()->route('dashboard.books.index')->with('success','Book deleted successfully');;
    }
}
