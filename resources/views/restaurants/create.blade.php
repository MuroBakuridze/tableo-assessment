@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center">Create Restaurant</h1>
            <form action="{{ route('restaurants.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Restaurant Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create Restaurant</button>
            </form>
        </div>
    </div>
@endsection