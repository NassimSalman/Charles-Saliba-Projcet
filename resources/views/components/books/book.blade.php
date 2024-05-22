<div class="books">
    <div class="books-header margin">
        <h1 class="titles margin"> {{__('text.books')}} </h1>
    </div>
    <div class="f-carousel" id="BooksCarousel">
        @php
            $booksArray = $books->toArray();
            $chunks = array_chunk($booksArray, 9);
        @endphp

        @foreach($chunks as $chunk)
            <div class="f-carousel__slide">
                <div class="books-grid">
                    @foreach($chunk as $book)
                        <a href="/book-details/{{$book['id']}}">
                            <div class="book">
                                <img src="{{$book['book_image']}}">
                                <div class="image">
                                    <img src="{{$book['hovered_image']}}">
                                    <span class="text"> {{$book['book_title']}} </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script>
    const container = document.getElementById("BooksCarousel");
    const options = {
        infinite: true
    };

    new Carousel(container, options);
</script>