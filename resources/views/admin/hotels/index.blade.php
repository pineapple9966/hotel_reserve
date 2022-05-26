@extends('admin.base')

@section('content')
    <form action="{{ route('admin.hotels.create') }}">
        <button>新規登録</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>画像</th>
            <th>ホテル名</th>
            <th>価格</th>
        </tr>
        @foreach ($hotels as $hotel)
            <tr>
                <td>{{ $hotel->id }}</td>
                <td><img src="{{ Storage::url($hotel->photo) }}" alt="{{ $hotel->name }}" width="150"></td>
                <td>{{ $hotel->name }}</td>
                <td>{{ $hotel->price }}</td>
            </tr>
        @endforeach
    </table>
@endsection