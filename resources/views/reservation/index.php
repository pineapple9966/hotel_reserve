@extends('base')

@section('content')
    @Auth
    <table>
        <tr>
            <th></th>
            <th>チェックイン</th>
            <th>チェックアウト</th>
            <th>合計</th>
            <th></th>
        </tr>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>
                    <a href="{{ route('hotels.show', $reservation->hotel->id) }}">
                        <img src="{{ Storage::url($reservation->hotel->photo) }}" width="200">
                    </a>
                    {{ $reservation->hotel->name }}
                </td>
                <td>{{ $reservation->checkin_date }}</td>
                <td>{{ $reservation->checkout_date }}</td>
                <td>{{ $reservation->total_price }}</td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="_method" value="delete">
                        @csrf
                        <button type="button" class="delete-btn">キャンセル</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    @endif
    </table>
@endsection