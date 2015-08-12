<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index', [
            'O_nas' => DB::table('onas')->first(),
            'team' => DB::table('team')->get(),
            'ponuka' => DB::table('ponuka')->get(),
            'icons' => $this->getIcons(),
            'styles' => [

            ],
            'scripts' => [
                'js/add_service.js',
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update_onas(Request $request)
    {
        $update = DB::table('onas')
            ->where('id', 1)
            ->update(array(
                'title' => $request->title,
                'text' => $request->text,
                'quote' => $request->quote
            ));


        if($update === 1){
            return redirect()->route('admin')->withErrors(['Úprava prebehla úspešne.']);
        }else{
            return Redirect::back()->withErrors(['Úprava neprebehlo úspešne. Akciu opakujte znovu.']);
        }
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function delete_member(Request $request, $id)
    {
        $update = DB::table('team')
            ->where('id', $id)
            ->delete();


        if($update === 1){
            return redirect()->route('admin')->withErrors(['Odstránenie prebehlo úspešne.']);
        }else{
            return Redirect::back()->withErrors(['Odstránenie neprebehlo úspešne. Akciu opakujte znovu.']);
        }
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function delete_service(Request $request, $id)
    {
        $update = DB::table('ponuka')
            ->where('id', $id)
            ->delete();


        if($update === 1){
            return redirect()->route('admin')->withErrors(['Odstránenie prebehlo úspešne.']);
        }else{
            return Redirect::back()->withErrors(['Odstránenie neprebehlo úspešne. Akciu opakujte znovu.']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function services_update(Request $request)
    {
        /*var_dump(Input::all());
        return;*/

        $sluzby = $request->sluzba;
        $errors = [];


        foreach($sluzby as $key => $sluzba){
            $id = $key;

            /*delete "fa-" from icon name*/
            $fa = substr($sluzba['icon'], 0, 3);
            if($fa === 'fa-'){
                $icon = substr($sluzba['icon'], 3);
            }else{
                $icon = $sluzba['icon'];
            }

            /*update database if service already exists*/
            $update = DB::table('ponuka')
                ->where('id', $id)
                ->update(array(
                    'title' => $sluzba['title'],
                    'sub_title' => $sluzba['sub_title'],
                    'icon' => $icon,
                    'description' => $sluzba['description'],
                    'text' => $sluzba['text']
                )
            );

            if($update != 1){
                $errors[] = 'Ponuku '. $sluzba['title'] .' sa nepodarilo áktualizovať. Akciu opakujte znovu.';
            }
        }

        if($request->nova_sluzba){
            $nova_sluzba = $request->nova_sluzba;

            /*delete "fa-" from icon name*/
            $fa = substr($nova_sluzba['icon'], 0, 3);
            if($fa === 'fa-'){
                $icon = substr($nova_sluzba['icon'], 3);
            }else{
                $icon = $nova_sluzba['icon'];
            }

            $insert = DB::table('ponuka')->insert(
                array(
                    'title' => $nova_sluzba['title'],
                    'sub_title' => $nova_sluzba['sub_title'],
                    'icon' => $icon,
                    'description' => $nova_sluzba['description'],
                    'text' => $nova_sluzba['text']
                )
            );

            if($insert != 1){
                $errors[] = 'Ponuku '. $sluzba['title'] .' sa nepodarilo pridať. Akciu opakujte znovu.';
            }
        }

        if(empty($errors)){
            return redirect()->route('admin')->withErrors(['Aktualizácia prebehla úspešne.']);;
        }else{
            return Redirect::back()->withErrors($errors);
        }
    }

    public function logout(){
        if(Auth::logout()){
            return redirect()->route('home')->withErrors(['Odhlásenie prebehlo úspešne.']);;
        }else{
            return Redirect::back()->withErrors(['Odhlásenie neprebehlo úspešne. Akciu opakujte znovu.']);
        }
    }

    protected function getIcons(){
        $icon = [];

        $icon[] = 'fa-glass';
        $icon[] = 'fa-music';
        $icon[] = 'fa-search';
        $icon[] = 'fa-envelope-o';
        $icon[] = 'fa-heart';
        $icon[] = 'fa-star';
        $icon[] = 'fa-star-o';
        $icon[] = 'fa-user';
        $icon[] = 'fa-film';
        $icon[] = 'fa-th-large';
        $icon[] = 'fa-th';
        $icon[] = 'fa-th-list';
        $icon[] = 'fa-check';
        $icon[] = 'fa-times';
        $icon[] = 'fa-search-plus';
        $icon[] = 'fa-search-minus';
        $icon[] = 'fa-power-off';
        $icon[] = 'fa-signal';
        $icon[] = 'fa-cog';
        $icon[] = 'fa-trash-o';
        $icon[] = 'fa-home';
        $icon[] = 'fa-file-o';
        $icon[] = 'fa-clock-o';
        $icon[] = 'fa-road';
        $icon[] = 'fa-download';
        $icon[] = 'fa-arrow-circle-o-down';
        $icon[] = 'fa-arrow-circle-o-up';
        $icon[] = 'fa-inbox';
        $icon[] = 'fa-play-circle-o';
        $icon[] = 'fa-repeat';
        $icon[] = 'fa-refresh';
        $icon[] = 'fa-list-alt';
        $icon[] = 'fa-lock';
        $icon[] = 'fa-flag';
        $icon[] = 'fa-headphones';
        $icon[] = 'fa-volume-off';
        $icon[] = 'fa-volume-down';
        $icon[] = 'fa-volume-up';
        $icon[] = 'fa-qrcode';
        $icon[] = 'fa-barcode';
        $icon[] = 'fa-tag';
        $icon[] = 'fa-tags';
        $icon[] = 'fa-book';
        $icon[] = 'fa-bookmark';
        $icon[] = 'fa-print';
        $icon[] = 'fa-camera';
        $icon[] = 'fa-font';
        $icon[] = 'fa-bold';
        $icon[] = 'fa-italic';
        $icon[] = 'fa-text-height';
        $icon[] = 'fa-text-width';
        $icon[] = 'fa-align-left';
        $icon[] = 'fa-align-center';
        $icon[] = 'fa-align-right';
        $icon[] = 'fa-align-justify';
        $icon[] = 'fa-list';
        $icon[] = 'fa-outdent';
        $icon[] = 'fa-indent';
        $icon[] = 'fa-video-camera';
        $icon[] = 'fa-picture-o';
        $icon[] = 'fa-pencil';
        $icon[] = 'fa-map-marker';
        $icon[] = 'fa-adjust';
        $icon[] = 'fa-tint';
        $icon[] = 'fa-pencil-square-o';
        $icon[] = 'fa-share-square-o';
        $icon[] = 'fa-check-square-o';
        $icon[] = 'fa-arrows';
        $icon[] = 'fa-step-backward';
        $icon[] = 'fa-fast-backward';
        $icon[] = 'fa-backward';
        $icon[] = 'fa-play';
        $icon[] = 'fa-pause';
        $icon[] = 'fa-stop';
        $icon[] = 'fa-forward';
        $icon[] = 'fa-fast-forward';
        $icon[] = 'fa-step-forward';
        $icon[] = 'fa-eject';
        $icon[] = 'fa-chevron-left';
        $icon[] = 'fa-chevron-right';
        $icon[] = 'fa-plus-circle';
        $icon[] = 'fa-minus-circle';
        $icon[] = 'fa-times-circle';
        $icon[] = 'fa-check-circle';
        $icon[] = 'fa-question-circle';
        $icon[] = 'fa-info-circle';
        $icon[] = 'fa-crosshairs';
        $icon[] = 'fa-times-circle-o';
        $icon[] = 'fa-check-circle-o';
        $icon[] = 'fa-ban';
        $icon[] = 'fa-arrow-left';
        $icon[] = 'fa-arrow-right';
        $icon[] = 'fa-arrow-up';
        $icon[] = 'fa-arrow-down';
        $icon[] = 'fa-share';
        $icon[] = 'fa-expand';
        $icon[] = 'fa-compress';
        $icon[] = 'fa-plus';
        $icon[] = 'fa-minus';
        $icon[] = 'fa-asterisk';
        $icon[] = 'fa-exclamation-circle';
        $icon[] = 'fa-gift';
        $icon[] = 'fa-leaf';
        $icon[] = 'fa-fire';
        $icon[] = 'fa-eye';
        $icon[] = 'fa-eye-slash';
        $icon[] = 'fa-exclamation-triangle';
        $icon[] = 'fa-plane';
        $icon[] = 'fa-calendar';
        $icon[] = 'fa-random';
        $icon[] = 'fa-comment';
        $icon[] = 'fa-magnet';
        $icon[] = 'fa-chevron-up';
        $icon[] = 'fa-chevron-down';
        $icon[] = 'fa-retweet';
        $icon[] = 'fa-shopping-cart';
        $icon[] = 'fa-folder';
        $icon[] = 'fa-folder-open';
        $icon[] = 'fa-arrows-v';
        $icon[] = 'fa-arrows-h';
        $icon[] = 'fa-bar-chart-o';
        $icon[] = 'fa-twitter-square';
        $icon[] = 'fa-facebook-square';
        $icon[] = 'fa-camera-retro';
        $icon[] = 'fa-key';
        $icon[] = 'fa-cogs';
        $icon[] = 'fa-comments';
        $icon[] = 'fa-thumbs-o-up';
        $icon[] = 'fa-thumbs-o-down';
        $icon[] = 'fa-star-half';
        $icon[] = 'fa-heart-o';
        $icon[] = 'fa-sign-out';
        $icon[] = 'fa-linkedin-square';
        $icon[] = 'fa-thumb-tack';
        $icon[] = 'fa-external-link';
        $icon[] = 'fa-sign-in';
        $icon[] = 'fa-trophy';
        $icon[] = 'fa-github-square';
        $icon[] = 'fa-upload';
        $icon[] = 'fa-lemon-o';
        $icon[] = 'fa-phone';
        $icon[] = 'fa-square-o';
        $icon[] = 'fa-bookmark-o';
        $icon[] = 'fa-phone-square';
        $icon[] = 'fa-twitter';
        $icon[] = 'fa-facebook';
        $icon[] = 'fa-github';
        $icon[] = 'fa-unlock';
        $icon[] = 'fa-credit-card';
        $icon[] = 'fa-rss';
        $icon[] = 'fa-hdd-o';
        $icon[] = 'fa-bullhorn';
        $icon[] = 'fa-bell';
        $icon[] = 'fa-certificate';
        $icon[] = 'fa-hand-o-right';
        $icon[] = 'fa-hand-o-left';
        $icon[] = 'fa-hand-o-up';
        $icon[] = 'fa-hand-o-down';
        $icon[] = 'fa-arrow-circle-left';
        $icon[] = 'fa-arrow-circle-right';
        $icon[] = 'fa-arrow-circle-up';
        $icon[] = 'fa-arrow-circle-down';
        $icon[] = 'fa-globe';
        $icon[] = 'fa-wrench';
        $icon[] = 'fa-tasks';
        $icon[] = 'fa-filter';
        $icon[] = 'fa-briefcase';
        $icon[] = 'fa-arrows-alt';
        $icon[] = 'fa-users';
        $icon[] = 'fa-link';
        $icon[] = 'fa-cloud';
        $icon[] = 'fa-flask';
        $icon[] = 'fa-scissors';
        $icon[] = 'fa-files-o';
        $icon[] = 'fa-paperclip';
        $icon[] = 'fa-floppy-o';
        $icon[] = 'fa-square';
        $icon[] = 'fa-bars';
        $icon[] = 'fa-list-ul';
        $icon[] = 'fa-list-ol';
        $icon[] = 'fa-strikethrough';
        $icon[] = 'fa-underline';
        $icon[] = 'fa-table';
        $icon[] = 'fa-magic';
        $icon[] = 'fa-truck';
        $icon[] = 'fa-pinterest';
        $icon[] = 'fa-pinterest-square';
        $icon[] = 'fa-google-plus-square';
        $icon[] = 'fa-google-plus';
        $icon[] = 'fa-money';
        $icon[] = 'fa-caret-down';
        $icon[] = 'fa-caret-up';
        $icon[] = 'fa-caret-left';
        $icon[] = 'fa-caret-right';
        $icon[] = 'fa-columns';
        $icon[] = 'fa-sort';
        $icon[] = 'fa-sort-asc';
        $icon[] = 'fa-sort-desc';
        $icon[] = 'fa-envelope';
        $icon[] = 'fa-linkedin';
        $icon[] = 'fa-undo';
        $icon[] = 'fa-gavel';
        $icon[] = 'fa-tachometer';
        $icon[] = 'fa-comment-o';
        $icon[] = 'fa-comments-o';
        $icon[] = 'fa-bolt';
        $icon[] = 'fa-sitemap';
        $icon[] = 'fa-umbrella';
        $icon[] = 'fa-clipboard';
        $icon[] = 'fa-lightbulb-o';
        $icon[] = 'fa-exchange';
        $icon[] = 'fa-cloud-download';
        $icon[] = 'fa-cloud-upload';
        $icon[] = 'fa-user-md';
        $icon[] = 'fa-stethoscope';
        $icon[] = 'fa-suitcase';
        $icon[] = 'fa-bell-o';
        $icon[] = 'fa-coffee';
        $icon[] = 'fa-cutlery';
        $icon[] = 'fa-file-text-o';
        $icon[] = 'fa-building-o';
        $icon[] = 'fa-hospital-o';
        $icon[] = 'fa-ambulance';
        $icon[] = 'fa-medkit';
        $icon[] = 'fa-fighter-jet';
        $icon[] = 'fa-beer';
        $icon[] = 'fa-h-square';
        $icon[] = 'fa-plus-square';
        $icon[] = 'fa-angle-double-left';
        $icon[] = 'fa-angle-double-right';
        $icon[] = 'fa-angle-double-up';
        $icon[] = 'fa-angle-double-down';
        $icon[] = 'fa-angle-left';
        $icon[] = 'fa-angle-right';
        $icon[] = 'fa-angle-up';
        $icon[] = 'fa-angle-down';
        $icon[] = 'fa-desktop';
        $icon[] = 'fa-laptop';
        $icon[] = 'fa-tablet';
        $icon[] = 'fa-mobile';
        $icon[] = 'fa-circle-o';
        $icon[] = 'fa-quote-left';
        $icon[] = 'fa-quote-right';
        $icon[] = 'fa-spinner';
        $icon[] = 'fa-circle';
        $icon[] = 'fa-reply';
        $icon[] = 'fa-github-alt';
        $icon[] = 'fa-folder-o';
        $icon[] = 'fa-folder-open-o';
        $icon[] = 'fa-smile-o';
        $icon[] = 'fa-frown-o';
        $icon[] = 'fa-meh-o';
        $icon[] = 'fa-gamepad';
        $icon[] = 'fa-keyboard-o';
        $icon[] = 'fa-flag-o';
        $icon[] = 'fa-flag-checkered';
        $icon[] = 'fa-terminal';
        $icon[] = 'fa-code';
        $icon[] = 'fa-reply-all';
        $icon[] = 'fa-mail-reply-all';
        $icon[] = 'fa-star-half-o';
        $icon[] = 'fa-location-arrow';
        $icon[] = 'fa-crop';
        $icon[] = 'fa-code-fork';
        $icon[] = 'fa-chain-broken';
        $icon[] = 'fa-question';
        $icon[] = 'fa-info';
        $icon[] = 'fa-exclamation';
        $icon[] = 'fa-superscript';
        $icon[] = 'fa-subscript';
        $icon[] = 'fa-eraser';
        $icon[] = 'fa-puzzle-piece';
        $icon[] = 'fa-microphone';
        $icon[] = 'fa-microphone-slash';
        $icon[] = 'fa-shield';
        $icon[] = 'fa-calendar-o';
        $icon[] = 'fa-fire-extinguisher';
        $icon[] = 'fa-rocket';
        $icon[] = 'fa-maxcdn';
        $icon[] = 'fa-chevron-circle-left';
        $icon[] = 'fa-chevron-circle-right';
        $icon[] = 'fa-chevron-circle-up';
        $icon[] = 'fa-chevron-circle-down';
        $icon[] = 'fa-html5';
        $icon[] = 'fa-css3';
        $icon[] = 'fa-anchor';
        $icon[] = 'fa-unlock-alt';
        $icon[] = 'fa-bullseye';
        $icon[] = 'fa-ellipsis-h';
        $icon[] = 'fa-ellipsis-v';
        $icon[] = 'fa-rss-square';
        $icon[] = 'fa-play-circle';
        $icon[] = 'fa-ticket';
        $icon[] = 'fa-minus-square';
        $icon[] = 'fa-minus-square-o';
        $icon[] = 'fa-level-up';
        $icon[] = 'fa-level-down';
        $icon[] = 'fa-check-square';
        $icon[] = 'fa-pencil-square';
        $icon[] = 'fa-external-link-square';
        $icon[] = 'fa-share-square';
        $icon[] = 'fa-compass';
        $icon[] = 'fa-caret-square-o-down';
        $icon[] = 'fa-caret-square-o-up';
        $icon[] = 'fa-caret-square-o-right';
        $icon[] = 'fa-eur';
        $icon[] = 'fa-gbp';
        $icon[] = 'fa-usd';
        $icon[] = 'fa-inr';
        $icon[] = 'fa-jpy';
        $icon[] = 'fa-rub';
        $icon[] = 'fa-krw';
        $icon[] = 'fa-btc';
        $icon[] = 'fa-file';
        $icon[] = 'fa-file-text';
        $icon[] = 'fa-sort-alpha-asc';
        $icon[] = 'fa-sort-alpha-desc';
        $icon[] = 'fa-sort-amount-asc';
        $icon[] = 'fa-sort-amount-desc';
        $icon[] = 'fa-sort-numeric-asc';
        $icon[] = 'fa-sort-numeric-desc';
        $icon[] = 'fa-thumbs-up';
        $icon[] = 'fa-thumbs-down';
        $icon[] = 'fa-youtube-square';
        $icon[] = 'fa-youtube';
        $icon[] = 'fa-xing';
        $icon[] = 'fa-xing-square';
        $icon[] = 'fa-youtube-play';
        $icon[] = 'fa-dropbox';
        $icon[] = 'fa-stack-overflow';
        $icon[] = 'fa-instagram';
        $icon[] = 'fa-flickr';
        $icon[] = 'fa-adn';
        $icon[] = 'fa-bitbucket';
        $icon[] = 'fa-bitbucket-square';
        $icon[] = 'fa-tumblr';
        $icon[] = 'fa-tumblr-square';
        $icon[] = 'fa-long-arrow-down';
        $icon[] = 'fa-long-arrow-up';
        $icon[] = 'fa-long-arrow-left';
        $icon[] = 'fa-long-arrow-right';
        $icon[] = 'fa-apple';
        $icon[] = 'fa-windows';
        $icon[] = 'fa-android';
        $icon[] = 'fa-linux';
        $icon[] = 'fa-dribbble';
        $icon[] = 'fa-skype';
        $icon[] = 'fa-foursquare';
        $icon[] = 'fa-trello';
        $icon[] = 'fa-female';
        $icon[] = 'fa-male';
        $icon[] = 'fa-gittip';
        $icon[] = 'fa-sun-o';
        $icon[] = 'fa-moon-o';
        $icon[] = 'fa-archive';
        $icon[] = 'fa-bug';
        $icon[] = 'fa-vk';
        $icon[] = 'fa-weibo';
        $icon[] = 'fa-renren';
        $icon[] = 'fa-pagelines';
        $icon[] = 'fa-stack-exchange';
        $icon[] = 'fa-arrow-circle-o-right';
        $icon[] = 'fa-arrow-circle-o-left';
        $icon[] = 'fa-caret-square-o-left';
        $icon[] = 'fa-dot-circle-o';
        $icon[] = 'fa-wheelchair';
        $icon[] = 'fa-vimeo-square';
        $icon[] = 'fa-try';
        $icon[] = 'fa-plus-square-o';

        return $icon;
    }
}
