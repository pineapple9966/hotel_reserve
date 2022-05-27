@extends('base')

@section('content')
    <div class="row">
        <div class="col-10">
            <img src="{{ Storage::url($hotel->photo) }}" width="500"><br>
            <h3>{{ $hotel->name }}</h3>
            <br>

            <form method="post" action="">
                @csrf

                <table>
                    <tr>
                        <td><label for="checkin_date">チェックイン</label></td>
                        <td>
                            <input type="date" id="checkin_date" name="checkin_date" value="{{ old('checkin_date', \Carbon\Carbon::today()->toDateString()) }}" required) }}>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="checkout_date">チェックアウト</label></td>
                        <td>
                            <input type="date" id="checkout_date" name="checkout_date" value="{{ old('checkout_date', \Carbon\Carbon::tomorrow()->toDateString()) }}" required) }}>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                <button>予約する</button>
            </form>
        </div>
    </div>
@endsection