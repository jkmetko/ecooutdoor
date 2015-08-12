<section class="page-section" id="section-offer">
    <div class="container">
        <div class="section-title-wrapper">
            <div class="section-title-inner">
                <h1 class="section-title">Naša Ponuka</h1>
                <span class="section-desc">produkty a služby</span>
            </div>
        </div>

        <!-- Accordion (Features) -->
        <form action="{{ url('admin/services/update') }}" method="post" accept-charset="utf-8" role="form">
            <div class="panel-group panel-group__features panel-icon__effect2" id="accordion4" role="tablist" aria-multiselectable="true">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @foreach($ponuka as $index => $sluzba)
                    <!-- Panel #{{ $index }} -->
                    <div class="panel panel-default service">
                        <!-- Panel Heading -->
                        <div class="panel-heading" role="tab" id="heading4-{{ $index }}">
                            <div class="panel-title">
                                <div class="service-wrapper">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-1 col-xs-1 panel-title__number">0{{ $index+1 }}</div>
                                        <a href="{{ url('admin/delete_service/'.$sluzba->id) }}" class="fa fa-close" style="position: absolute; top: 0px; left: 20px; cursor: pointer" data-toggle="tooltip" data-placement="right" title="Odstrániť"></a>
                                        <div class="col-md-3 col-sm-8 col-xs-9 panel-title__heading">
                                            <div class="v-center">
                                                <div class="v-center-inner">
                                                    <div class="hgroup-panel">
                                                        <h3><input type="text" name="sluzba[{{ $sluzba->id }}][title]" value="{{ $sluzba->title }}" class="input-form text-right" /></h3>
                                                        <h5><input type="text" name="sluzba[{{ $sluzba->id }}][sub_title]" value="{{ $sluzba->sub_title }}" class="input-form text-right" /></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            @if($index %2 === 0)
                                                <i class="circled-icon icon-color2">
                                                    <button name="sluzba[{{ $sluzba->id }}][icon]" class="btn btn-default iconpicker" style="background: transparent; color: #fff; border: none; font-size: 34px" data-iconset="fontawesome" data-icon="fa-{{ $sluzba->icon }}" data-arrowClass="btn-success" role="iconpicker"></button>
                                                </i>
                                            @else
                                                <i class="circled-icon icon-color4">
                                                    <button name="sluzba[{{ $sluzba->id }}][icon]" class="btn btn-default iconpicker" style="background: transparent; color: #fff; border: none; font-size: 34px" data-iconset="fontawesome" data-icon="fa-{{ $sluzba->icon }}" data-arrowClass="btn-success" role="iconpicker"></button>
                                                </i>
                                            @endif
                                        </div>
                                        <div class="col-md-3 col-xs-12 panel-title__desc">
                                            <div class="v-center">
                                                <div class="v-center-inner">
                                                    <textarea name="sluzba[{{ $sluzba->id }}][description]" class="v-center-inner service-description input-form" style="width: 100%; resize: vertical; min-height: 100px">{!! $sluzba->description !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 panel-title__close">
                                            <a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-{{ $index }}" aria-expanded="false" aria-controls="collapse4-{{ $index }}">
                                                <span class="panel-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Panel Heading / End -->
                        <!-- Panel Content -->
                        <div id="collapse4-{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4-{{ $index }}">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <textarea name="sluzba[{{ $sluzba->id }}][text]" class="summernote" style="min-height: 350px">
                                            {!! $sluzba->text !!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Panel Content / End -->
                    </div>
                    <!-- Panel #1 / End -->
                @endforeach

                <br />
                <br />

                <div id="new_service">
                </div>

                <div class="text-center">
                    <button class="btn btn-success" id="add_service"><i class="fa fa-plus"></i> Pridať ponuku</button>
                    <input type="submit" value="Aktualizovať ponuku" class="btn btn-success fa fa-upload" />
                </div>
            </div>
        </form>
</section>



<!-- Service Template -->
<div style="display: none">
    <div>
        <!-- Panel #{{ $index }} -->
        <div class="panel panel-default nova_sluzba" id="service-template">
            <!-- Panel Heading -->
            <div class="panel-heading" role="tab" id="heading4-{{ $index }}">
                <div class="panel-title">
                    <div class="service-wrapper">
                        <div class="row">
                            <div class="col-md-2 col-sm-1 col-xs-1 panel-title__number">0{{ $index+1 }}</div>
                            <div class="col-md-3 col-sm-8 col-xs-9 panel-title__heading">
                                <div class="v-center">
                                    <div class="v-center-inner">
                                        <div class="hgroup-panel">
                                            <h3><input type="text" name="nova_sluzba[title]" placeholder="Názov" class="input-form text-right" /></h3>
                                            <h5><input type="text" name="nova_sluzba[sub_title]" placeholder="claim" class="input-form text-right" /></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs">
                                @if($index %2 === 0)
                                    <i class="circled-icon icon-color2">
                                        <button name="nova_sluzba[icon]" class="btn btn-default" style="background: transparent; color: #fff; border: none; font-size: 34px" data-iconset="fontawesome" data-icon="fa-wifi" role="iconpicker" class="iconpicker"></button>
                                    </i>
                                @else
                                    <i class="circled-icon icon-color4" data-show-icon="true">
                                        <button name="nova_sluzba[icon]" class="btn btn-default" style="background: transparent; color: #fff; border: none; font-size: 34px" data-iconset="fontawesome" data-icon="fa-wifi" role="iconpicker" class="iconpicker"></button>
                                    </i>
                                @endif
                            </div>
                            <div class="col-md-3 col-xs-12 panel-title__desc">
                                <div class="v-center">
                                    <textarea name="nova_sluzba[description]" class="v-center-inner service-description input-form" style="width: 100%; resize: vertical; min-height: 100px">Stručný popis</textarea>
                                </div>
                            </div>
                            <div class="col-md-2 panel-title__close">
                                <a data-toggle="collapse" data-parent="#accordion4" href="#collapse4-{{ $index }}" aria-expanded="false" aria-controls="collapse4-{{ $index }}" class="panel-open">
                                    <span class="panel-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Panel Heading / End -->
            <!-- Panel Content -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 service-text" style="overflow: auto">
                    <textarea name="nova_sluzba[text]" id="new_summernote" style="min-height: 350px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu ligula interdum, dictum tortor et, sodales urna. Nulla eget mauris vel justo laoreet aliquam. Nunc sapien sem, accumsan quis justo quis, aliquam sollicitudin magna. Integer vitae luctus enim. Praesent tristique ullamcorper tortor. Suspendisse potenti. Vestibulum laoreet, ex ac tempus tempor, nunc nibh commodo ex, et lobortis sem arcu non ante. Nunc tellus mauris, efficitur in convallis sit amet, consequat quis libero. Fusce ut libero dolor. Cras pellentesque orci et diam vestibulum eleifend. Etiam in sapien ac nisl pretium tristique nec ac leo. Nam sodales ut lectus vitae volutpat. Suspendisse sed blandit neque. Proin est dolor, eleifend nec commodo lacinia, euismod ut erat. Phasellus id lectus eu odio congue hendrerit. Vivamus laoreet ultricies augue, ut auctor risus congue at.
                    </textarea>
                </div>
            </div>
            <!-- Panel Content / End -->
        </div>
        <!-- Panel #1 / End -->
    </div>
    <!-- Service Template / End -->
</div>

</div>
<!-- Accordion (Features) / End -->