<div id="media"></div>
<div class="home-media">

    <div class="media-header margin ">

        <h1 class="titles"> Experience My Creative Vision Through Media </h1>

        <a class="hovered-button" href="/media"> View All </a>

    </div>

    <div class="video-container-1">
        @foreach($home_media_slide1 as $home_media_slide1)
        <a href="#">
            <div class="video-1">
                <img src="{{$home_media_slide1 -> video}}" alt="Picture 1">
                <div class="image-title"> {{$home_media_slide1 -> video_title}}</div>
            </div>
        </a>
        @endforeach
    </div>

    <div class="video-container-2">
        @foreach($home_media_slide2 as $home_media_slide2)
        <a href="#">
            <div class="video-2">
                <img src="{{$home_media_slide2 -> video}}" alt="Picture 1">
                <div class="image-title"> {{$home_media_slide2 -> video_title}} </div>
            </div>
        </a>
        @endforeach
    </div>
</div>