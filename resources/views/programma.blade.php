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
    @if($programma->hasImage('cover', 'flexible'))
        <div class="row">
            <img src="{{ $programma->image('cover', 'flexible', ['free']) }}">
            <br>
        </div>
    @endif
@endsection
