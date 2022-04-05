@extends('layouts.main')

@section('content')
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/backgrounds/Mesjidagung.jpg" class="d-block w-100" alt="mesijagung" style="height: 713px;">
                </span>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/backgrounds/gluhur.jpeg" class="d-block w-100" alt="luhur" style="height: 713px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/backgrounds/Sawarna.png" class="d-block w-100" alt="sawarna" style="height: 713px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- Carousel -->
    <!-- Card 1-->
    <section class="ftco-section ftco-no-pt">
        <div class="container mt-4">
            <div class="row">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Latest Post</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/backgrounds/gluhur.jpg" class="card-img-top" alt="glugur">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Luhur</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor
                                tempor sit amet.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/backgrounds/cikuya.jpeg" class="card-img-top" alt="cikuya">
                        <div class="card-body">
                            <h5 class="card-title">Kebun Teh Cikuya</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor
                                tempor sit amet.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="images/backgrounds/pantai_maps.jpg" class="card-img-top" alt="tanjunglesung">
                        <div class="card-body">
                            <h5 class="card-title">Tanjung Lesung</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor
                                tempor sit amet.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card 1-->
    <!-- Card 2-->
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">ALAM</h2>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <img class=" d-flex justify-content-center h-10" src="images/backgrounds/TanjungLesung.jpg">
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                        </div>
                    </div>
                    <div class="text">
                        <p class="float-right"><a href="#">Lanjutkan</a></p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Card 2-->
    <!-- Card 3-->
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">BUDAYA</h2>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4 me-5">Make Your Tour Memorable and Safe With Us</h2>
                            <p class="mb-4 me-5">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                        </div>
                    </div>
                    <div class="text">
                        <p class="float-right me-5"><a href="#">Lanjutkan</a></p>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <img class="d-flex" src="images/backgrounds/baduybdy.jpg">
                </div>
            </div>
    </section>
    <!-- Card 3-->
    <!-- Card 4-->
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">KULINER</h2>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <img class="d-flex" src="images/backgrounds/satebbk.jpg">
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                        </div>
                    </div>
                    <div class="text">
                        <p class="float-right me-5"><a href="#">Lanjutkan</a></p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Card 4-->
    <!-- Footer-->
    <footer class="ftco-footer bg-bottom pb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading"><a href="#" class="logo">EXPLORE BANTEN</a></h2>
                    <p>EXPLORE BANTEN started in May2022 to introduce different colors for traveling addicts.</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading text-white">Kategori</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block">Alam</a></li>
                        <li><a href="#" class="py-1 d-block">Budaya</a></li>
                        <li><a href="#" class="py-1 d-block">Kuliner</a></li>
                        <li><a href="#" class="py-1 d-block">News</a></li>
                        <li><a href="#" class="py-1 d-block">Maps</a></li>
                        <li><a href="#" class="py-1 d-block">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading text-white">Tag cloud</h2>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link text-white">Peemandangan</a>
                        <a href="#" class="tag-cloud-link text-white">makanan</a>
                        <a href="#" class="tag-cloud-link text-white">adat</a>
                        <a href="#" class="tag-cloud-link text-white">sejuk</a>
                        <a href="#" class="tag-cloud-link text-white">lezat</a>
                        <a href="#" class="tag-cloud-link text-white">aneka</a>
                        <a href="#" class="tag-cloud-link text-white">luas alam</a>
                        <a href="#" class="tag-cloud-link text-white">farhan kozak</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading text-white">Follow us</h2>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer-->
@endsection
