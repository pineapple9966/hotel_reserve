@extends('admin.base')

@section('content')
    <form action="{{ route('admin.hotels.edit', $hotel->id) }}">
        <table>
            <tr>
                <td colspan="2"><img src="{{ Storage::url($hotel->photo) }}" alt="{{ $hotel->name }}" width="300"></td>
            </tr>
            <tr>
                <th>ホテル名</th><td>{{ $hotel->name }}</td>
            </tr>
            <tr>
                <th>価格</th><td>{{ $hotel->price }}</td>
            </tr>
        </table>

        <button type="button" class="back-btn" data-action="{{ route('admin.hotels.index') }}">戻る</button>
        <button>編集</button>
    </form>
@endsection