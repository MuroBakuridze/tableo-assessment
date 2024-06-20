<!DOCTYPE html>
<html>
<head>
    <title>Tableo Assessment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body>
    @include('layouts.header', ['restaurants' => $restaurants])
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>