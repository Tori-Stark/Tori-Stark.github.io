@extends('layout.main_layout')
@section('content')
<!-- start section header -->
<div id="header" class="home" style="height:300px; background-color:#ffffff  ;">

    <div class="container p-5">
        <div class="section-title text-center p-5">
            <h2>Contact Me</h2>
        </div>
    </div>
</div>
<!-- End section header -->
<div class="container text-center" style="margin: auto;">
        
    <span>Hey there! Thanks for dropping by. Need to get in touch? No worries, I've got you covered! Just fill out the contact form below and send your message my way. Whether you want to share a joke, discuss your favorite TV show, or simply spread some positivity, I'm all ears (or eyes, in this case). So go ahead, let's have some fun and start a conversation. Can't wait to hear what you have to say!</span>

</div>
<!-- start sectoion contact -->
<div id="contact" class="paddsection">
    <div class="container">
        <div class="contact-block1">
            <div class="row">

                <div class="col-lg-6">
                    <div class="contact-contact">

                        <h2 class="mb-30">GET IN TOUCH</h2>

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
