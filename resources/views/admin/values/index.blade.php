<!-- Display existing values -->
<section id="values" class="values">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Our Values</h2>
        </header>

        <div class="row">
            @foreach ($values as $value)
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="box">
                        <img src="{{ asset($value->icon) }}" class="img-fluid" alt="">
                        <h3>{{ $value->title }}</h3>
                        <p>{{ $value->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
