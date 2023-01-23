@extends('site.layouts.info')

@section('section-title')
    bonte-avond
@endsection

@section('title')
{{ $programma->title }}
@endsection

@section('content')
    <div class="container-fluid mb-5">
        {!! $programma->description !!}
    </div>
    @if($programma->hasImage('cover', 'default'))
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="{{ $programma->image('cover', 'flexible', ['free']) }}">
            </div>
            <br>
        </div>
    @endif
@endsection
