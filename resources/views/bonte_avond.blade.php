@extends('site.layouts.info')

@section('section-title')
    bonte-avond
@endsection

@section('title')
    Bonte Avond
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-lg-6">
            <img src="{{asset('img/Bonte-Avond-1.png')}}" class="img-fluid">
        </div>
        <br>
        <div class="col-12 col-lg-6">
            <img src="{{asset('img/Bonte-Avond-2.png')}}" class="img-fluid">
        </div>
    </div>
@endsection
