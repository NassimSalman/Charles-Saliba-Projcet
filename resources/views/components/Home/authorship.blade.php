<div id="authorship"></div>
<div class="authorship margin">

    <div class="margin">
        <h1 class="titles">  </h1>
    </div>

    <div class="authorship-categories margin">
        @foreach($authorship as $authorship)
        <div class="box">
            <div class="top-box">
                <img src="{{ $authorship->logo }}" alt="logo 1">
                <h1>{{ $authorship->sub_title }}</h1>
            </div>
            
            @php
                $text = explode(",", $authorship->text);
                $text = collect($text)->filter()->values();
            @endphp

            <div class="box-content">
                @foreach($text as $text)
                <span>
                    <h2 class="paragraph">{{ $text }}</h2>
                    <a href="/authorship"><img src="{{ $authorship->arrow }}"></a>
                </span>
                <hr class="line">
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
