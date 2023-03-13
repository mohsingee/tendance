@extends('layouts.header')
@section('content')
    <main>
        <!-- ====== start about ====== -->
        <section class="about style-6">
            <div class="container">
                <div class="content section-padding">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head mb-40 style-6">
                                    <h2> La puissance du Marketing
                                        <span> <small> Numérique</small> </span>
                                    </h2>
                                </div>
                                <div class="text">
                                    Le marketing numérique est un outil puissant qui peut aider les entreprises de toutes
                                    tailles à accroître leur visibilité en ligne et à générer davantage de ventes. Notre équipe
                                    d'experts est spécialisée dans un large éventail de services de marketing numérique, notamment
                                    l'optimisation des moteurs de recherche, le marketing des médias sociaux, la publicité par paiement
                                    au clic, le marketing par courriel et le marketing de contenu.
                                </div>
                                <div class="btns d-flex align-items-center mt-60">
                                    <a href="#" class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold me-3">
                                        <span>
                                            Contactez-nous
                                            <i class="bi bi-arrow-right ms-1"></i>
                                        </span>
                                    </a>
                                    <!-- <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="vid-btn">
                                        <i class="bi bi-play"></i>
                                        <span>
                                            See Our <br> Showreels
                                        </span>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img">
                                <img src="{{ asset('assets/frontend') }}/img/DigitalMarketing.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/frontend') }}/img/about/about_s6_bubbles.png" alt="" class="bubbles rotate-center">
        </section>
        <!-- ====== end community ====== -->

        <!-- ====== start services ====== -->
        <section class="services section-padding style-6">
            <div class="container">
                <div class="section-head mb-40 text-center style-6">
                    <h2 class="mb-20">
                        Découvrez Notre Top
                        <span> <small>Services</small> </span>
                    </h2>
                    <p>Notre stratégie comprend l'évolution constante et la production de services exceptionnels de marketing numérique pour les entreprises.</p>
                </div>
            </div>
            <div class="content">
                <div class="services-slider position-relative style-6">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/serv_icons/16.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Stratégie de Contenu</h5>
                                        <div class="text">
                                            Rédaction de contenu basé sur AIDA pour attirer les CTA.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/serv_icons/15.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Google/FB Publicité                                       </h5>
                                        <div class="text">
                                            Meilleur moyen d'obtenir des pistes instantanées.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/serv_icons/14.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Marketing par E-mail</h5>
                                        <div class="text">
                                            Développez votre audience pour de futures ventes.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/serv_icons/17.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Médias Sociaux</h5>
                                        <div class="text">
                                            Construisez votre marque de la meilleure façon possible.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/serv_icons/18.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Développement de sites web</h5>
                                        <div class="text">
                                            Les sites web sont votre identité numérique, la porte d'entrée de votre marque.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/serv_icons/19.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Publicités YT</h5>
                                        <div class="text">
                                            L'avenir de la publicité, construire son identité sur YouTube
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/serv_icons/20.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Annonces PPC</h5>
                                        <div class="text">
                                            La meilleure façon d'apparaître lorsque les gens font des recherches
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="javascript:void(0)" class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold me-3">
                        <span>
                            Voir tous nos services
                            <i class="bi bi-arrow-right ms-1"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->

        <!-- ====== start projects ====== -->
        <section class="projects style-6">
            <div class="content section-padding">
                <div class="container">
                    <div class="section-head mb-40 d-flex justify-content-between align-items-center style-6">
                        <h2 class="mb-20">
                            Projets en
                            <span> <small>Vedette</small> </span>
                        </h2>
                        <a href="javascript:void(0)" class="small text-decoration-underline text-uppercase">Voir Notre Portefeuille</a>
                    </div>
                    <div class="slider-3items slider-style-6">
                        <div class="swiper-container pb-70">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="{{ asset('assets/frontend') }}/img/Profile2.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">Second Passport World</a>
                                            </h3>
                                            <small class="color-blue6">
                                                <a href="#">Marketing Numérique</a>
                                            </small>
                                            <div class="text">
                                                Stratégie pour une campagne de marketing complète qui a généré un retour sur investissement de 260 %.
                                            </div>
                                            <div class="tags">
                                                <span>
                                                    <a href="#">Annonces sur Facebook</a>
                                                </span>
                                                <span>
                                                    <a href="#">Génération de prospects</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="{{ asset('assets/frontend') }}/img/Profile3.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">PISTECHS</a>
                                            </h3>
                                            <small class="color-blue6"> <a href="#"></a> <a href="#">Conception du Site</a> </small>
                                            <div class="text">
                                                Construire une image de marque forte et positive grâce à des stratégies de communication et de marketing efficaces.
                                            </div>
                                            <div class="tags">
                                                <span><a href="#">analyse des mots-clés</a></span>
                                                <span><a href="#">rédaction de contenu</a></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="{{ asset('assets/frontend') }}/img/Profile4.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title"><a href="#">Ramcès Campagnie</a></h3>
                                            <small class="color-blue6"><a href="#">Médias Sociaux</a></small>
                                            <div class="text">
                                                Campagnes de médias sociaux réussies pour la génération de prospects et la publicité
                                                pour une entreprise basée en Martinique.
                                            </div>
                                            <div class="tags">
                                                <span><a href="#">Sociaux</a></span>
                                                <span><a href="#">Instagram</a></span>
                                                <span><a href="#">Publicité</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="{{ asset('assets/frontend') }}/img/Portfolio5.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title"><a href="#">Fédération des Associations de France</a></h3>
                                            <small class="color-blue6"><a href="#">Médias  à</a> & <a href="#">Sociaux</a></small>
                                            <div class="text">
                                                Campagnes de marketing numérique pour promouvoir la sensibilisation.
                                            </div>
                                            <div class="tags">
                                                <span><a href="#">Médias sociaux</a></span>
                                                <span><a href="#">Facebook</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ====== pagination ====== -->
                        <div class="swiper-pagination"></div>

                        <!-- ====== arrows ====== -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end projects ====== -->

        <!-- ====== start choose us ====== -->
        <section class="choose-us section-padding style-6">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="{{ asset('assets/frontend') }}/img/whyUs.png" alt="" >
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info">
                            <div class="section-head mb-20 style-6">
                                <h2> Pourquoi choisir ?
                                    <span> <small> Arazit </small> </span>
                                </h2>
                            </div>
                            <div class="text mb-50">
                                Nous sommes passionnés par notre travail. Notre équipe garde une longueur d'avance pour développer des
                                stratégies de marketing attrayantes et axées sur les ventes, afin que votre entreprise se démarque.
                            </div>
                            <ul>
                                <li class="d-flex mb-40">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/ch4.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Génération de prospects</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Les stratégies d'Arazit se concentrent sur la génération de prospects de haute qualité,
                                            augmentant ainsi le potentiel de vente.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex mb-40">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/ch5.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Une approche personnalisée</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Arazit propose une approche personnalisée et sur mesure du marketing numérique,
                                            en adaptant ses stratégies aux besoins et objectifs spécifiques de chaque client.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="{{ asset('assets/frontend') }}/img/icons/ch6.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Technologie Innovante</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Arazit intègre les dernières technologies et des solutions innovantes dans ses stratégies de marketing numérique,
                                            offrant ainsi à ses clients des solutions de pointe.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/frontend') }}/img/about/about_s6_bubbles.png" alt="" class="bubbles rotate-center">
        </section>
        <!-- ====== end choose us ====== -->


        <!-- ====== start testimonials ====== -->
        <div class="testimonials style-6">
            <div class="container">
                <div class="row gx-0 align-items-center justify-content-between">
                    <div class="col-lg-4">
                        <div class="testi-slider style-6 slider-style-6">
                            <div class="icon mb-50">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-card">
                                            <div class="text">
                                                J'ai engagé l'agence arazit pour le marketing numérique et j'ai vu une augmentation significative de ma présence en ligne et de l'engagement dans un court laps de temps. Je recommande vivement leurs services à tous ceux qui cherchent à stimuler leurs efforts de marketing numérique!
                                            </div>
                                            <div class="author mt-30">
                                                <span class="color-000 fw-bold text-capitalize">Dominique</span>
                                                <p class="fs-10px"> Président Bureau régional  <a href="#" class="text-decoration-underline color-blue6"> Martinique </a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="{{ asset('assets/frontend') }}/img/testimonials/users_6.png" alt="" class="">
                            <img src="{{ asset('assets/frontend') }}/img/testimonials/bubbls.png" alt="" class="bubbls rotate-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== end testimonials ====== -->


        <!-- ====== start clients ====== -->
        <section class="clients style-5">
            <div class="container">
                <!-- <div class="section-head mb-70 style-6 text-center">
                    <h2 class="mb-20"> Trusted by thoudsands
                        <span> <small> Businesss </small> </span>
                    </h2>
                    <p class="color-666">More 15,000 Companies & partners trusted & choice Itekseo</p>
                </div> -->
                <!-- <div class="content d-flex flex-wrap">
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/7.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/8.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/9.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/10.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/11.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/12.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/13.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/14.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/15.png" alt="">
                    </a>
                    <a href="#" class="img img-card">
                        <img src="{{ asset('assets/frontend') }}/img/logos/16.png" alt="">
                    </a>
                </div> -->
            </div>
        </section>
        <!-- ====== end clients ====== -->


        <!-- ====== start numbers ====== -->
        <section class="numbers section-padding style-6">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="number-card style-6">
                                <h2 class="me-4">
                                    <span class="counter">18</span> +
                                </h2>
                                <div class="text">
                                    Années <br> d'expérience
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="number-card style-6">
                                <h2 class="me-4">
                                    <span class="counter">100+</span>
                                </h2>
                                <div class="text">
                                    Projets <br> Achevés
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="number-card style-6 border-0">
                                <h2 class="me-4">
                                    <span class="counter">265</span>
                                </h2>
                                <div class="text">
                                    Des stratégies <br> Réussies
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end numbers ====== -->


        <!-- ====== start team ====== -->
        <section class="team section-padding style-6">
            <div class="content">
                <div class="container">
                    <div class="row items align-items-end mb-50">
                        <div class="col-lg-7">
                            <div class="section-head mb-0 style-6">
                                <h2 class="mb-0"> Notre
                                    <span> <small>  Equipe  </small> </span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 text-end">
                            <a class="text-decoration-underline text-uppercase mb-4" href="#">Prendre Contact</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend') }}/img/CEO.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#"><h6>Araz </h6></a>
                                    <small>PDG Fondateur</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend') }}/img/SEOConsultant.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#"><h6>Salman Arshad</h6></a>
                                    <small>Consultant Principal</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend') }}/img/CreativeHead.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#"><h6>Dounia Alouan</h6></a>
                                    <small>Chef Créatif</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-card style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend') }}/img/ContentWriter.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#"><h6>Zineb Kadiri</h6></a>
                                    <small>Rédacteur de Contenu</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end team ====== -->


        <!-- ====== start blog ====== -->
        <section class="blog section-padding style-6">
            <div class="container">
                <div class="section-head mb-70 style-6 text-center">
                    <h2 class="mb-20"> Les Dernières
                        <span> <small> Nouvelles </small> </span>
                    </h2>
                    <p class="color-666">Les dernières nouvelles de nos archives</p>
                </div>
                <div class="content">
                    <div class="blog-card style-6">
                        <a href="javascript:void(0)" class="img img-cover d-block">
                            <img src="{{ asset('assets/frontend') }}/img/blog/9.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#" class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3"> news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posté le </small>
                                <a href="#" class="fs-12px">3 Il y a des jours</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="javascript:void(0)">Meilleur workflow pour le Marketing</a>
                            </h4>
                            <div class="text">
                                Meilleures pratiques pour les sites de commerce électronique en vue d'obtenir des pistes de vente ...
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">Par</small> Araz
                                    </a>
                                </div>
                                <!-- <div class="r-side mt-1">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <a href="#">24</a>
                                    <i class="bi bi-eye ms-4 me-1"></i>
                                    <a href="#">774k</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="blog-card card-center style-6">
                        <a href="javascript:void(0)" class="img img-cover d-block">
                            <img src="{{ asset('assets/frontend') }}/img/blog/10.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#" class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3"> news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i>Posté le  </small>
                                <a href="#" class="fs-12px">12 Il y a des jours</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">6 conseils pour un marketing numérique efficace</a>
                            </h4>
                            <div class="text">
                                Partager les meilleures astuces de stratégies de marketing efficaces pour ...
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">Par</small> Araz
                                    </a>
                                </div>
                                <!-- <div class="r-side mt-1">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <a href="#">24</a>
                                    <i class="bi bi-eye ms-4 me-1"></i>
                                    <a href="#">774k</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="blog-card style-6">
                        <a href="javascript:void(0)" class="img img-cover d-block">
                            <img src="{{ asset('assets/frontend') }}/img/blog/11.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#" class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3"> news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posté le  </small>
                                <a href="#" class="fs-12px">12 Il y a des jours</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="javascript:void(0)">Tendance du marketing avec TikTok</a>
                            </h4>
                            <div class="text">
                                Est-ce le bon moment pour concevoir votre marketing autour de TikTok ? ...
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">Par</small> Salman
                                    </a>
                                </div>
                                <!-- <div class="r-side mt-1">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <a href="#">24</a>
                                    <i class="bi bi-eye ms-4 me-1"></i>
                                    <a href="#">774k</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->


        <!-- ====== start contact ====== -->
        <section class="contact section-padding style-6">
            <div class="container">
                <div class="section-head mb-60 style-6 text-center">
                    <h2 class="mb-20"> Obtenir une Consultation
                        <span> <small> Gratuite </small> </span>
                    </h2>
                    <p class="color-666">Notre équipe évaluera votre entreprise et vous fera part de sa stratégie !</p>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="#" class="form" method="post">
                                <p class="text-center text-danger fs-12px mb-30">Le champ est obligatoirement marqué comme *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="name" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" class="form-control" placeholder="Adresse électronique (facultatif)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="phone" class="form-control" placeholder="Numéro de téléphone * ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="website" class="form-control" placeholder="Votre site web (facultatif)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select class="form-select" name="option">
                                                <option value="How can we help you?" selected>Les services que vous recherchez ?</option>
                                                <option value="option 1">Marketing Numérique</option>
                                                <option value="option 2">SEO</option>
                                                <option value="option 2">Annonces Facebook</option>
                                                <option value="option 2">Annonces Insta</option>
                                                <option value="option 2">Annonces Google</option>
                                                <option value="option 2">Annonces TikTok</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="10" class="form-control" placeholder="How can we help you?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                En soumettant, j'accepte les conditions suivantes <a href="#" class="text-decoration-underline">Termes et Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Send Your Request" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend') }}/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="{{ asset('assets/frontend') }}/img/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>
        <!-- ====== end contact ====== -->
    </main>
    <!--End-Contents-->
@endsection

@extends('layouts.footer')
