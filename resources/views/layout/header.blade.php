<!-- start section navbar -->
@if(request()->is('/'))
<nav id="main-nav" class="p0">
    <div class="row w-100">
        <div class="container">

            <div class="logo">
                <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
            </div>

            <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

            <div class="row pl-4 d-flex justify-content-right float-right text-right">
            <ul class="nav-menu list-unstyled">
                <li><a href="/" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
                <li><a href="#journal" class="smoothScroll">Blog</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
            </div>

        </div>
    </div>
</nav>
    
@else

    <nav class="navbar">
        <div class="row w-100">
            <div class="container">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="row pl-4 d-flex justify-content-right float-right text-right">

        
                    <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

                    <ul class="nav-menu text-right list-unstyled float-right">
                        <li><a href="/" class="smoothScroll">Home</a></li>
                        <li><a href="/about" class="smoothScroll">About</a></li>
                        <li><a href="/portfolio" class="smoothScroll">Portfolio</a></li>
                        <li><a href="/blogs-all" class="smoothScroll">Blog</a></li>
                        <li><a href="/#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                </div>
    
                
    
            </div>
        </div>

    </nav>
    

    
@endif

<!-- End section navbar -->