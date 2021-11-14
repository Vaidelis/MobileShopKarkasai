<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telefonų parduotuvė</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fixed.css">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // čia rašomas JQuery kodas
            $('#contentLeft h2').mouseover(function() { // užvedus pelyte
                $(this).css('cursor', 'pointer'); // pakeičiamas pelytės žymeklis
            });

            $('#contentLeft h2').click(function(event) { // paspaudus contentLeft h2 elem.
                $('#contentLeft ul').slideToggle(); // slepiamas/rodomas ul meniu elem.
                switchStatus = $(this).is(':checked');
            });
            $('#home').click(function (event) { // paspaudus contentLeft h2 elem.

                if (this === event.target) {
                    $('#contentLeft ul').slideUp(); // slepiamas/rodomas ul meniu elem.

                }
            });
            $('#home2').click(function (event) { // paspaudus contentLeft h2 elem.

                if (this === event.target) {
                    $('#contentLeft ul').slideUp(); // slepiamas/rodomas ul meniu elem.

                }
            });
        });
    </script>


</head>

<body data-spy="scroll" data-target="navbarResponsive" id ="home">

<!------ Namu sekcija -->

    <!--- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        @auth
        <a class="" id="contentLeft">
            {{ Auth::user()->username }}
        </a>
        @endauth
        <button class="navbar-toggler" type="buttnon" data-toggle="collapse" data-target="navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <div id="contentLeft">
                    <div class="rightPosition">
                        <h2>Išskleisti</h2>
                        <div/>
                        <ul>
                            @guest
                                <a class="nav-link" href="{{ route('login') }}">Prisijungimas</a>
                            @else
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            @endguest
                            <a class="nav-link" href="/">Pagrindinis puslapis</a>
                            <a class="nav-link" href="{{route('posts')}}">Telefonai</a>
                            <a class="nav-link" href="">Įsiminti paieškos rezultatai</a>
                            <a class="nav-link" href="#contact">Kontaktai</a>
                        </ul>
                    </div>
            </ul>
        </ul>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>