<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="icon"><img src="{{ asset('assets/images/loader.svg') }}" alt="" class="m-auto d-block"
                width="60"></div>
        <div class="txt-loading">


            @php

                $words = 'CHECKWEBDIGITALS';

            @endphp

            @foreach (str_split($words) as $word)
                <span data-text-preloader="{{$word}}" class="letters-loading">
                    {{$word}}
                </span>
            @endforeach


        </div>
    </div>
</div>
