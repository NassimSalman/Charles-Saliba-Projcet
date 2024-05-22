<div class="journey" id="my-journey">

    <div class="journey-header margin">
        <h1 class="titles margin"> {{ __('text.journey_title') }} </h1>
    </div>


    <div class="f-carousel" id="JourneyCarousel">


        @foreach($journey as $index => $journey)
        <div class="f-carousel__slide w-[24%]">
            <div class="history">
                <div class="flex">
                    @if($index % 2 == 0)
                    <!-- Odd index -->
                    <div class="odd flex gap-[30px]">
                        <div class="flex flex-col items-center mt-[-80px]">
                            <div class="vertical-line"></div>
                            <div class="dot">•</div>
                        </div>
                        <div class="text1-3">
                            <div class="flex ml-[-28px]">
                                <div class="big-dot ml-[-20px]"><img src="/images/rounded-image.svg"></div>
                                <div class="history-date ml-[25px]">{{$journey -> date}}</div>
                            </div>
                            <div class="info">
                                <h1>{{$journey -> text}}</h1>
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- Even index -->
                    <div class="even flex gap-[30px]">
                        <div class="flex flex-col items-center">
                            <div class="dot">•</div>
                            <div class="vertical-line"></div>
                        </div>
                        <div class="text2-4">
                            <div class="flex ml-[-28px]">
                                <div class="big-dot ml-[-20px]"><img src="/images/rounded-image.svg"></div>
                                <div class="history-date ml-[25px]">{{$journey -> date}}</div>
                            </div>
                            <div class="info">
                                <h1>{{$journey -> text}}</h1>
                            </div>
                        </div>
                    </div>
                    @endif
                </div> 
            </div>

            <div class="dashed-line"></div>
        </div>  
        @endforeach

    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById("JourneyCarousel");
        const options = {
            infinite: true
        };
        new Carousel(container, options);
    });
</script>