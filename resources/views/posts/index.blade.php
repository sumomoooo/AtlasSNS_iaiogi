@extends('layouts.login')

@section('content')
<!-- <h2>機能を実装していきましょう。</h2> -->
<!-- <div class="container">
  {!! Form::open(['url' => '/posts/index']) !!}
  <div class="post">
  <input type="image" name="images" value=""><img src="{{ asset('storage/' . Auth::user()->images) }}">
  {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください'])!!}
    <div class = "button">
      <button type = "submit"><img class="post-btn src="images/post.png"></button>
    </div>
  </div>
{!! Form::close() !!}

</div> -->
    <form action="/top" method="get">
        @csrf
        <div class="form-group">
          <div><img src="images/icon1.png"></div>
            <label for="content"></label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        <button type="submit">
            <img src="{{ asset('images/post.png') }}" alt="投稿する">
        </button>
        </div>
    </form>

@endsection
