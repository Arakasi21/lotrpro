
@extends('layouts.layout')

@section('title') Homepage
@endsection
@section('main_content')

    <div class="indexback" style="margin-top: -15px">
        <p style="text-align:center;"> <img src="https://freepngimg.com/download/lord_of_the_rings/23778-4-lord-of-the-rings-logo-transparent.png" alt="">
        </p>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom textmap" style="color: gold !important;">AGES</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 map1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">Third Age</h2>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg"  style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 map2">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">Second Age</h2>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg"  style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 map3">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">First Age</h2>
                    </div>
                </div>
            </div>
            <a href="http://lotrproject.com/map/#zoom=3&lat=-1324&lon=1500&layers=BTTTTT" class="btn btn-success bmain" style="width: 100%; font-family: 'Alegreya SC', serif;"> Interactive Map Of Lord Of The Rings</a>

        </div>
    </div>




    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom textmap" style="color: gold !important;">Movies</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 family1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">The Fellowship Of The Ring</h2>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg"  style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 family2">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">Two Towers</h2>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg"  style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 family3">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">The Return Of The King</h2>
                    </div>
                </div>
            </div>
            <a href="https://www.imdb.com/list/ls055713151/" class="btn btn-success bmain" style="width: 100%; font-family: 'Alegreya SC', serif;">Watch Full LOTR Universe</a>

        </div>
    </div>




    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom textmap" style="color: gold !important;">Books</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 book1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">The Fellowship Of The Ring</h2>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg"  style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 book2">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">Two Towers</h2>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-120 overflow-hidden text-white bg-dark rounded-5 shadow-lg"  style="height: 300px">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 book3">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold textmap">The Return Of The King</h2>
                    </div>
                </div>
            </div>
            <a href="{{route('shop.index')}}" class="btn btn-success bmain" style="width: 100%; font-family: 'Alegreya SC', serif;">Buy Books</a>

        </div>
    </div>




    <br>

    <br>


    <div class="container">
    <div class="row leftk">
    <div class="col-sm-6" style="text-align: center" >

        <strong><h1>Our Location</h1></strong>
        <h3>Address:</h3>
        <p style="font-size: 18px;">Nur-Sultan
            <br>
            EXPO Business Center
            block   C.1
            <br>
            Kazakhstan, 010000</p>
        <h3>Info:</h3>
        <p style="font-size: 18px;">+77089380726</p>
        <p style="font-size: 18px;">arakasi0021@gmail.com</p>


    </div>
        <div class="col-sm-6"><div id="map" style="height: 350px; width: 100%; border-radius: 17px" ></div></div>
    </div>

    <div class="et_pb_module et_pb_divider et_pb_divider_0 et_pb_divider_position_center et_pb_space"><div class="et_pb_divider_internal"></div>

    <br>
    </div>
</div>



    <img width="100%" style="margin-bottom: -5px;" src="https://www.pngall.com/wp-content/uploads/12/Lord-Of-The-Rings-PNG-Images-HD.png" alt="">

    <script src="//code.jivo.ru/widget/GuagzEsLvI" async></script>
    <script type="text/javascript">
        var map;

        DG.then(function () {
            map = DG.map('map', {
                center: [51.09081313626624, 71.41768005271813 ],
                zoom: 17
            });

            DG.marker([51.09081313626624, 71.41768005271813]).addTo(map);
        });
    </script>


@endsection
