{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}

{{--    <title>Flash Card</title>--}}
{{--    <style>--}}
{{--        .flip-card {--}}
{{--            background-color: transparent;--}}
{{--            width: 300px;--}}
{{--            height: 200px;--}}
{{--            perspective: 1000px; /* Remove this if you don't want the 3D effect */--}}
{{--        }--}}

{{--        .flip-card-inner {--}}
{{--            position: relative;--}}
{{--            width: 100%;--}}
{{--            height: 100%;--}}
{{--            text-align: center;--}}
{{--            transition: transform 0.6s;--}}
{{--            transform-style: preserve-3d;--}}
{{--        }--}}

{{--        .flip-card:hover .flip-card-inner {--}}
{{--            transform: rotateY(180deg);--}}
{{--        }--}}

{{--        .flip-card-front, .flip-card-back {--}}
{{--            position: absolute;--}}
{{--            width: 100%;--}}
{{--            height: 100%;--}}
{{--            backface-visibility: hidden;--}}
{{--            border-radius: 10px;--}}
{{--            box-shadow: 0 4px 8px rgba(0,0,0,0.2);--}}
{{--        }--}}

{{--        .flip-card-front {--}}
{{--            background-color: #bbb;--}}
{{--            color: black;--}}
{{--        }--}}

{{--        .flip-card-back {--}}
{{--            background-color: #2980b9;--}}
{{--            color: white;--}}
{{--            transform: rotateY(180deg);--}}
{{--        }--}}
{{--        .bgimage {--}}
{{--            width:100%;--}}
{{--            height:500px;--}}
{{--            background: url('https://images.unsplash.com/photo-1438109491414-7198515b166b?q=80&fm=jpg&s=cbdabf7a79c087a0b060670a6d79726c');--}}
{{--            background-repeat: no-repeat;--}}
{{--            background-position: center;--}}
{{--            background-size:cover;--}}
{{--            background-attachment: fixed;--}}
{{--        }--}}
{{--        .bgimage h5 {--}}
{{--            color:white;--}}
{{--            text-shadow:2px 2px #333;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<header>--}}
{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="/">Flash Card</a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">About</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Contact us</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="page" href="/">Home</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">About</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Contact us</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('register') }}">Register</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}
{{--<section class="bgimage d-flex align-items-center mb-3">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-white">--}}
{{--                <h5>Hello, world! Full width Hero-unit header</h5>--}}
{{--                <p>This is a template for a simple marketing or informational <br>--}}
{{--                    website. It includes a large callout called the hero unit and <br>--}}
{{--                    three supporting pieces of content. Use it as a starting point to <br>--}}
{{--                    create something more unique.</p>--}}
{{--                <p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<section class="mb-3">--}}
{{--    <div class="container mt-5">--}}
{{--        <div class="d-flex justify-content-between">--}}
{{--            <div class="flip-card">--}}
{{--                <div class="flip-card-inner">--}}
{{--                    <div class="flip-card-front">--}}
{{--                        <h1>Question</h1>--}}
{{--                        <p>Some content here</p>--}}
{{--                    </div>--}}
{{--                    <div class="flip-card-back">--}}
{{--                        <h1>Answer</h1>--}}
{{--                        <p>Different content here</p>--}}
{{--                    </div>--}}
{{--                    <div class="flip-card-back">--}}
{{--                        <h1>Answer</h1>--}}
{{--                        <p>Different content here</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flip-card">--}}
{{--                <div class="flip-card-inner">--}}
{{--                    <div class="flip-card-front">--}}
{{--                        <h1>Question</h1>--}}
{{--                        <p>Some content here</p>--}}
{{--                    </div>--}}
{{--                    <div class="flip-card-back">--}}
{{--                        <h1>Answer</h1>--}}
{{--                        <p>Different content here</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flip-card">--}}
{{--                <div class="flip-card-inner">--}}
{{--                    <div class="flip-card-front">--}}
{{--                        <h1>Question</h1>--}}
{{--                        <p>Some content here</p>--}}
{{--                    </div>--}}
{{--                    <div class="flip-card-back">--}}
{{--                        <h1>Answer</h1>--}}
{{--                        <p>Different content here</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flip-card">--}}
{{--                <div class="flip-card-inner">--}}
{{--                    <div class="flip-card-front">--}}
{{--                        <h1>Question</h1>--}}
{{--                        <p>Some content here</p>--}}
{{--                    </div>--}}
{{--                    <div class="flip-card-back">--}}
{{--                        <h1>Answer</h1>--}}
{{--                        <p>Different content here</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<!-- Optional JavaScript; choose one of the two! -->--}}

{{--<!-- Option 1: Bootstrap Bundle with Popper -->--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>--}}

{{--<!-- Option 2: Separate Popper and Bootstrap JS -->--}}
{{--<!----}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>--}}
{{---->--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white dark:bg-gray-900">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
{{--    @include('layouts.navigation')--}}

    <!-- Page Heading -->
{{--    @isset($header)--}}
{{--        <header class="bg-white dark:bg-gray-800 shadow">--}}
{{--            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                {{ $header }}--}}
{{--            </div>--}}
{{--        </header>--}}
{{--    @endisset--}}

    <!-- Page Content -->
    <main>
        <!-- component -->
        <div class="w-full">
            <nav class="bg-white shadow-lg">
                <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
                    <div class="flex justify-between items-center">
                        <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                            <a href="#">Flash Card</a>
                        </div>
                        <div class="md:hidden">
                            <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                    <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                                    <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row hidden md:block -mx-2">
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">About</a>
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Contact</a>
                    </div>
                </div>
            </nav>
            <div class="flex bg-white" style="height:600px;">
                <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                    <div>
                        <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Build Your New <span class="text-indigo-600">Idea</span></h2>
                        <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
                        <div class="flex justify-center lg:justify-start mt-6">
                            <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="{{ route('register') }}">Get Started</a>
                            <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                    <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
                        <div class="h-full bg-black opacity-25"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
