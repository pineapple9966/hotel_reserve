@extends('admin.base')

@section('content')
    <form method="post" action="{{ route('admin.hotels.update', $hotel->id) }}" enctype="multipart/form-data">
        @method('put')
        @csrf

        <table>
            <tr>
                <th><label for="name">ホテル名</label></th>
                <td><input id="name" name="name" value="{{ $hotel->name }}" required></td>
            </tr>
            <tr>
                <th><label for="price">価格</label></th>
                <td><input type="number" id="price" name="price" value="{{ $hotel->price }}" required></td>
            </tr>
            <tr>
                <th><label for="photo">画像</label></th>
                <td>
                    現在: <a href="{{ Storage::url('$hotel->photo') }}">{{ $hotel->photo }}</a><br>
                    過去: <input type="file" id="photo" name="photo" accept="image/*">
                </td>
            </tr>
        </table>

        <button type="button" class="back-btn" data-action="{{ route('admin.hotels.show', $hotel->id) }}">戻る</button>
        <button>更新</button>
    </form>
@endsection