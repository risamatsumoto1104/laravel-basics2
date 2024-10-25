<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author; // Eloquentを使用できるようにモデルを読み込む

class AuthorController extends Controller
{
    // データの取得(Read)
    public function index()
    {
        // authorsテーブルから全件取得する
        $authors = Author::all();
        // データ全件格納されたauthorsをパラメータとして渡し、index.blade.phpを呼び出す
        return view('index',['authors' => $authors]);
    }

    // データ追加用ページの表示
    public function add()
    {
        return view('add');
    }

    // データ追加機能の設定
    // createアクションの引数にRequest $requestを指定することでリクエストボディを受け取る
    public function create(Request $request)
    {
        // リクエストボディから全ての情報を取得する
        $form = $request->all();
        // Eloquentのcreateメソッドを使用
        // データ追加用ページのinputタグのname属性とテーブルのカラム名を一致させ手いるため、「$request->all()」の値を代入することでそのままテーブルに保存することができる
        Author::create($form);
        // データ挿入後、データの一覧が表示される画面に遷移するようにリダイレクトする
        return redirect('/');
    }
}
