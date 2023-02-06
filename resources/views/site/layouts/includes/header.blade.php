<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset('img/Trio.jpg')}}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{route('home')}}">Carnavalsvereniging de Wetters</a></h1>
            <div class="social-links mt-3 text-center">
                <!--          <a href="https://twitter.com/dewetters" class="twitter"><i class="bx bxl-twitter"></i></a>-->
                <a href="https://nl-nl.facebook.com/people/CV-de-Wetters/100008485664827/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/cvdewetters/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!--          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
                <!--          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{route('home')}}#home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="{{route('home')}}#hoogheden-detail" class="nav-link scrollto"><i class="bx bxs-crown"></i> <span>Royals</span></a></li>
                <li><a href="{{route('home')}}#programma" class="nav-link scrollto"><i class="bx bxs-calendar"></i> <span>Programma</span></a></li>
{{--                <li><a href="#bonteavond" class="nav-link scrollto"><i class="bx bx-music"></i> <span>Bonte avond</span></a></li>--}}
{{--                <li><a href="#optocht" class="nav-link scrollto"><i class="bx bx-run"></i> <span>Optocht</span></a></li>--}}
                <div class="row"> {{-- INDENTATION--}}
                    <div class="col-1"></div>
                    <div class="col-10">
                        <li><a href="{{route('bonte-avond')}}#bonte-avond" class="nav-link scrollto"><i class="bx bxs-music"></i>                <span>Bonte avond</span></a></li>
{{--                        <li><a href="https://www.cvdewetters.nl/programmas/receptie#programma" class="nav-link scrollto"><i class="bx bxs-id-card"></i>              <span>Receptie</span></a></li>--}}
                        <li><a href="https://www.cvdewetters.nl/programmas/d-n-aftrap-18-februari-23#d-n-aftrap-18-februari-23" class="nav-link scrollto"><i class="bx bxs-key"></i>                  <span>D'n Aftrap</span></a></li>
                        <li><a href="https://www.cvdewetters.nl/programmas/pulle-vulle-18-februari-23#pulle-vulle-18-februari-23" class="nav-link scrollto"><i class="bx bxs-beer"></i>                 <span>Pulle vulle</span></a></li>
                        <li><a href="https://www.cvdewetters.nl/programmas/koninklijk-ontbijt-19-februari-23#koninklijk-ontbijt-19-februari-23" class="nav-link scrollto"><i class="bx bxs-bowl-hot"></i>             <span>Ontbijt</span></a></li>
                        <li><a href="{{ route('index-optocht') }}#optocht" class="nav-link scrollto"><i class="bx bxs-party"></i>       <span>Optocht</span></a></li>
                        <li><a href="https://www.cvdewetters.nl/programmas/afterparty-20-februari-23#afterparty-20-februari-23" class="nav-link scrollto"><i class="bx bxs-party"></i>       <span>Afterparty</span></a></li>
                        <li><a href="https://www.cvdewetters.nl/programmas/kindermiddag-21-februari-23#kindermiddag-21-februari-23" class="nav-link scrollto"><i class="bx bx-child"></i>                 <span>Kindermiddag</span></a></li>
                        <li><a href="https://www.cvdewetters.nl/programmas/zotte-dinsdagavond#zotte-dinsdagavond" class="nav-link scrollto"><i class="bx bxs-gift"></i>                 <span>Dinsdag Avond</span></a></li>
                    </div>
                </div>

{{--                <li><a href="{{ route('index-steunend-lid') }}#steunend-lid" class="nav-link scrollto"><i class="bx bxs-bus-school"></i> <span>Lijn 111</span></a></li>--}}
{{--                <li><a href="{{ route('index-steunend-lid') }}#steunend-lid" class="nav-link scrollto"><i class="bx bxs-book-open"></i>  <span>Wetterke</span></a></li>--}}
{{--                <li><a href="{{ route('index-steunend-lid') }}#steunend-lid" class="nav-link scrollto"><i class="bx bxs-book-open"></i>  <span>Contact</span></a></li>--}}
{{--                <li><a href="{{ route('index-steunend-lid') }}#steunend-lid" class="nav-link scrollto"><i class="bx bxs-book-open"></i>  <span>Agenda</span></a></li>--}}
                <li><a href="{{ route('index-steunend-lid') }}#steunend-lid" class="nav-link scrollto"><i class="bx bxs-envelope"></i>   <span>Steunend lid</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
