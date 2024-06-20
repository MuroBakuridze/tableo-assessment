<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 80px;">
    <div class="container">
        <a class="navbar-brand mx-auto" href="{{ route('restaurants.index') }}">Home</a>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('restaurants.allTables') }}" class="btn btn-info btn-sm">Tables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('restaurants.allActiveTables') }}" class="btn btn-warning btn-sm">Active Tables</a>
                </li>
                @foreach ($restaurants as $restaurant)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('restaurants.show', ['id' => $restaurant->id]) }}">{{ $restaurant->name }}</a>
                    </li>
                @endforeach 
            </ul>
        </div>
    </div>
</nav>
