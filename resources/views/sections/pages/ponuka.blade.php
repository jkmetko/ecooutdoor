<section class="page-section" id="section-offer">
    <div class="container">
        <div class="section-title-wrapper">
            <div class="section-title-inner">
                <h1 class="section-title">Naša Ponuka</h1>
                <span class="section-desc">produkty a služby</span>
            </div>
        </div>

        <!-- Accordion (Features) -->
        <div class="panel-group panel-group__features panel-icon__effect2" id="accordion4" role="tablist" aria-multiselectable="true">

            @foreach($ponuka as $index => $sluzba)
                <!-- Panel #{{ $index }} -->
                <div class="panel panel-default">
                    <!-- Panel Heading -->
                    <div class="panel-heading" role="tab" id="heading4-{{ $index }}">
                        <div class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-{{ $index }}" aria-expanded="false" aria-controls="collapse4-{{ $index }}">
                                <div class="row">
                                    <div class="col-md-2 col-sm-1 col-xs-1 panel-title__number">0{{ $index+1 }}</div>
                                    <div class="col-md-3 col-sm-8 col-xs-9 panel-title__heading">
                                        <div class="v-center">
                                            <div class="v-center-inner">
                                                <div class="hgroup-panel">
                                                    <h3>{{ $sluzba->title }}</h3>
                                                    <h5>{{ $sluzba->sub_title }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 hidden-xs">
                                        @if($index %2 === 0)
                                            <i class="circled-icon icon-color2 fa fa-{{ $sluzba->icon }}"></i>
                                        @else
                                            <i class="circled-icon icon-color4 fa fa-{{ $sluzba->icon }}"></i>
                                        @endif
                                    </div>
                                    <div class="col-md-3 col-xs-12 panel-title__desc">
                                        <div class="v-center">
                                            <div class="v-center-inner">
                                                {!! $sluzba->description !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 panel-title__close">
                                        <span class="panel-icon"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Panel Heading / End -->
                    <!-- Panel Content -->
                    <div id="collapse4-{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4-{{ $index }}">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <p>
                                        {!! $sluzba->text !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel Content / End -->
                </div>
                <!-- Panel #1 / End -->
            @endforeach

        </div>
        <!-- Accordion (Features) / End -->

    </div>
</section>