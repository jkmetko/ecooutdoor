<section class="page-section" id="section-about">
    <div class="container">

        <div class="section-title-wrapper">
            <div class="section-title-inner">
                <h1 class="section-title section-title__lg">O nás</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-5">
                <!-- Vertical Slider -->
                <div class="owl-carousel owl-theme vertical-slider js_vertical-slider">
                    <div class="item">
                        <figure class="thumbnail">
                            <img src="/images/samples/content-slider-img1.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Vertical Slider / End -->
            </div>
            <div class="col-md-6 col-lg-7">
                <div class="pl-20">
                    <div class="title-with-icon">
                        <h3>{{ $onas->title }}</h3>
                    </div>
                    <p>
                        {!! nl2br($onas->text) !!}
                    </p>
                    <blockquote class="text-right">
                        <p>"{!! nl2br($onas->quote) !!}"</p>
                        <cite>ECOOUTDOOR</cite>
                    </blockquote>
                </div>
            </div>
        </div>

    </div>
</section>