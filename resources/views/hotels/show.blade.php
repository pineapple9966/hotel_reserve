@extends('base')

@section('contnet')
    <div class="row">
        <div class="col-10">
            <img src="{{ Storage::url($hotel->photo) }}" width="500"><br>
            <h3>{{ $hotel->name }}</h3>
        </div>
        <br>
        <form method="post" action=""></form>
    </div>