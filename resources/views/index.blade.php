@extends('site.layouts.main')

@section('main')
    <!-- ======= Hoogheden Section ======= -->
    <section id="hoogheden-detail" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Hoogheden</h2>
                <p>Dit zijn onze prachtige nieuwe hoogheden voor 2022 - 2023!</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset("img/Alleen.jpg")}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Lassie van Oranje</h3>
{{--                    <p class="fst-italic">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                        magna aliqua.--}}
{{--                    </p>--}}
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Naam:</strong> <span>Dennis Lassouw</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Leeftijd:</strong> <span>42 Jaar</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Geslacht:</strong> <span>Man</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Woonplaats:</strong> <span>Nederwetten</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Gezin:</strong> <span>Laura - Kyara en Dante</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Werk:</strong> <span>Financial Risk Manager - APG</span></li>
                            </ul>
                        </div>
                    </div>
{{--                    <p>--}}
{{--                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.--}}
{{--                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.--}}
{{--                    </p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 pt-4 pt-lg-0 content" data-aos="fade-right">
                    <h3>Della Ross</h3>
{{--                    <p class="fst-italic">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                        magna aliqua.--}}
{{--                    </p>--}}
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Naam:</strong> <span>Maarten van Rossum</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Leeftijd:</strong> <span>53 Jaar</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Geslacht:</strong> <span>Man</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Woonplaats:</strong> <span>Nederwetten</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Gezin:</strong> <span>Myke - Rosa en Suze</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Werk:</strong> <span>Operational Manager - Maison van den Boer</span></li>
                            </ul>
                        </div>
                    </div>

{{--                    <p>--}}
{{--                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.--}}
{{--                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.--}}
{{--                    </p>--}}
                </div>
                <div class="col-lg-2" data-aos="fade-left">
                    <img src="{{asset("img/AvatarDellaRoss.jpg")}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 pt-4 pt-lg-0 content" data-aos="fade-right">
                    <h3>d'n Rooie Duvel</h3>
                    {{--                    <p class="fst-italic">--}}
                    {{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
                    {{--                        magna aliqua.--}}
                    {{--                    </p>--}}
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Naam:</strong> <span>Piet Grauls</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Leeftijd:</strong> <span>41 Jaar</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Geslacht:</strong> <span>Man</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Woonplaats:</strong> <span>Nederwetten</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Gezin:</strong> <span>Janneke - Staf en Vos</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Werk:</strong> <span>Portfolio Manager - RWE</span></li>
                            </ul>
                        </div>
                    </div>
                    {{--                    <p>--}}
                    {{--                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.--}}
                    {{--                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.--}}
                    {{--                    </p>--}}
                </div>
                <div class="col-lg-2" data-aos="fade-left">
                    <img src="{{asset("img/AvatarDnRooieDuvel.jpg")}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End Hoogheden Section -->

    <!-- ======= Programma Section ======= -->
    <section id="programma" class="resume">
        <div class="container">


                <div class="section-title">
                    <h2>Programma</h2>
{{--                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
                </div>
{{--                <h2>--}}
{{--                    Receptieweekend--}}
{{--                </h2>--}}

            <div class="row">
                <div class="col-xl-6" >
                    <h3 class="resume-title">Vrijdag 13 januari 2023</h3>
                    <div class="resume-item pb-0">
                        <h4>Bonte avond</h4>
                        <h5>19.11 - 01.11</h5>
                        <p><em>€15,-</em></p>
                        <p><a href="{{ route('bonte-avond') }}">Klik hier!</a></p>
                        {{--                        <ul>--}}
{{--                            <li>€15,-</li>--}}
{{--                            <li><i>Link naar kopen tickets</i></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
                <div class="col-xl-6" >

                    <h3 class="resume-title">Zaterdag 14 januari 2023</h3>
                    <div class="resume-item">
                        <h4>Receptie!</h4>
                        <h5>19.11 - 01.11</h5>
                    </div>
                  </div>
            </div>

            <br>
            <br>
            <div class="section-title">
                <h2></h2>
                {{--                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
            </div>
{{--            <h2>--}}
{{--                Carnaval--}}
{{--            </h2>--}}
            <div class="row">

                <div class="col-xxl-2" >
                    {{-- Vrijdag --}}
                    <h3 class="resume-title">Vrijdag 17 februari 2023</h3>

                    <div class="resume-item pb-0">
                        <h4>Bonte avond</h4>
                        <h5>19.11 - 00.11</h5>
                        <p><em>€15,-</em></p>
                        <p><a href="{{ route('bonte-avond') }}">Klik hier!</a></p>
{{--                        <ul>--}}
{{--                            <li>€15,-</li>--}}
{{--                            <li><i>Link naar kopen tickets</i></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>

                <div class="col-xxl-2">
                    {{-- Zaterdag --}}
                    <h3 class="resume-title">Zaterdag 18 februari 2023</h3>

                    <div class="resume-item">
                        <h4>Sleutel- uitreiking in Wetterland!</h4>
                        <h5>10.11 - 13.11</h5>
                    </div>

                    <div class="resume-item">
                        <h4>Pulle Vulle</h4>
                        <h5>20.11 - ???</h5>
                    </div>
                </div>

                <div class="col-xxl-2" >
                    {{-- Zondag --}}
                    <h3 class="resume-title">Zondag 19 februari 2023</h3>

                    <div class="resume-item">
                        <h4>Kerkdienst &amp ontbijt</h4>
                        <h5>9.30 - 13.11</h5>
                        <p><a href="https://www.cvdewetters.nl/programmas/ontbijt#ontbijt">Klik hier!</a></p>
                    </div>

                    <div class="resume-item">
                        <h4>Op bezoek bij de Narrekappen</h4>
                        <h5>20.11 - ???</h5>
                    </div>
                </div>

                <div class="col-xxl-2">
                    {{-- Maandag --}}
                    <h3 class="resume-title">Maandag 20 februari 2023</h3>

                    <div class="resume-item">
                        <h4>Optocht &amp Afterparty</h4>
                        <h5>14.11 - ???</h5>
                        <p><a href="{{ route('index-optocht') }}">Klik hier!</a></p>

                    </div>
                </div>

                <div class="col-xxl-2">
                {{-- Dinsdag --}}
                    <h3 class="resume-title">Dinsdag 21 februari 2023</h3>

                    <div class="resume-item">
                        <h4>Kindermiddag</h4>
                        <h5>14.11 - 19.11</h5>
                    </div>

                    <div class="resume-item">
                        <h4>Feestelijke afsluiting</h4>
                        <h5>??? - ???</h5>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Programma Section -->

@endsection
