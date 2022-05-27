@extends('base')

@section('content')
    <form method="post">
        @csrf

        <table>
            <tr>
                <th><label for="email">メールアドレス</label></th>
                <td><input id="email" name="email" placeholder="123@example.com" required></td>
            </tr>
            <tr>
                <th><label for="password">パスワード</label></th>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
        </table>

        @if($errors->has('email'))
            {{ $errors->first('email') }}<br>
        @endif

        <button>ログイン</button>
    </form>
@endsection