<div id="media"></div>
<div class="home-media">

    <div class="media-header margin ">

        <h1 class="titles"> {{ __('text.home_media_title') }} </h1>

        <a class="hovered-button" href="/media"> {{ __('text.view_all') }} </a>

    </div>

    <div class="video-container-1">
        @foreach($home_media_first_slide as $home_media_first_slide)
        <a href="#">
            <div class="video-1">
                <img src="{{$home_media_first_slide -> video}}" alt="Picture 1">
                <div class="image-title"> {{$home_media_first_slide -> video_title}}</div>
            </div>
        </a>
        @endforeach
    </div>

    <div class="video-container-2">
        @foreach($home_media_second_slide as $home_media_second_slide)
        <a href="#">
            <div class="video-2">
                <img src="{{$home_media_second_slide -> video}}" alt="Picture 1">
                <div class="image-title"> {{$home_media_second_slide -> video_title}} </div>
            </div>
        </a>
        @endforeach
    </div>
</div>