<div id="authorship"></div>
<div class="authorship margin">

    <div class="margin">
        <h1 class="titles"> {{ __('text.authorship') }} </h1>
    </div>

    <div class="authorship-categories margin">
        @foreach($home_authorship as $home_authorship)
        <div class="box">
            <div class="top-box">
                <img src="{{ $home_authorship->logo }}" alt="logo 1">
                <h1>{{ $home_authorship->sub_title }}</h1>
            </div>
            
            @php
                $text = explode(",", $home_authorship->text);
                $text = collect($text)->filter()->values();
            @endphp

            <div class="box-content">
                @foreach($text as $text)
                <span>
                    <h2 class="paragraph">{{ $text }}</h2>
                    <a href="/authorship/{{$home_authorship->id}}"><img src="{{ $home_authorship->arrow }}"></a>
                </span>
                <hr class="line">
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
