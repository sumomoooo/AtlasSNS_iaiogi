@extends('layouts.login')

@section('content')
    <form action="/search" method="post">
 @csrf
    <input type="text" name="keyword" class="form" placeholder="ユーザー名で検索">
    <input type="submit" src="images/search.png" alt="検索" class="btn">
    </form>
    @foreach ($users as $user)
    <div>{{ $user->name }}</div>
@endforeach
    <table>
        @foreach($users as $user)
            @if($user != Auth::user())
                <tr>
                    <td><img src="{{ $user->images }}" alt="ユーザーアイコン"></td>
                    <td>{{ $user->username }}</td>
                    <td>
                        @if(Auth::check() && $user->id != Auth::user()->id)
                            <!-- フォローボタンの表示 -->
                            <button>フォローする</button>
                        @else
                            <!-- フォローボタンの非表示 -->
                            <button disabled>フォロー中</button>
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
@endsection
