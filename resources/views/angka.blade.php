@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Hasil Angka</h1>
    <div class="form-group">
        @foreach($hasil as $key => $value)
        {{ $value }}@if(!$loop->last){{ ' ' }}@endif
        @endforeach
    </div>
</div>
@endsection