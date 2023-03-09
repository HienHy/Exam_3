<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable =[
        'author_id',
        'title',
        'ISBN',
        'pub_year',
        'available',

    ];
    public function Author(){
        return $this->belongsTo(Book::class);
    }

    public function scopeSearch($query,$search){
        if ($search && $search !=""){

            return $query -> where("title","like","%$search%");
        }
        return  $query;

    }

    public function scopeBookFiler($query,$title){
        if ($title && $title !=0){
            return $query->where("title",$title);

        }
        return $query;
    }
}
