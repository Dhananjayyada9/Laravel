<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

	// public $Book;
public function __construct(Book $book)
    {
    	$this->book =$book;
    }


    public function getBook()
    {
    	return view('book.create');
    }
    public function store(Request $request){
    	$request->validate([
  'name'=>'required',
  'author'=>'required',
  'price'=>'required',

]);
  $params = $request->all();

$book = $this->book->create($params);
    }

    public function getBooks(){
    	$books = $this->book->all();
    	 $params = [
       'books' =>$books,  
        ];
        return view('book.index',$params);

    }
}
