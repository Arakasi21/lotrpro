@extends('layouts.layout')

@section('title')Kingdoms
@endsection
@section('main_content')

    <!-- CHOOSE ALL GOOD AND EVIL WITH DATA FILTER (ISOTOPE JS IS USED) -->
    <div data-aos="fade-up" data-aos-duration="800" style="margin-top: 20px;">
        <div class="menukng">
            <div class="sms">
                <ul>
                    <li class="active" onclick="audio.play();" data-filter="*">All</li>
                    <li class="good" onclick="audio.play();" data-filter=".good">Good</li>
                    <li class="evil" onclick="audio.play();" data-filter=".evil">Evil</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- CARDS OF KINGDOMS -->
    <div data-aos="fade-up" data-aos-duration="800">
        <div class="menukng-item">
            <div class="row row-cols-1 row-cols-md-4" style="margin: 10px;">
                <div class="item good">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/elves.html"><img src="/img/kingdoms/flags/rivendel.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Elves</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item good">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/gondor.html"><img src="/img/kingdoms/flags/gondor.png" id="zoom" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Gondor</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item good">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/hobbiton.html"><img src="/img/kingdoms/flags/hobbiton.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Hobbits</h5>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item evil">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/isengard.html"><img src="/img/kingdoms/flags/isengard.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Isengard</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item good">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/rohan.html"><img src="/img/kingdoms/flags/rohan.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Rohan</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item good">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/dwarfes.html"><img src="/img/kingdoms/flags/dwarfs.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Erebor</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item evil">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/mordor.html"><img src="/img/kingdoms/flags/mordor.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Mordor</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item evil">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="kingdoms/harad.html"><img src="/img/kingdoms/flags/harad.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Haradrim</h5>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
@endsection
