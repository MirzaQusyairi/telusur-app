<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Telusur App</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bulma.min.css') }}">
    <!-- Custom Design -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/design.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <style type="text/css">
        @font-face {
            font-family: Signika-r;
            src: url('{{ public_path('font/Signika-Regular.ttf') }}');
        }

        @font-face {
            font-family: Signika-m;
            src: url('{{ public_path('font/Signika-Medium.ttf') }}');
        }

        @font-face {
            font-family: Signika-b;
            src: url('{{ public_path('font/Signika-Bold.ttf') }}');
        }

    </style>
</head>

<body>
    <div id="dispar-wrap">
        <header>
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand mr-3">
                        <a class="navbar-item" href="/">
                            
                            <span class="ml-3">
                                <p class="title is-size-4">Telusur</p>
                                <p class="has-text-grey subtitle is-size-6">Apps</p>
                            </span>
                        </a>

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                            data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start">
                            <a href="/" class="navbar-item">
                                Beranda
                            </a>

                            

                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    Destination
                                </a>

                                <div class="navbar-dropdown">
                                    <a href="/wisata" class="navbar-item">
                                        Wisata
                                    </a>
                                    <a href="/kuliner" class="navbar-item">
                                        Kuliner
                                    </a>
                                    <a href="/penginapan" class="navbar-item">
                                        Penginapan
                                    </a>
                                </div>
                            </div>
                            
                            <a href="/kontak" class="navbar-item">
                                Kontak
                            </a>
                            <a href="/tentang" class="navbar-item">
                                Tentang
                            </a>
                        </div>
                        <div class="navbar-end">
                            <div class="navbar-item">
                                @if (Route::has('login'))
                                    <div class="buttons">
                                        @auth
                                            <a href="{{ url('/dashboard') }}"
                                                class="text-sm text-gray-700 underline">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="button is-link">Masuk</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="button is-danger">Daftar</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <!-- <div class="container"> -->
