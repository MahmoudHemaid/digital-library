<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLoan;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$books = Book::all();
        //$books = DB::table('books')->get();
        //$books = DB::table('books')->limit(10)->get();
        //$books = DB::table('books')->where('category_id',2)->get();
        //$books = DB::table('books')->where('category_id','<=',2)->get();
        /*$books = DB::table('books')->where([
           ['category_id',2],
           ['user_id','>=',5]
        ])->get();*/

        /*$books = DB::table('books')
            ->where('user_id',10)
            ->where('category_id',3)
            ->select('title','views')
            ->get();*/

        //$books = DB::table('books')->pluck('id');
        //$books = DB::table('books')->pluck('title','views');
        //$books = DB::table('books')->find(10);
        /*$books = DB::table('books')
            ->where('category_id',3)
            ->select('title','views')
            ->orderBy('views','asc')
            ->get();*/
        /*$views_average = DB::table('books')->avg('views');
        dd($views_average);*/

        /*$views_min = DB::table('books')->min('views');
        dd($views_min);*/

        /*$views_max = DB::table('books')->max('views');
        dd($views_max);*/

        /*$books = DB::table('books')->orderBy('shares','desc')
            ->chunk(10,function ($items){
            foreach ($items as $item){
                echo $item->shares.' '.$item->title.'<br>';
            }
        });*/
        //$books = DB::table('books')->whereIn('category_id',[2,5])->get();
        //$books = DB::table('books')->whereBetween('category_id',[2,7])->get();
        //$books = DB::table('books')->whereNull('category_id')->get();
        /*$books = DB::table('books')
            ->join('categories','categories.id','books.category_id')
            ->select('books.title','categories.name','books.views')->get();
        $books = DB::table('books')->skip(10)->take(5)->get();
        $books = DB::table('books')->where('category_id',2)->get();
        $books = DB::table('books')->where('category_id',2)->first();
        $books = DB::table('books')->find(3);
        dd($books);*/
        /*DB::table('categories')->insert([
           'name' => 'Polictical',
           'code' => 'PLT',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categories')->insert([
            ['name' => 'Health', 'code' => 'HLT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Economy', 'code' => 'ECY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
        DB::table('categories')->where('id',22)->update([
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::tomorrow(),
        ]);
        DB::table('books')->where('id',1)->increment('views',5);
        DB::table('books')->where('id',1)->decrement('views',4);
        DB::table('comments')->delete();
        DB::table('comments')->truncate();*/
//        DB::enableQueryLog();
//
//        $books = DB::table('books')->whereIn('category_id',[2,5])->get();
//
//        $books = DB::table('books')->where('category_id','<=',2)->get();
//
//        $books = DB::table('books')->where([
//            ['category_id',2],
//            ['user_id','>=',5]
//        ])->get();
//
//        dd(DB::getQueryLog());
        return view("dashboard.books.index");
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
    }
}
