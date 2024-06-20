@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ $restaurant->name }}</h1>
            <div class="d-flex justify-content-center mt-3">
                <a href="{{ route('restaurants.tables', $restaurant->id) }}" class="btn btn-primary btn-lg mx-2">Tables</a>
                <a href="{{ route('restaurants.active_tables', $restaurant->id) }}" class="btn btn-success btn-lg mx-2">Active Tables</a>
            </div>
            <div class="text-center mt-3">
                <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">Back to Home</a>
            </div>
        </div>
    </div>
@endsection