<div class="welcome-to-site margin">

    <div class="image">
        <img src="  {{ $welcome_to_site -> image_1 }}">
        
        <h1 class="title"> {{ $welcome_to_site -> title }} </h1>
        
    </div>

    <div class=" welcome-letter margin">
        <img src="{{ $welcome_to_site -> image_2 }}">
        <div id="welcome"></div>

        <h1 class="titles"> {{ $welcome_to_site -> sub_title }} </h1>

        <p class="paragraph">
            {{ $welcome_to_site -> paragraph }}
        </p>

    </div>
</div>