@extends('layouts.login')

@section('content')
プロフィール
<div class="form-container">

<form action="{{ route('profile_update') }}" method="POST" enctype="multipart/form-data">
    @csrf
                        <div><img src="images/icon1.png"></div>
    <div class="form-group">
        <label for="name">ユーザー名</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
    </div>
    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
    </div>
    <div class="form-group">
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirmation">パスワード確認</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>
    <div class="form-group">
        <label for="bio">自己紹介</label>
        <textarea name="bio" id="bio" class="form-control" rows="5">{{ $user->bio }}</textarea>
    </div>
    <div class="form-group">
        <label for="avatar">アイコン画像</label>
        <input type="file" name="avatar" id="avatar" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">更新する</button>
</form>
</div>





@endsection
