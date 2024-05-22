<div class="articles margin">
    <div class="articles-container margin">
        <h1 class="titles">{{ __('text.articles') }}</h1>
        <div class="languages">
            <div class="box active" id="english-button">
                <p> {{ __('text.english') }} </p>
            </div>
            <div class="box" id="arabic-button">
                <p> {{ __('text.arabic') }} </p>
            </div>
        </div>

        <div class="all-articles-english margin"> <!--  -->
            @foreach($english_articles as $english_article)
            <div class="article-details">
                <h2>{{ $english_article -> article_name }}</h2>
                <p>{{ $english_article -> article_date }}</p>
                <div class="download">
                    <div>
                        <img src=" {{ __('text.download_icon') }} " alt="Download icon">
                    </div>
                    <a href="#">
                        <div>
                            <p>{{ __('text.download') }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div> <!--  -->

        <div class="all-articles-arabic hidden margin"> <!--  -->
            @foreach($arabic_articles as $arabic_article)
            <div class="article-details">
                <div class="download">
                    <div>
                        <img src=" {{ __('text.download_icon') }}" alt="Download icon">
                    </div>
                    <a href="#">
                        <div>
                            <p> {{ __('text.download') }}</p>
                        </div>
                    </a>
                </div>
                <p> {{ $arabic_article -> article_date }} </p>
                <h2> {{ $arabic_article -> article_name }} </h2>
            </div>
            @endforeach
        </div> <!--  -->

    </div>

    <div class="categories-container">
        @foreach($home_authorship as $home_authorship)

        <div class="categories">
            <div class="title">
                <img src=" {{ $home_authorship->logo }} " alt="Logo">
                <h5> {{ $home_authorship->sub_title }} </h5>
            </div>
            <div class="categories-info">

                @php
                $text = explode(",", $home_authorship->text);
                $text = collect($text)->filter()->values();
                @endphp
                @foreach($text as $text)
                <span>
                    <h2 class="paragraph">{{$text}}</h2>
                    <a href="/authorship/{{$home_authorship->id}}"> <img src="/images/send-arrow.png" alt="Send arrow"></a>

                </span>
                <hr class="line">
                @endforeach

            </div>
        </div>
        @endforeach

    </div>
</div>

<script>
    document.getElementById('english-button').addEventListener('click', function() {
        document.querySelector('.all-articles-english').classList.remove('hidden');
        document.querySelector('.all-articles-arabic').classList.add('hidden');


        document.getElementById('english-button').classList.add('active');
        document.getElementById('arabic-button').classList.remove('active');
    });

    document.getElementById('arabic-button').addEventListener('click', function() {
        document.querySelector('.all-articles-arabic').classList.remove('hidden');
        document.querySelector('.all-articles-english').classList.add('hidden');

        document.getElementById('english-button').classList.remove('active');
        document.getElementById('arabic-button').classList.add('active');
    });
</script>