<div class="media margin">
    <h1 class="titles margin"> {{__('text.media')}} </h1>
    <div class="f-carousel" id="myCarousel">
        @php
            $chunks = array_chunk($media, 8);
        @endphp
        @foreach($chunks as $chunk)
        <div class="f-carousel__slide">
            <div class="grid-container margin">
                @foreach($chunk as $media)
                <div class="grid-item">
                    <a href="#">
                        <img src="{{ $media->video }}" alt="Image 1">
                        <div class="image-title">{{ $media->video_title }}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script>
    const container = document.getElementById("myCarousel");
    const options = {
        infinite: true,
    };

    new Carousel(container, options);
</script>