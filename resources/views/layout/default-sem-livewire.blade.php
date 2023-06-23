<!DOCTYPE html>
<html>

<head>
    <title>Laravel Multi Step Form Example - ItSolutionStuff.com - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" />
</head>

<body style="background-color: #f3fdf3" class="mt-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Laravel Livewire Step Multi Form - Dagmar Mpheio
                <nav class="navbar navbar-expand-md">
                    <div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/wizard" class="nav-link">Com Livewire</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('products.index') }}" class="nav-link">Sem Livewire</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
