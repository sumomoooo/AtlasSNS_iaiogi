@extends('layouts.login')

@section('content')
<form action="{{ route('submit') }}" method="post">
    @csrf
    <div class="form-group">
        <div><img src="{{ asset('images/icon1.png') }}"></div>
        <label for="content">投稿内容</label>
        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        <button type="submit">
            <img src="{{ asset('images/post.png') }}" alt="投稿する">
        </button>
    </div>
</form>

@endsection
