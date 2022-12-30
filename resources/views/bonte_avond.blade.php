@extends('site.layouts.info')

@section('section-title')
    bonte-avond
@endsection

@section('title')
    Bonte Avond
@endsection

@section('content')
    <div class="container-fluid mb-5">
        <p>Elk jaar organiseren we bij CV De Wetters twee bonte avonden om onze carnaval een vliegende start te geven. Twee avonden vol entertainment, met zang- en dansoptredens, tonpraters en natuurlijk optredens van onze eigen Spetters, de Oud Prinsen en de Dames van Raad van 11.</p>
        <p>Beide avonden vinden plaats in onze carnavalsresidentie in de MFA te Nederwetten (De Koppel 7). De deuren gaan open om 19.00 uur en de avond gaat om 19.30 van start. Voor &euro;15,- per kaartje ben jij er ook bij!</p>
        <p>Ben je benieuwd wat we dit jaar organiseren? Hou deze pagina dan goed in de gaten voor de data en programma&rsquo;s van onze bonte avonden. En zodra de kaartverkoop van start gaat, lees je dat hier!</p>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6">
            <img src="{{asset('img/Bonte-Avond-1.png')}}" class="img-fluid mb-5 mb-lg-0">
        </div>
        <br>
        <div class="col-12 col-lg-6 mu-">
            <img src="{{asset('img/Bonte-Avond-2.png')}}" class="img-fluid">
        </div>
    </div>
@endsection
