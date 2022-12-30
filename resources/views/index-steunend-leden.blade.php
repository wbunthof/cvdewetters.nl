@extends('site.layouts.main')

@section('main')
    <section id="steunend-lid" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Steun C.V. de Wetters!</h2>
                <h3>Vindt u het belangrijk dat we elk jaar met het hele dorp een feestje kunnen bouwen, maar wilt u zelf geen verplichtingen?</h3>

                <p>Wilt u toch graag iets betekenen voor de carnaval in Nederwetten, zonder zelf lid te worden van de vereniging?</p>

                <p>Met een bescheiden bijdrage van &euro; 11,11 per jaar kunt u steunend lid worden.</p>

                <p>Zo ondersteunt u onze carnavalsvereniging met een financi&euml;le bijdrage, zodat wij als vereniging en de carnaval in &ldquo;Wetterland&rdquo; voor u en uw kinderen kan blijven bestaan.</p>

                <br>

                <form method="post" action="/steunend-lid">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label for="firstname" class="form-label">Voornaam (verplicht):</label>
                        <input name="firstname" id="firstname" type="text" value="{{ old('firstname') }}" class="form-control @error('firstname') is-invalid @enderror">
                    </div>

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Achternaam (verplicht):</label>
                        <input name="lastname" id="lastname" type="text" value="{{ old('lastname') }}" class="form-control @error('lastname') is-invalid @enderror">
                    </div>

                    <div class="mb-3">
                        <label for="emailadres" class="form-label">Emailadres:</label>
                        <input name="emailadres" id="emailadres" type="text" value="{{ old('emailadres') }}" class="form-control @error('emailadres') is-invalid @enderror">
                    </div>

                    <div class="mb-3">
                    <label for="phonenumber" class="form-label">Telefoonnummer:</label>
                    <input name="phonenumber" id="phonenumber" type="text" value="{{ old('phonenumber') }}" class="form-control @error('phonenumber') is-invalid @enderror">
                    </div>

                    <button type="submit" class="btn btn-primary">Volgende</button>

                </form>

            </div>
        </div>
    </section>
@endsection
