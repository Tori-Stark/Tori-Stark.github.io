@extends('layout.main_layout')
@section('content')
<!-- start section portfolio -->
<div id="portfolio" class="text-center paddsection">

    <div class="container">
        <div class="section-title text-center">
            <h2><a href="/portfolio">My Portfolio</a> </h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="portfolio-list">

                    <ul class="nav list-unstyled" id="portfolio-flters">
                        <li class="filter filter-active" data-filter=".all">all</li>
                        <li class="filter" data-filter=".laravel">Laravel</li>
                        <li class="filter" data-filter=".react">React</li>
                        <li class="filter" data-filter=".android">Android</li>
                        <li class="filter" data-filter=".machine_learning">Machine Learning</li>
                        
                    </ul>

                </div>

                <div class="portfolio-container">

                    <div class="col-lg-3 col-md-6 portfolio-thumbnail all android apps p-2 shadow-sm">
                        <a  href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/makanikapp_welcome.jpg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-thumbnail all android apps shadow-sm p-2">
                        <a  href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/music_player.jpeg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-thumbnail all android apps p-2 shadow-sm">
                        <a  href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/droid_cafe.jpeg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-thumbnail all android apps p-2 shadow-sm">
                        <a  href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/foodizone.jpeg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-thumbnail all react apps p-2 shadow-sm">
                        <a href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/omnidoc.jpg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-thumbnail all laravel apps p-2 shadow-sm">
                        <a href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/bustani.jpg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-thumbnail all machine_learning apps p-2 shadow-sm">
                        <a class="" href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/sign_language.jpeg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-thumbnail all machine_learning apps p-2 shadow-sm">
                        <a class="" href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/english_swahili.jpeg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    




                </div>
            </div>
        </div>
    </div>

</div>
<!-- End section portfolio -->
    
@endsection