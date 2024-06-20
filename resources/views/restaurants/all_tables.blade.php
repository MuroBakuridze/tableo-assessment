@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">All Tables</h1>
            <ul class="list-group mt-3">
                @foreach ($tables as $table)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $table->restaurant->name }} - {{ $table->name }} (Min: {{ $table->minimum_capacity }}, Max: {{ $table->maximum_capacity }})
                        <span>
                            @if($table->active)
                                <i class="bi bi-check-circle-fill text-success"></i>
                            @else
                                <i class="bi bi-x-circle-fill text-danger"></i>
                            @endif
                        </span>
                    </li>
                @endforeach
            </ul>
            <div class="text-center mt-3">
                <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
