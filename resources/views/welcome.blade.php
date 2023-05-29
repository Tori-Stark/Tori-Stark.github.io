
@extends('layout.main_layout')
@section('content')
    


<!-- start section header -->
<div id="header" class="home" style=" background-image: url('{{ asset('assets/images/background-new.jpeg') }}')  ;">

    <div class="container">
        <div class="header-content">
            <h1>I'm <span class="typed"></span></h1>
            <p style="font-size: 22px;">Software Developer At My Jobs In Kenya</p>

            <ul class="list-unstyled list-social">
                <li><a href="https://linkedin.com/in/victoria-nyamai-6a67a5221"><i class="ion-social-linkedin"></i></a></li>
                <li><a href="https://github.com/Tori-Stark"><i class="ion-social-github"></i></a></li>
                <li><a href="https://www.instagram.com/thee_toristark/"><i class="ion-social-instagram"></i></a></li>

            </ul>
        </div>
    </div>
</div>
<!-- End section header -->


<!-- start section about us -->
<div id="about" class="paddsection bgff" >
    <div class="container">
        <div class="row justify-content-between">

            <div class="col-lg-4 ">
                <div class="div-img-bg" style="border-color: #702963">
                    <div class="about-img border-4">
                        <img src="{{ asset('assets/images/my_photo.jpeg') }}" class="img-responsive border-1" alt="me">
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-descr">

                    <p class="p-heading">The Perfect Introduction</p>
                    <p class="separator">Hey there! I'm a tech whiz and Lead Software Developer. I've been rocking the coding scene in Nairobi since 2022, and I'm still going strong!</p>
                    <p class="separator">My superpowers include creating designs that will make your brand shine brighter than a disco ball, and I've got a magic touch for making sites mobile-friendly. No more pinching and zooming, my friend! I'm all about using material design principles to make users happy. </p>
                    <p class="separator">I'm not just a coding machine, though. I'm all about personalization and AI, making sure your users get recommendations that make them go, "Wow, this site really gets me!" And guess what? I can shave off those pesky page load times like nobody's business, keeping users engaged and satisfied.</p>
                    <p class="separator">Oh, and did I mention I'm a published author? Yep, I co-authored a paper on the future of language models, because I like to dive deep into the nerd pool every now and then.</p>
                    <p class="separator">So, if you're looking for a tech guru who knows how to have a good time while slaying the coding game, I'm your girl. Let's make some digital magic happen together!</p>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- end section about us -->


<!-- start section services -->
<div id="services" style="background: #f1d1f1;">
    <div class="container p-2">

        <div class="services-carousel owl-theme pt-3">

            <div class="services-block col-12">

                <i class="ion-monitor purple"></i>
                <span>Laravel Web Applications</span>
                <p class="separator">The framework was intended to be used for the development and designing of dynamic web applications for easing and making development smoother. </p>

            </div>

            <div class="services-block col-12 ">

                <i class="ion-ios-lightbulb-outline purple"></i>
                <span>React Web Applications</span>
                <p class="separator">Allows developers to utilize individual components of an application on both client-side and the server-side.</p>

            </div>

            <div class="services-block col-12 ">

                <i class="ion-social-android-outline purple"></i>
                <span>Android Applications</span>
                <p class="separator">Android Mobile applications are very popular as it has a global market of 75% of the users. </p>

            </div>

            <div class="services-block col-12 ">

                <i class="ion-code purple"></i>
                <span>Machine Learning</span>
                <p class="separator">Machine learning is a branch of artificial intelligence (AI) and computer science which focuses on the use of data and algorithms to imitate the way that humans learn, gradually improving its accuracy.</p>

            </div>
            <div class="services-block col-12 ">

                <i class="ion-paintbrush purple"></i>
                <span>UI / UX Design</span>
                <p class="separator">This is the art of taking a client's vision for a site and creating templates to best display it. This design mock ups are then implemented by the front end developer. </p>

            </div>


            

        </div>

    </div>

</div>
<!-- end section services -->


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

                    <div class="col-lg-4 col-md-6 portfolio-thumbnail all react apps p-2 shadow-sm">
                        <a href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/bustani.jpg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-thumbnail all laravel apps p-2 shadow-sm">
                        <a class="" href="https://github.com/Tori-Stark?tab=repositories">
                            <img src="{{ asset('assets/images/portfolio/PNC.jpg') }}" alt="img" width="400" height="300" style="object-fit: contain; object-position: center;">
                        </a>
                    </div>

                    




                </div>
            </div>
        </div>
    </div>

</div>
<!-- End section portfolio -->

<div class="row mt-5 mb-5" style="background: #702963; height: 400px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="row w-100 d-flex justify-content-center">
            <div class="container">
                <div class="row w-100 d-flex justify-content-center text-center">
                    <p class="text-white text-center" style="font-size: 140%;">
                        <b style="font-size: 140px;font-weight: 900;">Just do it!</b> <br><br> <i> ~ Nike</i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- start section journal -->
<div id="journal" class="text-left " style="background-color: #ffffff">

    <div class="container">
        <div class="section-title text-center">
            <h2><a href="/blogs-all">Blogs</a> </h2>
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
            <div class="row d-flex justify-content-center text-center">
                <a href="/blogs-all" class="border p-3 br10 pl-5 pr-5 hover"> View all Blogs</a>
            </div>
        </div>
    </div>

</div>
<!-- End section journal -->


<!-- start sectoion contact -->
<div id="contact" class="paddsection">
    <div class="container p-5 br10" style="background: #f1d1f1">
        <div class="contact-block1 " >
            <div class="row">

                <div class="col-lg-6">
                    <div class="contact-contact">

                        <h2 class="mb-30"><a href="/contact">GET IN TOUCH</a></h2>

                        <ul class="contact-details">

                            <li><i class=" ion-navigate mr-4"></i><span>Nairobi, Kenya</span></li>
                            <li><i class="ion-android-call mr-4"></i><span>+2547 69 584 101</span></li>
                            <li> <i class="ion-ios-email mr-4"></i><span>victorianyamai12@gmail.com</span></li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-6">
                    <form onsubmit="constructEmailBody(event)">
                        <div class="row">


                            <div class="col-lg-6">
                                <div class="form-group contact-block1">
                                    <input type="text" name="name" class="form-control br10" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control br10" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control br10" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control-textarea br10" id="message" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-defeault btn-send br10 " value="Send Email">
                            </div>

                        </div>
                    </form>
                    <script>
                        function constructEmailBody(event) {
                          event.preventDefault(); // Prevent form submission
                      
                          const name = document.getElementById('name').value;
                          const email = document.getElementById('email').value;
                          const subject = document.getElementById('subject').value;
                          const message = document.getElementById('message').value;
                      
                          const mailtoLink = `mailto:victorianyamai12@gmail.com?subject=New Message&body=${encodeURIComponent(message)}`;
                          window.location.href = mailtoLink;
                        }
                      </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start section contact -->



@endsection