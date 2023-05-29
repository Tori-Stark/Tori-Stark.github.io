@extends('layout.main_layout')
@section('content')
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
    
@endsection