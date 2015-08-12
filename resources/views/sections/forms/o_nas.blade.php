<section class="page-section" id="section-about">
    <div class="container">

        <form action="{{ url('admin/onas/update') }}" method="post" accept-charset="utf-8" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                            <h3>
                                <input type="text" name="title" value="{{ $O_nas->title }}" class="input-form" />
                            </h3>
                        </div>
                        <textarea name="text" class="input-form text-left" style="resize: vertical">{!! $O_nas->text !!}</textarea>
                        <blockquote class="text-right">
                            <textarea name="quote" class="input-form text-right" style="resize: vertical">{{ $O_nas->quote }}</textarea>
                            <cite>ECOOUTDOOR</cite>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <hr class="hr__dashed" />
                    <input type="submit" value="Upraviť - O nás" class="btn btn-success" />
                </div>
            </div>
        </form>

    </div>
</section>