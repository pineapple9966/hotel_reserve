@extends('admin.base')

@section('javascript')
    <script>
        $(function () {
            $('.delete-btn').click(function () {
                if(confirm('削除してもよろしいですか？')) {
                    const $form = $(this).parents('form');
                    $form.submit();
                }
            });
        });
    </script>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.hotels.destroy', $hotel->id) }}">
        @method('delete')
        @csrf
        <button type="button" class="delete-btn">削除</button>
    </form>

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