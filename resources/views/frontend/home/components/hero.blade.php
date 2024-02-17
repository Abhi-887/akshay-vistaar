<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">{{ @$hero_section->main }}</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">{{ @$hero_section->description }}</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                @if($hero_section->image)
                    <img src="{{ asset('storage/' . $hero_section->image) }}" class="img-fluid" alt="Hero Image">
                @else
                    <!-- Default image or placeholder image if no image is selected -->
                    <img src="{{ asset('frontend/assets/img/default-image.png') }}" class="img-fluid" alt="Default Image">
                @endif
            </div>
        </div>
    </div>
</section>
