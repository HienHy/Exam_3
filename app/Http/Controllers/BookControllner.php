<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookControllner extends Controller
{
    public function list(){

       $data= Book::orderBy('id','asc')->paginate(20);

        return view('list',compact('data'));
    }
    //
}
