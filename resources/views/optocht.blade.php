@extends('site.layouts.info')

@section('section-title')
    Optocht
@endsection

@section('title')
    Optocht
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-lg-6 order-lg-1">
            <img src="{{asset('img/Optocht.png')}}" class="img-fluid mb-5 mb-lg-0">
        </div>
        <div class="col-12 col-lg-6">
            <p style="font-weight: 400;"><strong>Inschrijven kan nu ook via de vernieuwde website!<br /></strong><strong>Scroll naar beneden voor het inschrijfformulier.</strong></p>
            <p style="font-weight: 400;">Start optocht: 14:11 uur op 20 Februari 2022.</p>
            <p style="font-weight: 400;">&nbsp;</p>
            <p style="font-weight: 400;"><strong><u>Optochtregelement (volgt nog)</u></strong></p>
            <p style="font-weight: 400;">&nbsp;</p>
            <p style="font-weight: 400;">Opgave: het inschrijfformulier onderaan de pagina of op maandag 20 februari tussen 12:00 en 13:00 in de MFA, Koppel 1, Nederwetten.</p>
            <p style="font-weight: 400;">Opstellen: Vanaf 13:30 uur tot uiterlijk 13:45 uur in de hoekstraat, ter hoogte van Restaurant de Kruik, met de Neus richting restaurant Slinders.</p>
            <p style="font-weight: 400;">EHBO-post: bij de MFA</p>
            <p style="font-weight: 400;">Parkeren: Auto&rsquo;s buiten de route parkeren. Luister hiervoor bij twijfel naar de aanwijzingen van de aanwezige verkeersregelaars.</p>
            <p style="font-weight: 400;">&nbsp;</p>
            <p style="font-weight: 400;"><strong><u>Startgeld:</u></strong></p>
            <ul style="font-weight: 400;">
                <li>Individueel (1 of 2 personen) - &euro;10,-</li>
                <li>Loopgroepen klein (3 tot 10 personen) - &euro;25,-</li>
                <li>Loopgroepen groot (10 of meer personen) - &euro;50,-</li>
                <li>Wagens (&gt;18 jaar) - &euro;50,-</li>
                <li>Wagens (&gt;18 jaar) - &euro;100,-</li>
            </ul>
            <p style="font-weight: 400;">&nbsp;</p>
            <p style="font-weight: 400;"><em>Gelieve wagens tijdig op te geven zodat deze gecontroleerd kunnen worden. Om in aanmerking te komen voor startgeld dient de wagen uiteraard een carnavaleske uitstraling te hebben!</em></p>
            <p style="font-weight: 400;">&nbsp;</p>

            <p style="font-weight: 400;"><strong><u>Prijzen:</u></strong></p>
            <ul style="font-weight: 400;">
                <li>Individueel (1 of 2 personen)
                    <ul>
                        <li>1<sup>e</sup>&nbsp;prijs - &euro;25,-</li>
                        <li>2<sup>e</sup>&nbsp;prijs - &euro;10,-</li>
                        <li>3<sup>e</sup>&nbsp;prijs - &euro;5,-</li>
                    </ul>
                </li>
                <li>Loopgroepen klein en groot
                    <ul>
                        <li>1<sup>e</sup>&nbsp;prijs - &euro;50,-</li>
                        <li>2<sup>e</sup>&nbsp;prijs - &euro;25,-</li>
                        <li>3<sup>e</sup>&nbsp;prijs - &euro;10,-</li>
                    </ul>
                </li>
                <li>Wagens
                    <ul>
                        <li>1<sup>e</sup>&nbsp;prijs - &euro;100,-</li>
                        <li>2<sup>e</sup>&nbsp;prijs - &euro;50,-</li>
                        <li>3<sup>e</sup>&nbsp;prijs - &euro;25,-</li>
                    </ul>
                </li>
            </ul>
            <p style="font-weight: 400;"><em>Om voor de prijzen in aanmerking te komen dient men aanwezig te zijn bij de prijsuitreiking!</em></p>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <form method="post" action="{{route('store-optocht')}}" class="mt-5">
            <h3> Inschrijfformulier </h3>
            @method('PUT')
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (isset($success))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ $success }}</li>
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Naam (verplicht):</label>
                <input name="name" id="naam" type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label">Telefoonnummer (verplicht):</label>
                <input name="telephone" id="telephone" type="text" value="{{ old('telephone') }}" class="form-control @error('telephone') is-invalid @enderror" required>
            </div>

            <div class="mb-3">
                <label for="theme" class="form-label">Thema (verplicht):</label>
                <input name="theme" id="theme" type="text" value="{{ old('theme') }}" class="form-control @error('theme') is-invalid @enderror" required>
            </div>

            <div class="mb-3">
                <label for="slogan" class="form-label">Slogan (verplicht):</label>
                <input name="slogan" id="slogan" type="text" value="{{ old('slogan') }}" class="form-control @error('telephone') is-invalid @enderror" required>
            </div>

            <p>Categorie:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="individueel" value="individueel">
                <label class="form-check-label" for="individueel">
                    Individueel
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="loopgroep" value="loopgroep">
                <label class="form-check-label" for="loopgroep">
                    Loopgroep
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="wagen" value="wagen">
                <label class="form-check-label" for="wagen">
                    Wagen
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="muziekgroep" value="muziekgroep">
                <label class="form-check-label" for="muziekgroep">
                    Muziekgroep
                </label>
            </div>

            <br>

            <p>Leeftijdsklasse:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="age" id="adult" value="adult">
                <label class="form-check-label" for="adult">
                    Volwassene
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="age" id="child" value="child">
                <label class="form-check-label" for="child">
                    Kind
                </label>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="agreed" required>
                <label class="form-check-label" for="agreed">
                    Ik heb het regelement gelezen hebben en zal hieraan houden. Niet houden aan het regelement kan leiden tot uitsluiting van de optocht.
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-3 container-fluid">Versturen</button>

        </form>
    </div>


   @endsection
