<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        .side-style {
            --bs-gutter-x: 0rem !important;
        }

        .my-card-body {
            height: calc(100vh - (55px + 40px));
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="
                                            event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                        "
                                    >
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="row side-style justify-content-center">
                @auth
                <div class="col-md-2 p-0">
                    <div class="card">
                        <div class="card-header">
                            タグ一覧
                        </div>
                        <div class="card-body my-card-body">
                        <a href="/home"class="card-text b-block mb-3">全て表示</a>
                        @foreach ($tags as $tag)
                            <a href="/home?tag_id={{ $tag->id }}"class="card-text d-block mb-3">{{ $tag->name }}</a>
                            <!--            ↑　/home にパラメータを付与　tag_idというキーにタグのIDを設定 -->
                        @endforeach
                    </div>
                </div>
            </div>
                <div class="col-md-4 p-0 ">
                    <div class="card">
                            <div class="card-header">
                                メモ一覧
                            </div>
                            <div class="card-body my-card-body">
                                @foreach ($memos as $memo)
                                    <!-- aタグに変更して、クラスを追加しよう -->
                                    <a href="{{ route('edit', $memo->id) }}" class="card-text d-block mb-3">{{ $memo->content }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endauth

                <div class="col-md-6 p-0">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>

</html>
