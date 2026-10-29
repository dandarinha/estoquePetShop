
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Estoque Pet Shop' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe"
        crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @livewireStyles
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-box2-heart-fill me-2"></i>
                Estoque Pet Shop
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Abrir menu">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                @auth
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('mercadoria.create') }}">
                                <i class="bi bi-box-seam me-1"></i>
                                Mercadorias
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('movimentacao.index') }}">
                                <i class="bi bi-arrow-left-right me-1"></i>
                                Movimentações
                            </a>
                        </li>

                    </ul>

                    <div class="d-flex align-items-center gap-3">

                        <span class="text-white">
                            <i class="bi bi-person-circle me-1"></i>
                            {{ Auth::user()->name }}
                        </span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-box-arrow-right me-1"></i>
                                Sair
                            </button>
                        </form>

                    </div>

                @else
                    <div class="ms-auto">
                        <a href="{{ route('login') }}" class="btn btn-outline-light">
                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            Entrar
                        </a>
                    </div>
                @endauth

            </div>
        </div>
    </nav>

    <main class="container py-4">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Fechar"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Fechar"></button>
            </div>
        @endif

        {{ $slot }}

    </main>

    <script type="module"
        src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL"
        crossorigin="anonymous">
    </script>

    @livewireScripts

</body>
</html>
