<div class="my-works-1">
    <link rel="stylesheet" href="{{asset('css/works/music.css')}}">
    <p>Music</p>
    <div class="music-works-container">
        @foreach ($musicArray as $music)
        <div class="music-content">
            <a href="{{$music->link}}">
                <p class="link">{{$music->name}}</p>
            </a>
            <p class="desc">{{$music->desc}}</p>
        </div>
        @endforeach
    </div>
</div>