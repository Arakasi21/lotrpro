<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
@include('partials.header')
<div class="content">
    @yield('main_content')
</div>


    <script src="https://kit.fontawesome.com/cd561888ac.js" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- ROTATE ICON (NAVBAR TOGGLER) -->
<script>
    $( ".rotateicon" ).click(function() {
        if (  $( this ).css( "transform" ) == 'none' ){
            $(this).css("transform","rotate(-90deg)");
        } else {
            $(this).css("transform","" );
        }
    });

</script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    @yield('scripts')



        <div class="container-fluid text-center p-3" id="phrase"
             style="word-break: break-all; background-color:#2B2D2F; color:gold; font-family: lotr; ">
            <p class="text-center" style="font-size: 1.5965939329430547vw"> Your source for The Lord of the Rings, The Hobbit, JRR Tolkien, and Middle-earth
            </p>
        </div>

    </body>

    </html>
