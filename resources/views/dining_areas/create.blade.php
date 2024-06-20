@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center">Create Dining Area</h1>
            <form action="{{ route('dining_areas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Dining Area Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create Dining Area</button>
            </form>
        </div>
    </div>
@endsection
