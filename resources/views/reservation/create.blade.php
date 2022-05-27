@extends('base')

@section('content')
    <form method="post" action="">
        @csrf

        <table>
            <tr>
                <td><label for="chekin_date">チェックイン</label></td>
                <td>
                    <input type="date" id="checkin_date" name="checkin_date" value="<?php echo date('y-m-d'); ?>" required>
                    {{ $errors->first('checkin_date') }}
                </td>
            </tr>
            <tr>
                <td><label for="checkout_date">チェックアウト</label></td>
                <td>
                    <input type="date" id="checkout_date" name="checkout_date" value="dateto" required>
                    {{ $errors->first('checkout_date') }}
                </td>
            </tr>
        </table>

        @foreach ($hotels as $hotel)
        <button type="button" class="back-btn" data-action="{{ route('hotels.show', $hotel->id) }}">戻る</button>
        @endforeach
        <button>予約する</button>
    </form>