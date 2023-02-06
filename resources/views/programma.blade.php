@extends('site.layouts.info')

@section('section-title')
    {{ trim($programma->slug) }}
@endsection

@section('title')
{{ trim($programma->title) }}
@endsection

@section('content')
{{--    TODO--}}
{{--    {{ empty($programma->description)}}--}}
{{--    {{ preg_match('/(?<=>)([\w\s]+)(?=<\/)/m', $programma->description) }}--}}
    {!! $programma->description !!}
{{--    {{ $programma->hasImage('cover', 'flexible') }}--}}
    @if(!preg_match('/(?<=>)([\w\s]+)(?=<\/)/m', $programma->description) and $programma->hasImage('cover', 'flexible'))
    {{--        Only a picture      --}}
    <div class="row">
        <div class="col-0 col-xxl-3 col-lg-2"></div>
        <div class="col-12 col-xxl-6 col-lg-8">
            <img src="{{ $programma->image('cover', 'flexible', ['free']) }}" class="img-fluid mb-5 mb-lg-0">
        </div>
        <div class="col-0 col-xxl-3 col-lg-2"></div>
    </div>

    @elseif(preg_match('/(?<=>)([\w\s]+)(?=<\/)/m', $programma->description) and !$programma->hasImage('cover', 'flexible'))
{{--        Only text           --}}
        <div class="">
            {!! $programma->description !!}}
        </div>
    @elseif(!preg_match('/(?<=>)([\w\s]+)(?=<\/)/m', $programma->description) and $programma->hasImage('cover', 'flexible'))
{{--        Text and picture    --}}
        <div class="row">
{{--        Picture--}}
            <div class="col-12 col-lg-6 order-lg-1">
                <img src="{{ $programma->image('cover', 'flexible', ['free']) }}" class="img-fluid mb-5 mb-lg-0">
            </div>
{{--        Text--}}
            <div class="col-12 col-lg-6">
                {{ $programma->description }}
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
