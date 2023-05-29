@extends('layout.main_layout')
@section('content')
    
<!-- start section journal -->
<div id="journal-blog" class="text-left  paddsections">

    <div class="container">
        <div class="section-title text-center">
            <h2>All Blogs</h2>
        </div>
    </div>

    <div class="container pl-5 pr-5">
        <div class="container">
            <div class="section-title text-center">
                <p style="font-size: 17px;">Welcome to my blog! I'm an intermediate software developer sharing my learning journey in the world of programming. Through my blog posts, I aim to provide valuable insights and resources for fellow developers, covering topics ranging from programming languages to web development and automation. Join me as I explore new technologies, unravel coding intricacies, and tackle real-world challenges, all while documenting my experiences along the way. Let's learn and grow together on this exciting path of software development.</p>
            </div>

        </div>
        
    </div>

    <div class="container">
        <div class="journal-block">
            <div class="row">

                <div class="col-lg-4 col-md-6 ">
                    <div class="journal-info hover">

                        <a href="/blog1">
                        <img src="{{asset('assets/images/blog1.jpeg')}}" class="img-responsive w-100" alt="img"  height="300">

                        <div class="journal-txt">

                            <h5 class="mt-1 mb-2" style="font-size: 17px;">From Novice to Nerd: A Beginner's Roadmap for Breaking into Tech</h5>
                            <div class="row d-flex justify-content-between p-4">
                                <p class="separator">19 May, 2023
                                </p>
                                <p class="separator">8 Min Read
                                </p>
                            </div>

                        </div>
                    </a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="journal-info hover">

                        <a href="/blog2">
                            <img src="{{asset('assets/images/blog2.jpeg')}}" class="img-responsive w-100" alt="img"  height="300">

                        <div class="journal-txt">

                            <h5 class="mt-1 mb-2" style="font-size: 17px;">Front-End Magic: Elevate Your Website with Optimization Strategies</h5>
                            <div class="row d-flex justify-content-between p-4">
                                <p class="separator">21 May, 2023
                                </p>
                                <p class="separator">5 Min Read
                                </p>
                            </div>

                        </div>
                    </a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="journal-info hover">

                        <a href="/blog3">
                            <img src="{{asset('assets/images/blog3.jpeg')}}" class="img-responsive w-100" alt="img"  height="300">

                        <div class="journal-txt">

                            <h5 class="mt-1 mb-2" style="font-size: 17px;">Exploring Different Programming Languages</h5>
                            <div class="row d-flex justify-content-between p-4">
                                <p class="separator">29 May, 2023
                                </p>
                                <p class="separator">6 Min Read
                                </p>
                            </div>

                        </div>
                    </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End section journal -->


@endsection

