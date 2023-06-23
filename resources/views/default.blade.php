<!DOCTYPE html>
<html>

<head>
    <title>Laravel Livewire Step Multi Form - Dagmar Mpheio</title>
    @livewireStyles
    <script src="{{ asset('/js/jquery_3.2.1.min.js') }}"></script>
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('/css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
</head>

<body>
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
                                <a href="{{route('products.index')}}" class="nav-link">Sem Livewire</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="card-body">
                <livewire:wizard />
            </div>

        </div>
    </div>
</body>
@livewireScripts

</html>
