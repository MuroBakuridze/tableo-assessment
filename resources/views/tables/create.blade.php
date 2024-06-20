@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center">Create Table for {{ $restaurant->name }}</h1>
            <form action="{{ route('tables.store', $restaurant->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Table Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="minimum_capacity">Minimum Capacity</label>
                    <input type="number" name="minimum_capacity" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="maximum_capacity">Maximum Capacity</label>
                    <input type="number" name="maximum_capacity" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="dining_area_id">Dining Area</label>
                    <select name="dining_area_id" class="form-control" required>
                        @foreach ($diningAreas as $diningArea)
                            <option value="{{ $diningArea->id }}">{{ $diningArea->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="active">Active</label>
                    <select name="active" class="form-control" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create Table</button>
            </form>
        </div>
    </div>
@endsection
