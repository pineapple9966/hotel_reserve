@extends('base')

@section('content')
    <form method="post">
        @csrf

        <table>
            <tr>
                <th><label for="name">氏名</label></th>
                <td><input id="name" name="name" value="{{ old('name') }}" placeholder="山田太郎" required></td>
            </tr>
            <tr>
                <th><label for="email">メールアドレス</label></th>
                <td>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="123@example.com" required>
                    {{ $errors->first('email') }}
                </td>
            </tr>
            <tr>
                <th><label for="postal_code">郵便番号</label></th>
                <td><input id="postal_code" name="postal_code" value="{{ old('postal_code') }}" placeholder="123-4567" required></td>
            </tr>
            <tr>
                <th><label for="address">住所</label></th>
                <td><input id="address" name="address" value="{{ old('address') }}" placeholder="東京都新宿区西新宿2‐8‐1" required></td>
            </tr>
            <tr>
                <th><label for="phone">電話番号</label></th>
                <td><input id="phone" name="phone" value="{{ old('phone') }}" required></td>
            </tr>
            <tr>
                <th><label for="password">パスワード</label></th>
                <td>
                    <input type="password" id="password" name="password" required>
                    {{ $errors->first('password') }}
                </td>
                <th><label for="password_confirmation">パスワード確認</label></th>
                <td><input type="password" id="pasoword_confirmation" name="password_confirmation" required></td>
            </tr>
        </table>

        <button>登録</button>
    </form>
@endsection