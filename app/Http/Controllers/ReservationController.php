<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        $users = User::all();

        return view('reservation.index', compact('reservations', 'users'));
    }

    public function create(Hotel $hotel)
    {
        $hotels = Hotel::all();

        return view('reservation.create', compact('hotels'));
    }

    public function store(Request $request, Hotel $hotel, User $user)
    {
        $attributes = $request->all();

        $validateData = $request->validate([
            'checkin_date' => 'after_or_equal:today',
            'checkout_date' => 'after:checkin_date',
        ], [
            'checkin_date.after_or_equal' => '現在日以降の日付を選択してください',
            'checkout_date.after' => 'チェックインの日付より後の日付を選択してください',
        ]);

        $carbon1 = new Carbon($request['checkin_date']);
        $carbon2 = new Carbon($request['checkout_date']);

        $totalPrice = $hotel->price() * $carbon1->diffInDays($carbon2);

        Reservation::create([
            'user_id' => $request->user()->id,
            'hotel_id' => $hotel->id,
            'checkin_date' => $request['checkin_date'],
            'checkout_date' => $request['checkout_date'],
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('reservation.index', $hotel->id);
    }

    public function destroy(Request $request, Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('home');
    }
}
