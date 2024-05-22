
<div class="leadership">

    <img class="leadership-image" src="{{ $authorship -> video }}">

    <div class="title">

        <h1 class="titles"> {{ $authorship -> title }} </h1>

        <div class="category">

            <div> <img src="{{ $authorship -> logo }}"> </div>

            <div>
                <h2> {{ __('text.category') }} </h2>
                <h3> {{ $authorship -> category_name }} </h3>
            </div>
        </div>
    </div>
</div>
