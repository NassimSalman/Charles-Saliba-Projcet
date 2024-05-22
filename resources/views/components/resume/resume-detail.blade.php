<div class="resume-details margin">
    @foreach($resume_first_detail as $resume_first_detail)
    <div class="experience">

        <div class="resume-info margin">
            <img src="{{$resume_first_detail -> experience_logo}}">
            <h1> {{$resume_first_detail -> experience_title}}</h1>
        </div>

        <div class="info-details">
            @php
            $first_detail = explode(",", $resume_first_detail->experience_detail);
            $first_detail = collect($first_detail)->filter()->values();
            @endphp

            @foreach($first_detail as $first_detail)
            <li>
                {{$first_detail}}
            </li>

            @endforeach
        </div>

    </div>

    <hr class="resume-line">
    @endforeach

    <div class="experience">

        <div class="resume-info margin">
            <img src="{{$resume_third_detail -> experience_logo}}">
            <h1> {{$resume_third_detail -> experience_title}} </h1>
        </div>

        <div class="work-details">
            @php
            $third_detail = explode(",", $resume_third_detail->experience_detail);
            $third_detail = collect($third_detail)->filter()->values();
            @endphp

            <ul>
                @foreach($third_detail as $third_detail)
                <li>
                    {{$third_detail}}
                </li>
                @endforeach
            </ul>
        </div>

    </div>

    <hr class="resume-line">

    <div class="experience">

        <div class="resume-info margin">
            <img src="{{$resume_fourth_detail -> experience_logo}}">
            <h1> {{$resume_fourth_detail -> experience_title}} </h1>
        </div>

        <div class="info-details">
            @php
            $fourth_detail = explode(",", $resume_fourth_detail->experience_detail);
            $fourth_detail = collect($fourth_detail)->filter()->values();
            @endphp

            @foreach($fourth_detail as $fourth_detail)
            <li>
                {{$fourth_detail}}
            </li>
            @endforeach
        </div>

    </div>

    <hr class="resume-line">

    <div class="experience">

        <div class="resume-info margin">
            <img src="/images/resume-logo.png">
            <h1> Functional Expertise </h1>
        </div>

        <div class="expertise-info">
            @foreach($resume_fifth_detail as $resume_fifth_detail)

            <div class="list1">
            @php
            $fifth_detail = explode(",", $resume_fifth_detail->experience_detail);
            $fifth_detail = collect($fifth_detail)->filter()->values();
            @endphp

            @foreach($fifth_detail as $fifth_detail)
                <li>
                    {{$fifth_detail}}
                </li>
              @endforeach
            </div>
           @endforeach

        </div>

    </div>

</div>