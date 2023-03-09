<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookControllner extends Controller
{
    public function list(){

       $data=Book::orderBy('id','asc')->get();


        return view('list',compact('data'));

    }
    //

}

