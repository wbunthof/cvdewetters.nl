@extends('site.layouts.main')

@section('main')

<section id="@yield('section-title')" class="resume">
    <div class="container">
        <div class="section-title">
            <h2> @yield('title') </h2>
        </div>

        @yield('content')
    </div>

</section>


@endsection
