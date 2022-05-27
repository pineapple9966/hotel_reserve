@extends('base')

@section('content')
    <div class="row">
        <div class="col-10">
            <h3>おすすめホテル</h3>
            @foreach ($recommends as $hotel)
                <a href="{{ route('hotels.show', $hotel->id) }}">
                    <img src="{{ Storage::url($hotel->photo) }}" alt="{{ $hotel->name }}" width="300">
                </a>
            @endforeach

            <h3>新着ホテル</h3>
            @foreach ($newArrivals as $hotel)
                <a href="{{ route('hotels.show', $hotel->id) }}">
                    <img src="{{ Storage::url($hotel->photo) }}" alt="{{ $hotel->name }}" width="300">
                </a>
            @endforeach
        </div>
    </div>
@endsection