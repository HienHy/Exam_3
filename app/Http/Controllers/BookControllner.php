<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookControllner extends Controller
{
    public function list(Request $request){
        $search = $request->get('search');
        $title = $request->get("title");


        $data = Book::BookFiler($title)->Search("%$search%")->orderBy('id','asc')->get();



        return view('list',compact('data','title'));

    }
    //

}

