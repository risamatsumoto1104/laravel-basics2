<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Models\Author; // Eloquentを使用できるようにモデルを読み込む

class AuthorController extends Controller
{
    // 1.データの取得
    public function index()
    {
        // authorsテーブルから全件取得する
        $authors = Author::all();
        // データ全件格納されたauthorsをパラメータとして渡し、index.blade.phpを呼び出す
        return view('index',['authors' => $authors]);
    }

    // 2.データ追加用ページの表示
    public function add()
    {
        return view('add');
    }

    // 3.データ追加機能の設定
    // createアクションの引数にRequest $requestを指定することでリクエストボディを受け取る
    public function create(AuthorRequest $request)
    {
        // リクエストボディから全ての情報を取得する
        $form = $request->all();
        // Eloquentのcreateメソッドを使用
        // データ追加用ページのinputタグのname属性とテーブルのカラム名を一致させ手いるため、「$request->all()」の値を代入することでそのままテーブルに保存することができる
        Author::create($form);
        // データ挿入後、データの一覧が表示される画面に遷移するようにリダイレクトする
        return redirect('/');
    }

    // 4.データ更新用ページの表示
    public function edit(Request $request)
    {
        // idを元に更新するデータを取得
        // 「データ更新用ページ」にアクセスする際に、更新対象のデータのidをクエリパラメータに含めている為、「$request->id」でクエリパラメータからidを取得する
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

    // 5.データ更新機能の設定
    public function update(Request $request)
    {
        $form = $request->all();
        // @csrfにより、トークンが生成されるが、更新上で余計なカラムとなるので_tokenを排除している
        unset($form['_token']);
        // findメソッドの引数にリクエストで取得したidを指定。これで更新対象のレコードを取得し、そのレコードをupdateメソッドで$formの内容を元に更新する
        Author::find($request->id)->update($form);
        return redirect('/');
    }

    // 6.データ削除用ページの表示
    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['author' => $author]);
    }

    // 7.データ削除機能の設定
    public function remove(Request $request)
    {
        // findメソッドの引数にリクエストで取得したidを指定。これで削除対象のレコードを取得し、そのレコードをdeleteメソッドで削除する
        Author::find($request->id)->delete();
        return redirect('/');
    }

    // 8.データ検索用ページの表示
    public function find()
    {
        return view('find', ['input' => '']);
    }

    // 9.データ検索機能の設定
    public function search(Request $request)
    {
        // LINKと％を利用すると部分一致が可能
        $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
}
