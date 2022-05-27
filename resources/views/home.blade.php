@extends('base')

@section('content')
    <div class="row">
        <div class="col-10">
            <h3>おすすめホテル</h3>
            @foreach ($recommends as $hotel)
            <img src="{{ Storage::url($hotel->photo) }}" alt="{{ $hotel->name }}" width="300">
            @endforeach

            <h3>新着ホテル</h3>
            @foreach ($newArrivals as $hotel)
                <img src="{{ Storage::url($hotel->photo) }}" alt="{{ $hotel->name }}" width="300">
            @endforeach
        </div>
    </div>
@endsection