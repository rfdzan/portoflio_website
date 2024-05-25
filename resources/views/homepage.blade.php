@extends('layout.default')
@section('content')
<section class="profile-container">
    <div class="profile-description-container">
        <p class="profile-description">just<br>some<br>guy</p>
    </div>
    <div class="profile">
        <p class="profile-title">Rifdi<br>Andzar<br>Nazhara</p>
    </div>
</section>
<section class="works-container">
    <div class="works">
        <p class="section-title">What has he built?</p>
        <p class="works-description">quite a lot, actually.</p>
    </div>
    <div class="my-works-container">
        <div class="my-works-1">
            <link rel="stylesheet" href="{{asset('css/works/music.css')}}">
            <p>Music</p>
            <div class="music-works-container">content</div>
        </div>
        <div class="my-works-2">
            <link rel="stylesheet" href="{{asset('css/works/art.css')}}">
            <p>Art</p>
            <div class="art-works-container">content</div>
        </div>
        <div class="my-works-3">
            <link rel="stylesheet" href="{{asset('css/works/programming.css')}}">
            <p>Programming</p>
            <div class="programming-works-container">content</div>
        </div>
    </div>
</section>
<section class="socmed-container">
    <div class="socmed">
        <link rel="stylesheet" href="{{asset('css/socmed.css')}}">
        <p class="section-title">Where to find him?</p>
        <p class="socmed-description">he doesn't use social media much.</p>
    </div>
</section>
@endsection