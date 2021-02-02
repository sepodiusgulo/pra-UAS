@extends('sepodius')
@section('content')
<main>
    <section class="video mb-3">
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/D8YWsVVNXAs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <section class="list">
        <div class="container">
            <div class="list-judul text-center">
                <p class="mb-0">Take advantage of hotel and resort offers and promotions online!</p>
                <h2>SPECIAL OFFERS</h2>
                <hr class="mx-auto">
            </div>
            <div class="list-isi" class="carousel slide" data-ride="carousel">
                <div class="owl-carousel owl-theme carousel-inner">
                    @foreach ($list as $item)
                    <a class="item carousel-item active">
                        <div class="card">
                            <img class="w-100" src="{{Storage::url($item->image)}}" alt="">
                            <div class="card-body">
                                <h5>{{$item->judul}}</h5>
                                <p>{{$item->text}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach

                        {{-- <a class="item carousel-item active">
                        <div class="card">
                            <img class="w-100" src="http://sariater-hotel.com/wp-content/uploads/2020/08/New-Concept-slider.jpg" alt="">
                            <div class="card-body">
                                <h5>New Concept</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ut.</p>
                            </div>
                        </div>
                    </a>
                    <a class="item carousel-item active">
                        <div class="card">
                            <img class="w-100" src="http://sariater-hotel.com/wp-content/uploads/2018/04/sport-Leisure-package-768x509.jpg" alt="">
                            <div class="card-body">
                                <h5>Sport & Leisur</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ut.</p>
                            </div>
                        </div>
                    </a>
                    <a class="item carousel-item active">
                        <div class="card">
                            <img class="w-100" src="http://sariater-hotel.com/wp-content/uploads/2018/03/sari-ater-botram.jpg" alt="">
                            <div class="card-body">
                                <h5>Paket Botram Wareg</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ut.</p>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
