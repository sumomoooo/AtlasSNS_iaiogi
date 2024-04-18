<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 追記下記１行
use APP\HTTP\Request\postRequest;

class PostsController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }

    // public function submit(Request $request)
    // {
    //     // バリデーションのルールを定義
    //     $rules = [
    //         'content' => 'required|string|max:255', // 必須、文字列、最大255文字
    //     ];

    //     // バリデーションを実行
    //     $validatedData = $request->validate($rules);

    //     // 新しい投稿を作成して保存
    //     $post = new Post();
    //     $post->content = $request->input('content');
    //     $post->user_id = auth()->user()->id; // ログインユーザーのIDを設定
    //     $post->save();

    //     // 投稿が保存されたらトップページにリダイレクト
    //     return redirect('/top')->with('success', '投稿が成功しました。');
    // }
}
