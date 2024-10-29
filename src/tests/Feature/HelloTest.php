<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HelloTest extends TestCase
{
    // データベースをテスト前のの状態に戻す
    use RefreshDatabase;

    public function testHello()
    {
        // 値が「True」かどうかを確認
        $this->assertTrue(true);

        // 値が空なら「True」を返す
        $arr = [];
        $this->assertEmpty($arr);

        // 'Hello World'と$txtが等しければ「True」を返す
        $txt = "Hello World";
        $this->assertEquals('Hello World', $txt);

        // 100より$nが小さいかどうかを確認
        $n = random_int(0,100);
        $this->assertLessThan(100, $n);

        // ウェブページにアクセスできるかのチェック
        $responese = $this->get('/');
        $responese->assertStatus(200);

        $responese = $this->get('/no_route');
        $responese->assertStatus(404);

        // データベースに値を挿入したり、そのデータが存在するかを確認するテスト
        // データの作成
        User::factory()->create([
            'name' => 'aaa',
            'email' => 'bbb@ccc.com',
            'password' => 'test12345'
        ]); 

        // 該当のデータが存在しているかの確認
        $this->assertDatabaseHas('users',[
            'name' => 'aaa',
            'email' => 'bbb@ccc.com',
            'password' => 'test12345'
        ]);
    }
}
