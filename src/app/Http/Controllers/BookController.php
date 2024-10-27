<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $items = Book::all();
        return view('book.index', ['items' => $items]);
    }

    // データ追加用ページ
    public function add(){
        return view('book.add');
    }

    // データ追加機能の設定
    public function create(Request $request){
        // バリデーションを行う
        $this->validate($request, Book::$rules);
        $form = $request->all();
        Book::create($form);
        return redirect('/book');
    }
}
