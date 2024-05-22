<div  id="resume"></div>
<div class="expertise margin">
    <div class="profile margin">
        <img src="{{$expertise -> image}}">
    </div>

    <div class="more-experience ">

        <img src="{{ __('text.circle_image') }}">

        <h1 class="titles"> {{$expertise -> title}} </h1>

        <p class="paragraph"> 
            {!! nl2br($expertise -> paragraph) !!}
        </p>

        <a class="hovered-button" href="/resume"> {{ __('text.view_all_resume') }} </a>

    </div>

</div>
