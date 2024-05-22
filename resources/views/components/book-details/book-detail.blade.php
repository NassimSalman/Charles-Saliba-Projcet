<div class="book-details margin">

    <div class="image margin">
        <img src=" {{$book_details->book_image}}">
    </div>

    <div class="book-info margin">

        <h1 class="titles">  {{$book_details->book_title}} </h1>
        <div class="subject">

            <span>
                <div class="line-row">
                    <hr class="line">
                    <h2> {{ __('text.subject') }} </h2>
                </div>

                <h4>  {{$book_details->subject}} </h4>
            </span>

            <span>
                <div class="line-row">
                    <hr class="line">
                    <h2> {{ __('text.date') }} </h2>
                </div>
                <h4> {{$book_details->date}} </h4>
            </span>
        </div>

        <p>
        {!! nl2br($book_details -> description) !!}
        </p>

        <div class="buttons">

            <a href="#" class="hovered-button"> {{ __('text.contact_us') }} </a>

            <a href="#" class="hovered-button"> {{ __('text.buy_now') }} </a>

        </div>
    </div>
</div>
