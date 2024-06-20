@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">All Active Tables</h1>
            @foreach ($diningAreas as $diningAreaName => $tables)
                <h2 class="mt-4">{{ $diningAreaName }}</h2>
                <ul class="list-group mt-2">
                    @foreach ($tables as $table)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $table->restaurant->name }} - {{ $table->name }} (Min: {{ $table->minimum_capacity }}, Max: {{ $table->maximum_capacity }})
                            <span>
                                <i class="bi bi-check-circle-fill text-success"></i>
                            </span>
                        </li>
                    @endforeach
                </ul>
            @endforeach
            <div class="text-center mt-3">
                <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
