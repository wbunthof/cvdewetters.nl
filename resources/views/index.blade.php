@extends('site.layouts.main')

@section('main')
    <!-- ======= Hoogheden Section ======= -->
    <section id="hoogheden" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Hoogheden</h2>
                <p>Dit zijn onze prachtige nieuwe hoogheden voor het seizoen 2022 - 2023!</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset("img/Alleen.jpg")}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Lassie van Oranje</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Naam:</strong> <span>Dennis Lassou</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Leeftijd:</strong> <span>?</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Geslacht:</strong> <span>Man</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Woonplaats:</strong> <span>Nederwetten</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Gezin:</strong> <span>Vrouw en Twee Kinderen</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Werk:</strong> <span>?</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                    </p>
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-right">
                    <h3>Della Ross & d'n Rooie Duvel</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                    </p>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <img src="{{asset("img/placeholder.png")}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End Hoogheden Section -->

    <!-- ======= Programma Section ======= -->
    <section id="programma" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Programma</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <h2>
                Receptieweekend
            </h2>
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Vrijdag 17 januari 2023</h3>
                <div class="resume-item pb-0">
                    <h4>Bonte avond</h4>
                    <h5>19.11 - 00.11</h5>
                    <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                    <ul>
                        <li>€15,-</li>
                        <li><i>Link naar kopen tickets</i></li>
                    </ul>
                </div>

                <h3 class="resume-title">Zaterdag 18 januari 2023</h3>
                <div class="resume-item">
                    <h4>Sleuteluitreiking in Nederwetten!</h4>
                    <h5>10.11 - 13.11</h5>
                </div>
                <div class="resume-item">
                    <h4>Avondprogramma</h4>
                    <h5>20.11 - ???</h5>
                </div>
            </div>
            <br>
            <br>
            <h2>
                Carnaval
            </h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">

                    {{-- Vrijdag --}}
                    <h3 class="resume-title">Vrijdag 17 januari 2023</h3>

                    <div class="resume-item pb-0">
                        <h4>Bonte avond</h4>
                        <h5>19.11 - 00.11</h5>
                        <p><em>Lorum Ipsum</em></p>
                        <ul>
                            <li>€15,-</li>
                            <li><i>Link naar kopen tickets</i></li>
                        </ul>
                    </div>

                    {{-- Zaterdag --}}
                    <h3 class="resume-title">Zaterdag 18 januari 2023</h3>

                    <div class="resume-item">
                        <h4>Sleuteluitreiking in Nederwetten!</h4>
                        <h5>10.11 - 13.11</h5>
                    </div>

                    <div class="resume-item">
                        <h4>Avondprogramma</h4>
                        <h5>20.11 - ???</h5>
                    </div>

                    {{-- Zondag --}}
                    <h3 class="resume-title">Zondag 19 januari 2023</h3>

                    <div class="resume-item">
                        <h4>Kerkdienst &amp ontbijt</h4>
                        <h5>9.30 - 13.11</h5>
                    </div>

                    <div class="resume-item">
                        <h4>Op bezoek bij de Narrekappen</h4>
                        <h5>20.11 - ???</h5>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    {{-- Maandag --}}
                    <h3 class="resume-title">Maandag 20 januari 2023</h3>

                    <div class="resume-item">
                        <h4>Optocht &amp Afterparty</h4>
                        <h5>14.11 - ???</h5>
                    </div>

                {{-- Dinsdag --}}
                    <h3 class="resume-title">Dinsdag 21 januari 2023</h3>

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
