@extends('layouts.app')

@section('title', 'TRAINS INFO')

@section('content')
    <h1 class="display-3 fw-bold text-center text-primary mb-4">TRAINS</h1>

    <div class="row mx-0 justify-content-center">
        <div class="col-10 px-0 rounded">

            <table class="table border border-5 border-black fw-bold text-uppercase">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="text-primary">#</th>
                        <th scope="col" class="text-primary">Agency</th>
                        <th scope="col" class="text-primary">Departure station</th>
                        <th scope="col" class="text-primary">Arrival station</th>
                        <th scope="col" class="text-primary">Departure time</th>
                        <th scope="col" class="text-primary">Arrival time</th>
                        <th scope="col" class="text-primary">Train Code</th>
                        <th scope="col" class="text-primary">Number of carriages</th>
                        <th scope="col" class="text-primary">In time</th>
                        <th scope="col" class="text-primary">Deleted</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($trains as $key => $train)
                        <tr class="text-center">
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $train->agency }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->train_Code }}</td>
                            <td>{{ $train->number_of_carriages }}</td>
                            <td>{{ $train->in_time }}</td>
                            <td>{{ $train->deleted }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
