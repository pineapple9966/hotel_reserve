@extends('admin.base')

@section('content')
    <form method="post" action="{{ route('admin.hotels.store') }}" enctype="multipart/form-data">
        @csrf

        <table>
            <tr>
                <th><label for="name">商品名</label></th>
                <td><input id="name" name="name" required></input></td>
            </tr>
            <tr>
                <th><label for="photo">画像</label></th>
                <td><input type="file" id="photo" name="photo" accept="image/*" required></input></td>
            </tr>            
            <tr>
                <th><label for="price">価格</label></th>
                <td><input type="number" id="price" name="price" required></input></td>
            </tr>
        </table>

        <button type="button" class="back-btn" data-action="{{ route('admin.hotels.index') }}">戻る</button>
        <button>登録</button>
    </form>
@endsection