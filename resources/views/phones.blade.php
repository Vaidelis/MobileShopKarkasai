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
        });
    </script>


</head>

<body id="home" data-spy="scroll" data-target="navbarResponsive">

<!------ Namu sekcija -->
<div >

    <!--- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="buttnon" data-toggle="collapse" data-target="navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <div id="contentLeft">
                    <div class="rightPosition">
                        <h2>Išskleisti</h2>
                        <div/>
                        <ul>
                            <a class="nav-link" href="/">Pagrindinis puslapis</a>
                            <a class="nav-link" href="mobiles">Telefonai</a>
                            <a class="nav-link" href="">Įsiminti paieškos rezultatai</a>
                            <a class="nav-link" href="/#contact">Kontaktai</a>
                        </ul>
                    </div>
            </ul>
        </div>
    </nav>

    <div>
        <div class="row justify-content-center">
            <div class="col-md-8" style="color:antiquewhite">
                <table class="table table-striped" >
                    <thead>
                    <th>Markė</th>
                    <th>Modelis</th>
                    <th>Ekrano dydis(Inch)</th>
                    <th>Ramai(GB)</th>
                    <th>Talpos dydis(GB)</th>
                    <th>Spalva</th>
                    <th>Kaina(USD)</th>
                    <th>Savininkas</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($posts as $post)
                            <tr >
                                <td>{{ $post->brand }}</td>
                                <td>{{ $post->model }}</td>
                                <td>{{ $post->screensize }}</td>
                                <td>{{ $post->ramsize }}</td>
                                <td>{{ $post->storagesize }}</td>
                                <td>{{ $post->color }}</td>
                                <td>{{ $post->price }}</td>
                                <td>{{ $post->username }}</td>
                                <td>
                                    <a href="{{ route('postshow', $post->id) }}" class="butt1">Peržiūrėti</a>
                                </td>

                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>
