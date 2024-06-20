@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Restaurants</h1>
            <ul class="list-group">
                @foreach ($restaurantsData as $restaurant)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $restaurant->name }}
                        <div>
                            <a href="{{ route('restaurants.tables', $restaurant->id) }}" class="btn btn-primary btn-sm">Tables</a>
                            <a href="{{ route('restaurants.active_tables', $restaurant->id) }}" class="btn btn-success btn-sm">Active Tables</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="text-center mt-3">
                <a href="{{ route('restaurants.allTables') }}" class="btn btn-info btn-sm">Tables</a>
                <a href="{{ route('restaurants.allActiveTables') }}" class="btn btn-warning btn-sm">Active Tables</a>
            </div>
        </div>
    </div>
@endsection
