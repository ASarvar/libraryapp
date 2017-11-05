<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

     public function search()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI

        $books = Book::where('book_id','like','%'.$search.'%')->orWhere('book_author','like','%'.$search.'%')->orWhere('book_name','like','%'.$search.'%')->orWhere('book_published_at','like','%'.$search.'%')
            ->orderBy('book_id')
            ->paginate(10);

        return view('includes.results', compact('books','search'));
    }
}
