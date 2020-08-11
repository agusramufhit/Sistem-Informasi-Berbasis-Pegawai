@extends('layouts.app')

@section('title')
Maleo
@endsection

@section('content')

<section class="hero mt-10">
    <div class="container">
        <!-- Header -->
        <div class="row">
            <div class="col align-self-center">
                <h1 class="mb-4">
                    Build Your Future Career With Us Today
                </h1>
                <p class="mb-4">
                    Tools, tutorials, design and innovation experts, all in one place! The most intuitive way to
                    imagine your next user experience.
                </p>
                <button class="btn btn-primary my-2 my-sm-0" type="button" 
                onclick="event.preventDefault(); location.href='{{ url('register')}}';">
                Daftar Sekarang
                </button>
            </div>
            <div class="col d-none d-sm-block">
                <img width="550" src="{{ url('frontend/images/hero-icon-3.png')}}" alt="">
            </div>
        </div>

    <main>


        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them
                            <br /> 
                            the best experience</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-6">Sandhika</h3>
                                <p class="testimonial">“ Berkonsentrasilah pada apa yang Anda dan karyawan Anda dapat capai 
                                    bersama di masa depan. “</p>
                            </div>
                            <hr>
                            <p class="trip-to-mt-2">
                                Surabaya
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-6">Shayna</h3>
                                <p class="testimonial">“ Selalu konsisten dan adil. 
                                    Terapkan kriteria kinerja untuk semua karyawan, 
                                    bukan beberapa saja. “</p>
                            </div>
                            <hr>
                            <p class="trip-to-mt-2">
                                Kepulauan riau
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-3.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-6">Cythia</h3>
                                <p class="testimonial">“ Jujurlah mengenai kinerja yang buruk, tapi jangan membabi buta. 
                                    Dokumentasikan. “</p>
                            </div>
                            <hr>
                            <p class="trip-to-mt-2">
                                Bandung
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help</a>
                            <a href="" class="btn btn-get-started px-4 mt-4 mx-1">
                                Get Started</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Footer-->
    <footer class="section-footer mt-5 mb-1 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"></a>Reviews</li>
                                <li><a href="#"></a>Community</li>
                                <li><a href="#"></a>Social Media Kit</li>
                                <li><a href="#"></a>Affiliate</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"></a>Refund</li>
                                <li><a href="#"></a>Security</li>
                                <li><a href="#"></a>Rewards</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"></a>Carrer</li>
                                <li><a href="#"></a>Help Center</li>
                                <li><a href="#"></a>Media</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"></a>Kepulauan Riau</li>
                                <li><a href="#"></a>Indonesia</li>
                                <li><a href="#"></a>0821 XXX XXX</li>
                                <li><a href="#"></a>Support@maleo.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top 
            justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2020 Copyright Maleo • All rights reserved • Made in Indonesia
                </div>
            </div>
        </div>
    </footer>
    </div>
</section>
@endsection