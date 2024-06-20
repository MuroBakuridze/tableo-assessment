<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 80px;">
    <div class="container">
        <a class="navbar-brand mx-auto" href="{{ route('restaurants.index') }}">Home</a>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold mx-2" href="{{ route('restaurants.allTables') }}">Tables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold mx-2" href="{{ route('restaurants.allActiveTables') }}">Active Tables</a>
                </li>
                @foreach ($restaurants as $restaurant)
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold mx-2" href="{{ route('restaurants.show', ['id' => $restaurant->id]) }}">{{ $restaurant->name }}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link font-weight-bold mx-2" href="{{ route('restaurants.create') }}">Add Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold mx-2" href="{{ route('dining_areas.create') }}">Add Dining Area</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
