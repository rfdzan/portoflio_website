@extends('layout.default')
@section('content')
<section class="profile-container">
    @include('profile')
</section>
<section class="works-container">
    <div class="works">
        <p class="section-title">What has he built?</p>
        <p class="works-description">quite a lot, actually.</p>
    </div>
    <div class="my-works-container">
        @include('music_works')
        @include('art_works')
        @include('programming_works')
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