<!DOCTYPE html>
<html>

<head>
    <title>Car Rental Service</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif
        }

        body,
        html {
            height: 100%;
            line-height: 1.8;
        }

        /* Full height image header */
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg");
            min-height: 100%;
        }

        .button1 {
            background-color: green;
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {
            background-color: red;
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .w3-bar .w3-button {
            padding: 16px;
            position: center;
        }

        .w3-container {
            margin-left: auto;
            margin-right: auto;

        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 22%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .vertical-center1 {
            margin: 0;
            position: absolute;
            top: 15%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .promijeni {
            background-color: gray;
        }

        div.promijeni:hover {
            background-color: rgb(0, 32, 92);
        }
    </style>
</head>

<body>


    <header>
        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card" id="myNavbar">
                <a href="{{ route('load') }}" class="w3-bar-item w3-button w3-wide">Car Rental services</a>
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">
                    <a href="{{ route('load') }}" class="w3-bar-item w3-button">HOME</a>
                    <a href="{{ route('products.index') }}" class="w3-bar-item w3-button">Ponuda Vozila</a>
                    @if (auth()->check())
                        <a class="w3-bar-item w3-button" href="{{ route('reservation') }}">Rezervacije</a>
                    @endif


                    @if (Route::has('login'))
                        @if (auth()->check())
                            @if (Auth::user()->isSuperAdmin())
                                <a class="w3-bar-item w3-button" href="{{ route('korisnici') }}">Korisnici</a>
                            @endif
                        @endif
                    @endif

                    @if (auth()->check())
                        <a href="{{ route('logoutt') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="w3-bar-item w3-button">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endif


                    @if (Route::has('login'))

                        @auth
                            <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
                        @else
                            <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>



                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
                            @endif

                        @endauth
                    @endif

                </div>
                <!-- Hide right-floated links on small screens and replace them with a menu icon -->

                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                    onclick="w3_open()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
            style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close
                ×</a>
            <a href="{{ route('load') }}" class="w3-bar-item w3-button">HOME</a>
            <a href="{{ route('products.index') }}" class="w3-bar-item w3-button">Ponuda Vozila</a>
            @if (auth()->check())
                @if (Auth::user()->isSuperAdmin())
                    <a class="w3-bar-item w3-button" href="{{ route('reservation') }}">Rezervacije</a>
                @endif
            @endif

            @if (Route::has('login'))
                @if (auth()->check())
                    @if (Auth::user()->isSuperAdmin())
                        <a class="w3-bar-item w3-button" href="{{ route('korisnici') }}">Korisnici</a>
                    @endif
                    <a href="{{ route('logoutt') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="w3-bar-item w3-button">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            @else
            @endif

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
                    @else
                        <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>



                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
                        @endif

                    @endauth
            @endif
            </div>




            </div>
            </a>
    </header>



    <main class="container my-5">

        <h1 class="text-center vertical-center1 ">Ponuda vozila</h1>

        <div class="w3-container " style="padding:128px 16px" id="about">
            @if (auth()->check())
                @if (Auth::user()->isAdmin() or Auth::user()->isSuperAdmin())
                    <div class="flex justify-end m-2 p-2 vertical-center; ">
                        <a href="{{ route('products.create') }}" class="w3-button w3-blue vertical-center ">Novo
                            vozilo</a>
                    </div>
                @endif
            @endif

            <div class="row">

                <!--Iz baze pokazivanje Artikala -->
                @foreach ($products as $category)
                    <div class="col-md-4 mb-3">

                        <div class="card"
                            style="background-color: rgba(149, 145, 145, 0.1); box-shadow: 2px 2px rgba(189, 186, 186, 0.1);">
                            <img src="{{ Storage::url($category->image) }}" class="card-img-top img-fluid"
                                style="width: 480px; height: 240px; object-fit: cover;" alt="{{ $category->name }}">
                            <div class="card-body py-1">
                                <h5 class="card-title text-primary">{{ $category->name }}</h5>
                                <p class="card-text text-info">{{ $category->description }}</p>
                                @if (auth()->check())
                                    <a href="/cart" class="text-decoration-none ">
                                @endif
                                <div
                                    class="card-footer background-color-black  rounded text-center text-strong promijeni">
                                    {{ $category->price }}KM/DAN
                                </div>
                                </a>
                                @if (auth()->check())
                                    @if (Auth::user()->isSuperAdmin() or Auth::user()->isAdmin())
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('products.edit', $category->id) }}"><input type='submit'
                                                    class="button1" value="Ažuriraj" /></a>
                                            <a href="izbrisi/{{ $category->id }}"><button
                                                    class="button2 ">Izbriši</button> </a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>





            <!--  @foreach ($products as $category)
<div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
        <p>Pozdrav</p>
        <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
        <div class="px-6 py-4">

            <a href="{{ route('products.index', $category->id) }}">
                <h4
                    class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                    {{ $category->name }}</h4>
            </a>
        </div>
    </div>
@endforeach-->

            <footer>
                <p class="text-center my-5">Copyright © 2022 Car Rental Service Zvonko & Veselko</p>
            </footer>
            <script>
                // Modal Image Gallery
                function onClick(element) {
                    document.getElementById("img01").src = element.src;
                    document.getElementById("modal01").style.display = "block";
                    var captionText = document.getElementById("caption");
                    captionText.innerHTML = element.alt;
                }


                // Toggle between showing and hiding the sidebar when clicking the menu icon
                var mySidebar = document.getElementById("mySidebar");

                function w3_open() {
                    if (mySidebar.style.display === 'block') {
                        mySidebar.style.display = 'none';
                    } else {
                        mySidebar.style.display = 'block';
                    }
                }

                // Close the sidebar with the close button
                function w3_close() {
                    mySidebar.style.display = "none";
                }
            </script>
</body>

</html>
