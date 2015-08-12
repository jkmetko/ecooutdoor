<section class="page-section page-section__dark" id="section-team" style="display: none">
    <div class="container">

        <div class="section-title-wrapper section-title-wrapper__sm">
            <div class="section-title-inner">
                <h1 class="section-title">Náš Tím</h1>
                <span class="section-desc">zoznam kontaktov</span>
            </div>
        </div>

        <!-- Team Slider -->
        <div class="owl-holder">
            <div class="owl-carousel owl-theme team-slider js_team-slider">

                    @foreach($team as $member)
                        <div class="item">
                            <!-- Person -->
                            <div class="person-info">
                                <figure class="person-info-thumb">
                                    <a href="#" class="thumbnail thumbnail-circle person-info-link">
                                        <img src="{{ $member->img }}" alt="" class="person-info-img img-responsive img-circle">
                                        <span class="thumbnail-overlay thumbnail-single-link"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <figcaption>
                                        <h3 class="person-info-title">{{ $member->name }}</h3>
                                        <h5 class="person-info-desc">{{ $member->position }}</h5>
                                    </figcaption>
                                </figure>
                                <div class="person-info-content">
                                    <p>
                                        {{ $member->description }}
                                    </p>
                                    <a href="mailto:{{ $member->email }}" class="btn btn-default btn-block btn-has-icon"><i class="fa fa-envelope"></i> Kontaktovať</a>
                                </div>
                                <footer class="person-info-footer">
                                    <ul class="social-icons">
                                        <li><a href="{{ $member->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="{{ $member->FB }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $member->Twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $member->GooglePlus }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </footer>
                            </div>
                            <!-- Person / End -->
                        </div>
                    @endforeach
            </div>
        </div>
        <!-- Team Slider / End -->

    </div>
</section>