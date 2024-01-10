@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Ramalan Cuaca Jakarta untuk 5 Hari ke Depan</h1>
    <table>
        <thead>
            <tr>
                <th>Weather Forecast:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($weatherForecasts as $forecast)
            <tr>
                <td>{{ $forecast['date'] }}:</td>
                <td></td>
                <td>{{ $forecast['temperature'] }}°C</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection