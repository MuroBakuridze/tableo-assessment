@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ $restaurant->name }} Active Tables</h1>
            @foreach ($restaurant->diningAreas as $diningArea)
                <h2 class="mt-4">{{ $diningArea->name }}</h2>
                <ul class="list-group mt-2">
                    @foreach ($diningArea->tables->where('restaurant_id', $restaurant->id)->where('active', true) as $table)
                        <li class="list-group-item">{{ $table->name }} (Min: {{ $table->minimum_capacity }}, Max: {{ $table->maximum_capacity }})</li>
                    @endforeach
                </ul>
            @endforeach
            <div class="text-center mt-3">
                <a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn btn-secondary">Back to {{ $restaurant->name }}</a>
                <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">Back to Home</a>
            </div>
        </div>
    </div>
@endsection