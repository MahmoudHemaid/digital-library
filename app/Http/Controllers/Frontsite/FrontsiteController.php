<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class FrontsiteController extends Controller
{
    public function index(){
        $books = Book::orderBy('created_at','desc')->paginate(10);
        return view("frontsite.home", compact("books"));
    }
}
