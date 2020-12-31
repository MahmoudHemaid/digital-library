<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
    public function authors(){
        return $this->belongsToMany(Author::class, 'book_authors');
    }
    public function categories(){
        return $this->belongsToMany(Category::class, 'book_categories');
    }
    public function loans(){
        return $this->belongsToMany(User::class, 'book_loans');
    }
}
