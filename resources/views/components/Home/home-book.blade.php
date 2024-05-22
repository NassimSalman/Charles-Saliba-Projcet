<div id="books"></div>
<div class="home-books margin">

    <div class="books-header margin">

        <h1 class="titles"> {{ __('text.home_book_title') }} </h1>

        <a class="hovered-button" href="/books"> {{ __('text.view_all_books') }} </a>
    </div>

    <div class="f-carousel h-[500px] px-[80px]" id="HomeBooksCarousel">

        @foreach($home_book as $home_book)
        <div class="f-carousel__slide">
            <div class=" margin books-carousel">
                <a href="/book-details/{{$home_book->id}}">
                    <div class="book">
                        <img src="{{$home_book -> book_image}}">

                        <div class="image">
                            <img src="/images/hovered-image-books.png">
                            <span class="text"> {{$home_book -> book_title}} </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script>
    const container = document.getElementById("HomeBooksCarousel");
    const options = {
        infinite: true
    };

    new Carousel(container, options);
</script>