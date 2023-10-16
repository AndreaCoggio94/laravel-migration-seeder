@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>

    @forelse($trains as $train)
      <p>
        <strong>Company</strong>: {{ $train->company }} <br>
        <strong>Station of Departure</strong>: {{ $train->station_from }} <br>
        <strong>Time of Departure</strong>: {{ $train->departure }} <br>
        <strong>Date of Departure</strong>: {{ $train->date_departure }} <br>
        <strong>Station of Arrival</strong>: {{ $train->station_to }} <br>
        <strong>Time of Arrival</strong>: {{ $train->arrival }} <br>
        <strong>Date of Arrival</strong>: {{ $train->date_arrival }} <br>
        <strong>Train Code</strong>: {{ $train->code }} <br>
        <strong>Number of Carriage</strong>: {{ $train->number_of_carriage }} <br>
        <strong>Running on time</strong>: {{ $train->running_on_time }} <br>
        <strong>Cancelled</strong>: {{ $train->cancelled }} 
      </p>
      <hr>
    @empty
      <h2>There are no results</h2>
    @endforelse
  </section>
@endsection