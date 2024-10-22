<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author; //Eloquentを使用できるようにモデルを読み込む

class AuthorController extends Controller
{
    //データの取得(Read)
    public function index()
    {
        // authorsテーブルから全件取得する
        $authors = Author::all();
        //データ全件格納されたauthorsをパラメータとして渡し、index.blade.phpを呼び出す
        return view('index',['authors' => $authors]);
    }
}
