@extends('site.layouts.info')

@section('section-title')
    bonte-avond
@endsection

@section('title')
{{ $programma->title }}
@endsection

@section('content')
{{--    {{ empty($programma->description)}}--}}
{{--    {{ ($programma->description === "<p><br></p>")}}--}}
{{--    {{ $programma->hasImage('cover', 'flexible') }}--}}
    @if((($programma->description === "<h1><br></h1>") or empty($programma->description)) and $programma->hasImage('cover', 'flexible'))
    {{--        Only a picture      --}}
    <div class="row">
        <div class="col-0 col-xxl-3 col-lg-2"></div>
        <div class="col-12 col-xxl-6 col-lg-8">
            <img src="{{ $programma->image('cover', 'flexible', ['free']) }}" class="img-fluid mb-5 mb-lg-0">
        </div>
        <div class="col-0 col-xxl-3 col-lg-2"></div>
    </div>

    @elseif(!$programma->hasImage('cover', 'flexible'))
{{--        Only text           --}}
        <div class="">

        </div>
    @else
{{--        Text and picture    --}}
        <div class="row">
{{--            Text--}}
            <div class="">

            </div>
{{--            Picture--}}
            <div class="">

            </div>
        </div>
    @endif
{{--    <div class="container-fluid mb-5">--}}
{{--        {!! $programma->description !!}--}}
{{--    </div>--}}
{{--    @if($programma->hasImage('cover', 'flexible'))--}}
{{--        <div class="row" style="height: 80vh">--}}
{{--            <img src="{{ $programma->image('cover', 'flexible', ['free']) }}">--}}
{{--            <br>--}}
{{--        </div>--}}
{{--    @endif--}}
@endsection
