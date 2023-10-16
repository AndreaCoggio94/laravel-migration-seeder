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
        @if (($train->running_on_time) === 1)
        <strong>The train is running on time</strong> <br>
        @endif
        @if (($train->cancelled) === 1)
        <strong>The train is Cancelled</strong>
        @endif
        
      </p>
      <hr>
    @empty
      <h2>There are no results</h2>
    @endforelse
  </section>
@endsection