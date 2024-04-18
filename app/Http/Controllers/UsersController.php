<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Follow;


class UsersController extends Controller
{
    //
    // public function profile()
    // {
    //     return view('users.profile');
    // }
    public function search()
    {
        return view('users.search');
    }

    public function profile()
    {
        $user = auth()->user(); // ログイン中のユーザー情報を取得
        return view('users.profile', compact('user'));
    }

    public function index(Request $request)
    {
        // ユーザー検索
        $keyword = $request->input('keyword');
        $users = User::where('id', '!=', auth()->id());

        if ($keyword) {
            $users = $users->where('username', 'like', '%' . $keyword . '%');
        }

        $users = $users->get();

        // ユーザー一覧を表示
        return view('users.search', compact('users', 'keyword'));
    }

}
