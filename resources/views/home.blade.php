<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>développeur web en freelance  </title>
        <meta name="description" content="vous cherchez un développeur web en freelance ?mon équipe talentieux vous offrir une expreience de plus de 10 ans dans le création des site web et application web et mobile ">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        {{-- <x-cdn/> --}}
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/elastic_grid.min.css')}}" />
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
            <link rel="stylesheet" href="{{asset('css/media.css')}}">
            <link rel="stylesheet" href="{{asset('dist/css/simple-lightbox.min.css')}}">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="{{asset('js/modernizr.custom.js')}}"></script>
            <script src="{{asset('js/classie.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/jquery.elastislide.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/jquery.hoverdir.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/elastic_grid.js')}}"></script>
            <script src="{{asset('dist/js/simple-lightbox.min.js')}}"></script>
            <script src="{{asset('dist/js/simple-lightbox.legacy.min.js')}}"></script>
            <script src="{{asset('dist/js/simple-lightbox.jquery.min.js')}}"></script>
       
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #error_email, #error_mail{
                color:red;
            }
            /*  */
        </style>
    </head>
    <body class="antialiased">
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
   
  
    <script type="text/javascript">
        $(function(){
            $("#elastic_grid_demo").elastic_grid({
                'showAllText' : 'All',
                'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                'hoverDirection': true,
                'hoverDelay': 0,
                'hoverInverse': false,
                'expandingSpeed': 500,
                'expandingHeight': 500,
                'items' :
                [
                    {
                        'title'         : 'global fairs and events',
                        'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                        'thumbnail'     : ['images/small/global-fairs_large.webp', 'images/small/global_fairs_small_1.webp', 'images/small/global_fairs_small_2.webp', 'images/small/7.jpg'],
                        'large'         : ['images/large/global-fairs_large.webp', 'images/large/global_fairs_large_1.webp', 'images/large/global_fairs_large_2.webp', 'images/large/7.jpg'],
                        'img_title'     : ['jquery elastic grid 6 ', 'jquery elastic grid 7 ', 'jquery elastic grid 8', 'jquery elastic grid 9', 'jquery elastic grid 9'],
                        'button_list'   :
                        [
                            { 'title':'Visiter le site web', 'url' : 'https://global-fairs-events.com/', 'new_window' : true },
                            // { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
                        ],
                        'tags'          : ['Wordpress']
                    },
                    {
                        'title'         : 'heraz group',
                        'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                        'thumbnail'     : ['images/small/heraz-group_small_1.webp', 'images/small/heraz_group_small_2.webp', 'images/small/heraz-group_small_3.webp', 'images/small/20.jpg'],
                        'large'         : ['images/large/heraz-group_large_1.webp', 'images/large/heraz_group_large_2.webp', 'images/large/heraz-group_large_3.webp', 'images/large/20.jpg'],
                        'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                        'button_list'   :
                        [
                            { 'title':'Visiter le site web', 'url' : 'https://www.herazgroup.com/#', 'new_window' : true },
                            // { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
                        ],
                        'tags'          : ['Wordpress']
                    },
                    {
                        'title'         : 'maroc-emplois.net',
                        'description'   : 'application web pour les recruteurs et les annonces d"emplois.',
                        'thumbnail'     : ['images/small/maroc-emplois_small_1.webp','images/small/maroc-emplois_small_2.webp', 'images/small/maroc-emplois_small_3.webp', 'images/small/10.jpg'],
                        'large'         : ['images/large/maroc-emplois_large_1.webp','images/large/maroc-emplois_large_2.webp', 'images/large/maroc-emplois_large_3.webp', 'images/large/10.jpg'],
                        'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                        'button_list'   :
                        [
                            { 'title':'Visiter le site web', 'url' : 'https://maroc-emplois.net/', 'new_window' : true },
                            // { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
                        ],
                        'tags'          : ['Application web ']
                    },
                   
                    {
                        'title'         : 'alloschoolmath.com',
                        'description'   : 'application web pour les cours en lignes des mathématiques',
                        'thumbnail'     : ['images/small/allo_school_math_small_1.webp','images/small/allo_school_math_small_2.webp', 'images/small/alloschool_math_small_3.webp', 'images/small/alloschool_math_small_3'],
                        'large'         : ['images/large/allo_school_math_large_1.webp','images/large/allo_school_math_large_2.webp', 'images/large/alloschool_math_large_3.webp', 'images/large/10.jpg'],
                        'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                        'button_list'   :
                        [
                            { 'title':'Visiter le site web', 'url' : 'https://alloschoolmath.com/', 'new_window' : true },
                            // { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
                        ],
                        'tags'          : ['Application web']
                    },
                   
                    {
                        'title'         : 'centre de kinésitherapie',
                        'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                        'thumbnail'     : ['images/small/centre_kine_small_1.webp','images/small/cantre_kine_small_2.webp', 'images/small/centre_kine_small_3.webp', 'images/small/10.jpg'],
                        'large'         : ['images/large/centre_kine_large_1.webp','images/large/cantre_kine_large_2.webp', 'images/large/centre_kine_large_3.webp', 'images/large/10.jpg'],
                        'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                        'button_list'   :
                        [
                            { 'title':'Visiter le site web', 'url' : 'https://centrebelge.com/', 'new_window' : true },
                            // { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
                        ],
                        'tags'          : ['Wordpress']
                    },
                    {
                        'title'         : 'salle de sport',
                        'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                        'thumbnail'     : ['images/small/powerlift.png'],
                        'large'         : ['images/large/powerlift.png'],
                        'img_title'     : ['jquery elastic grid'],
                        'button_list'   :
                        [
                            { 'title':'Visiter le site web', 'url' : 'https://powerlift.vercel.app/', 'new_window' : true },
                            // { 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
                        ],
                        'tags'          : ['React js']
                    },
                ]
            });
        });
    </script>
    
    <div class="container">

        <div class="overlay ">
        </div>
        
        <div class="section-top">
        <div class="section-header">

            <div>
                <a href="/">
                <img src="{{asset('img/logo-test-v2.png')}}" alt="">
                </a>
            </div>
            <div>
                {{-- <x-navbar /> --}}
                <div>
    
                    <ul class="header-menu d-none d-lg-block">
                                        <li><a href="/"> Home</a> </li>
                                        <li><a href="/#service"> Service</a> </li>
                                        <li><a href="/#portfolio" > Projets </a> </li>
                                        <li><a href="/contactez_nous">  Contactez Nous</a> </li>
                    </ul> 
                    </div>
            </div>
            <div class="right-header">
            
                    <div class="d-none d-sm-block call_to_action">
                        <button>
                                <span> <a href="/contactez_nous"> Demandez un devis Gratuit </a> </span>
                            <span><i class='bx bx-right-arrow-alt'></i></span>
                        </button>
                        
                    </div>
                
            
                    <div class="burger-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                
            </div>
            
        </div>
       
        </div>
        @if (session('status'))
        <div class="alert alert-success" style="z-index: 999">
            {{ session('status') }}
        </div>
        @endif

        <div class="portfolio_title">
            <strong><h1>HELLO</h1></strong>
            <strong><h1>I'M MOUSSA</h1></strong>
        </div>
        <div class="description">
             <p>Développeur  web avec  5 ans d’expérience dans la création des sites  Vitrine, site E-commerce ,intégration Html ...., et Référencement   naturelle et payant .</p>
        </div>
        <div class="projects">
            <a href="#portfolio">
                <button href="#portfolio">
               
                    <span>Réalisations</span>
                    <span><i class='bx bx-right-arrow-alt'></i></span>
                </button>
            </a>
            
        </div>
    </div>
    </div>
    <div class="content  pt-8">
        <h2 class="service-title">DES PRÉSTATION ADAPTÉS A VOS BESOIN </h2>
    </div>
    <div class="services pt-8" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 service-item">
                    <span><i class='bx bx-task'></i></span>
                    <p>GESTION DE PROJETS WEB</p>
                    <p>Site vitrine, corporate, évènementiel, e-commerce, intranet, application mobile</p>
                   
                </div>
                <div class="col-12 col-sm-6 col-lg-4 service-item">
                    <span><i class='bx bx-merge'></i></span>
                    <p>INTÉGRATION WEB</p>
                    <p>Des intégrations respectueuses des standards du Web</p>
                   
                </div>
                <div class="col-12 col-sm-6 col-lg-4 service-item">
                    <span><i class='bx bxs-devices'></i></i>
                       
                    </span>
                    <p>RÉSPONSIVE DESIGN</p>
                    <p>Compatible tous supports, tablette & application mobile.</p>
                   
                </div>
                <div class="col-12 col-sm-6 col-lg-4 service-item">
                    <span><i class='bx bx-code'></i></span>
                    <p>DÉVELOPPEMENT DES SPÉCIFIQUE </p>
                    <p>Des outils adaptés à votre coeur de métier.</p>
                   
                </div>
                <div class="col-12 col-sm-6 col-lg-4 service-item">
                    <span><i class='bx bx-line-chart-down'></i></span>
                    <p>RÉFÉRENCEMENT NATUREL</p>
                    <p>Affichage sémantique des informations, des pages propres pour un référencement optimal.</p>
                   
                </div>
                <div class="col-12 col-sm-6 col-lg-4 service-item">
                    <span><i class='bx bx-code-curly'></i></span>
                    <p>INTERFACE D'ADMINISTRATION</p>
                    <p>Outils spécifiques au bon fonctionnement de votre entreprise.</p>
                </div>
            </div>
        </div>
       
    </div>
    <div class="about pt-8">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="about_background">
                        <img src="img/image_portfolio.webp" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="about_content pt-2 pb-2">
                        <h1>A PROPOS DE MOI </h1>
                        <p>je m’apelle moussa eloifi J’ai passé les deux dernières années à donner aux particuliers et aux professionnels les moyens d’exploiter au mieux les solutions web dans le cadre de leurs activités</p>
                    </div>
                    <div class="about_services">
                        <div class="service_about_item">
                            <span><i class='bx bx-check' ></i></span>
                            <span>Services Professionnelles </span>
                        </div>
                        <div class="service_about_item">
                            <span><i class='bx bx-check' ></i></span>
                            <span>savoir-faire adapté </span>
                        </div>
                        <div class="service_about_item">
                            <span><i class='bx bx-check' ></i></span>
                            <span>un atout pour les clients </span>
                        </div>
                        <div class="learn_more pb-3 pt-3" >
                            <button >
                                <!-- <a href="#portfolio"> -->
                                    <span> <a href="/contactez_nous" role="button">Demander un devis Gratuit </a> </span>
                                <!-- </a> -->
                                <span><i class='bx bx-right-arrow-alt'></i></span>
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div> 
     <div class="portfolio pt-8" id="portfolio">
         <div class="container">
            <h1>Derniers projets</h1>
            <div id="elastic_grid_demo"></div>
         </div>
    </div>
    <div class="skills pt-8">
        <div class="container">
           
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="skills_description">
                        <h1>JE SUIS DÉVELOPPEUR WEB FREELANCE ET J'AIME ÇA !</h1>
                        <p>Passionné par la réalisation et le développement de projets web, je me suis tout naturellement tourné vers une carrière de développeur web.</p>
                    </div>
                    <div class="d-none d-sm-block call_to_action">
                        <button>
                                <span> <a href="/contactez_nous.html"> Demandez un devis Gratuit </a> </span>
                            <span><i class='bx bx-right-arrow-alt'></i></span>
                        </button>
                        
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 text-center ">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="95">
                          <div></div>
                          <p>Programmation</p>
                        </div>
                    </div>
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="90">
                          <div></div>
                          <p>Référencement</p>
                        </div>
                    </div>
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="90">
                          <div></div>
                          <p>Web design</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>   
    </div>
     <div class="why_us pt-8">
         <div class="container">
             <div class="row">
             <div class="col-12 col-sm-6 col-lg-6">
                <div class="why_us_title">
                    <span>why choose us</span>
                    <h2>PME OU PARTICULIERS, JE RÉPONDS À VOS BESOINS EN DÉVELOPPEMENT</h2>
                    <img src="img/web_developer_500.webp" alt="">
                </div>
             </div>
             <div class="col-12 col-sm-6 col-lg-6">
                <div class="accordion-container">
                 
                    <div class="set">
                      <a href="#" class="active">
                        UN DÉVELOPPEUR WEB PASSIONNÉ ! 
                        <i class="bx bx-plus"></i>
                      </a>
                      <div class="content" style="display: block;" >
                        <p> Ma passion pour le développement commence en 2010 et m’a demandé un changement radical de cursus afin de pouvoir pleinement l’exploiter.
                            Dès lors, je mis tout en oeuvre pour percer dans cette voix, tout en prenant du plaisir sur les divers projets développés.
                            En Mai 2012, je décide de devenir développeur web indépendant après plusieurs postes en tant que développeur web « full-stack » réussis, qui me conforteront dans cette idée afin de toucher un plus large panel de domaines d’activités, voir du pays et conquérir le monde !
                        </p>
                      </div>
                    </div>
                    <div class="set">
                      <a href="#">
                        EXPÉRIENCE EN DÉVELOPPEMENT
                        <i class="bx bx-plus"></i>
                      </a>
                      <div class="content">
                        <p>Mon expérience acquise au fil des projets me permet de mieux comprendre les attentes d’un client et de répondre précisement au besoin demandé en fonction du domaine d’activité.</p>
                      </div>
                    </div>
                    <div class="set">
                      <a href="#">
                        UN TARIF ADAPTÉ À VOTRE PROJET 
                        <i class="bx bx-plus"></i> 
                      </a>
                      <div class="content">
                        <p>Travaillant régulièrement avec des PME ou particuliers, je vous propose des solutions à votre portée & adaptée à votre budget.</p>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
         </div>
     </div>
     <div class="pricing pt-8">
         <div class="container">
             <div class="row">
                 <h1>Tarifs pas chers  </h1>
                 <div class="col-12 col-md-6 col-lg-4"> 
                     <div class="vitrine">
                        <div class="pricing-title">
                            <div class="price-title">
                                <h3> Site Vitrine </h3>
                                
                            </div>
                           
                            <div class="price">
                                <p>A partir de </p><h2>  2700</h2>
                            </div>
                            
                        </div>
                        <ul>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Hébergement 3 ans gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Nom de domaine 1 ans gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Emails professionnel illimité </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Service aprés vente 3 mois gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Thème professionnel </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Installation et configuration</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Insertion 5 page </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Configuration des émails  </li>
                            </span>
                            
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Analyse des mots clés et audit général</li>
                            </span>
                           
                        </ul>
                       <a href="/contactez_nous"><button>Demander un devis Gratuit</button></a> 
                     </div>
                    
                    
                 </div>
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="vitrine">
                        <div class="pricing-title">
                            <div class="price-title">
                                <h3> Site e-commerce  </h3>
                            </div>
                           
                            <div class="price">
                                <p>A partir de </p>   <h2>3400</h2>
                            </div>
                            
                        </div>
                        <ul>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Hébergement 3 ans gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Nom de domaine 1 ans gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Emails professionnel illimité </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Service aprés vente 3 mois gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Thème professionnel </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Installation et configuration</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Insertion 5 page </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Configuration des émails  </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Insertion 100 produits   </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Insertion 10 catégorie   </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Analyse des mots clés et audit général</li>
                            </span>
                           
                        </ul>
                        <a href="/contactez_nous"><button>Demander un devis Gratuit</button> </a>
                     </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="vitrine">
                        <div class="pricing-title">
                            <div class="price-title">
                                <h3> Site Dynamique </h3>
                            </div>
                           
                            <div class="price">
                                <p>A partir de </p>   <h2>4000</h2>
                            </div>
                            
                        </div>
                        <ul>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Hébergement 3 ans gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Nom de domaine 1 ans gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Emails professionnel illimité </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Service aprés vente 3 mois gratuit</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Thème professionnel </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Installation et configuration</li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Insertion 5 page </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li> Configuration des émails  </li>
                            </span>
                            <span>
                                <i class='bx bx-check'></i> 
                                <li>Analyse des mots clés et audit général</li>
                            </span>
                           
                        </ul>
                        <a href="/contactez_nous"><button>Demander un devis Gratuit</button></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div> <div class="overlay_contact"></div></div>
    
     <div class="contact">
    <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="form-headline">
                        <h2>Si vous avez un projet ou une idée de collaboration n’hésitez pas à nous contactez </h2>
                    </div> 
                </div>
                <form  id="form-data" 
                {{-- action={{route('subscription')}} method="POST" --}}
                >
                <div class="form" >
                    <div class="container">
                        <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div>
                            <div class="left-inner-addon input-container">
                                <i class="bx bx-user"></i>
                                <input type="text"
                                       id="name_error"
                                       name="name"
                                       class="form-control" 
                                       placeholder="Nom complet " />
                            </div>
                            
                        </div>
                    </div>
                <div class="col-12 col-md-6 col-lg-3 ">
                    <div>
                        <div class="left-inner-addon input-container">
                            <i class='bx bx-envelope-open'></i>
                            <input  type="text"
                                    id="email_error"
                                    name="email"
                                   class="form-control" 
                                   placeholder="Adresse e-mail *" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <div class="left-inner-addon input-container">
                            <input cols="2" rows="2"
                                   type="text"
                                   id="message_error"
                                   name="message"
                                   class="form-control" 
                                   placeholder="Message" />
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                      <a href="#" id="submit"> <button  >Envoyer un Message</button> </a>
                </div>

               
            </div>
                </div>
                
            </div>
           
        </form>
      
      
        </div>
       
    </div> 
    </div>
    <div class="footer pt-8">
        <div class="container">
            <div class="row">
                <!-- <div class="contact_footer_items"> -->
                   <div class="col-12 col-sm-6  col-md-6 col-lg-4">
                       <div class="contact_footer">
                       <span class="logo-footer" style="height:50px">
                       <a href="/">  
                       <img src="img/logo-test-footer.png"  alt="">
                       </a>
                       
                       </span>
                           <div class="social-icon">
                             <span><i class='bx bx-map'></i></span>
                             <p>Hay Rahma n 625 salé</p>
                           </div>
                            <div class="social-icon">
                             <span><i class='bx bx-phone'></i></span>
                             <p>0691904910</p>
                            </div>
                            <div class="social-icon">
                             <span><i class='bx bx-envelope-open'></i></span>
                             <p style="word-break:break-word;">moussaeloifi14@gmail.om</p>
                           </div>
                           <div class="social-media">
                               <div>
                               <a href="https://www.facebook.com/moussa.eloifi.372" class="float-menu-link"><span><i class='bx bxl-facebook'></i></span></a>                               </div>
                               <div>
                               <a href="https://www.linkedin.com/in/moussa-eloifi-817670155" class="float-menu-link"> <span>  <i class='bx bxl-linkedin'></i></span></a>
                               </div>
                               <div>
                               <a href="https://github.com/moussa03" class="float-menu-link"><span><i class='bx bxl-github'></i></span></a>
                               </div>
                               
                           </div>
                       </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                   <div class="contact_footer gap-0">
                       <span class="logo-footer">
                           <h2>Services</h2>
                       </span>
                       <ul>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Intégration Html</li>
                           </span>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Intégration cms</li>
                           </span>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Développement sécifique</li>
                           </span>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Création des sites ecommerce</li>
                           </span>
                       </ul>
                   </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact_footer gap-0">
                        <span class="logo-footer">
                            <h2>Newsletter</h2>
                        </span>
                        <p>création des sites web ,application mobile,wordpress,logos plus encore : notre équipe disponilble pour vous aidez a  développer votre business en construisant des relations plus fortes avec vos client</p>
                        <form >
                            <input     
                                       name="newsletter_mail"
                                       id="newsletter_mail"
                                       class="form-control" 
                                       placeholder="Entrez votre E-mail *" />
                                       <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                        </form>
                        
                    </div>
                    <div class="call_to_action last mb-4">
                        <button>
                            <a hrede="#" id="submit_newletter">Abonnez Vous</a>
                            <span><i class='bx bx-right-arrow-alt'></i></span>
                        </button>
                        
                    </div>
                  </div>
{{--                  
                 <div class="col-12 col-md-6 col-lg-3">
                   <span class="logo-footer">
                       <h2>Galerie</h2>
                   </span>
                   <div class="grid-container gallery">
                       <div class="grid-item primary">
                           <a href="images/large/allo_school_math_large_1.png" class="big" rel="rel1">
                               <img src="images/large/allo_school_math_large_1.png" alt="" title="alloschoolmath.com">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                          
                       </div>
                       <div class="grid-item primary">
                           <a href="images/large/centre_kine_large_1.png" class="big" rel="rel1">
                               <img src="images/large/centre_kine_large_1.png" alt="" title="centrebelge.com">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                       </div>
                       <div class="grid-item primary">
                           <a href="images/large/maroc-emplois_large_1.png" class="big" rel="rel1">
                               <img src="images/large/maroc-emplois_large_1.png" alt="" title="maroc-emplois.net">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                       </div>
                       <div class="grid-item primary">
                           <a href="images/large/global-fairs_large.png" class="big" rel="rel1">
                               <img src="images/large/global-fairs_large.png" alt="" title="global-fairs.com">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                       </div>
                      
                      
                     </div>
                 </div> --}}
                </div>
              
            </div>
   </div>
    <div class="floating-menu">
        <div class="top-menu">
            <div class="logo-menu">
                <img src="img/logo-test-footer.png" alt="">
            </div>
            <div class="close-menu">
                <i class='bx bx-x'></i>
            </div>
        </div>
<div class="drop-down-menu">
    <div class="vertical-menu">
        <li> 
            <span class="flex-gap">
                <a href="/"> Home </a> 
                <div class="plus-menu">
                    
                <i class='bx bx-plus'></i>
                </div>
            </span>
        
            <ul class="hide">
                <li><a href="#service" class="float-menu-link"> services </a></li>
                <li><a href="#portfolio" class="float-menu-link"> projets </a></li>
            </ul>
        </li>
        <!-- <li> 
            <span class="flex-gap">
                <a href="#"> Home </a> 
                <div class="plus-menu ">
                <i class='bx bx-plus'></i>
                </div>
            </span>
        
            <ul class="hide">
                <li>home1</li>
                <li>home2</li>
            </ul>
        </li> -->
    
        <li> 
            <span class="flex-gap no-ul">
                <a href="/contactez_nous"> Contactez Nous </a>   
            </span> 
        </li>
        <li> 
            <span class="flex-gap no-ul">
                <a href="#"> Blog </a>   
            </span> 
        </li>
        <!-- <li> 
            <span class="flex-gap">
                <a href="#"> Home </a> 
                <div class="plus-menu">
                    
                <i class='bx bx-plus'></i>
                </div>
            </span>
        
            <ul class="hide">
                <li>home1</li>
                <li>home2</li>
            </ul>
        </li> -->
    </div>
</div>
<div class="social">
    <h2>Contact Info</h2>
    <div class="social-icons">
        <div class="social-icon">
            <span><i class='bx bx-map'></i></span>
            <p>Hay Rahma n 625 salé</p>
        </div>
        <div class="social-icon">
            <span><i class='bx bx-phone'></i></span>
            <p>0691904910</p>
        </div>
        <div class="social-icon">
            <span><i class='bx bx-envelope-open'></i></span>
            <p style="word-break:break-word;">moussaeloifi14@gmail.om</p>
        </div>
    </div>
</div>
<div class="social-media">
    {{-- <x-social-media/> --}}
    <div>
        <a href="https://www.facebook.com/moussa.eloifi.372"><span><i class='bx bxl-facebook'></i></span></a>
    </div>
    <div>
    <a href="https://www.linkedin.com/in/moussa-eloifi-817670155"> <span>  <i class='bx bxl-linkedin'></i></span></a>
    </div>
    <div>
        <!-- <span><i class='bx bxl-twitter'></i></span>  -->
        <a href="https://github.com/moussa03"><span><i class='bx bxl-github'></i></span></a>
    </div>
    <!-- <div>
        <span><i class='bx bxl-youtube'></i></span>
    </div>  -->
 </div>
</div> 
    
  
        <script>
            var gallery = $('.gallery a').simpleLightbox({
            });
        </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js"></script>
    <script src="js/custom.js">
    </script>

    <script>
       
    $("#submit").click(function(event){
      event.preventDefault();
      
      var name = $("input[name=name]").val();
      var email = $("input[name=email]").val();
      var message = $("input[name=message]").val();
      $('#error_name').remove();
      $('#error_email').remove();
      $('#error_message').remove();
      $('.alert-success').remove();

    //   var _token   = $('meta[name="csrf-token"]').attr('content');
         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            
            url: '/subscription',
            type: 'POST',
            dataType: 'json',
            data:{_token: CSRF_TOKEN,name: name,email: email,message: message}, // the value of input having id vid
            success: function(response){ // What to do if we succeed
                $('#form-data').append("<div class='alert alert-success mt-3 '>"+response.success+"</div>");
                $('#name_error').val('');
                $('#message_error').val('');
                $('#email_error').val('');
            },
           
            error: function (error) {
               
                for (let [key, value] of Object.entries(error.responseJSON.errors)) {
                
                 $(`#${key}_error`).after(`<div class='alert alert-danger mt-2'  id=error_${key}>${value}</div>`);
                
                // console.log(error.responseJSON.errors);
                }
               
            }
            
        });
    });
    </script>
    
    <script>
    $("#submit_newletter").click(function(event){
    event.preventDefault();
    var Email = $("#newsletter_mail").val();
    var CSRF_TOKEN = $('#token').val();
     $("#error_mail").remove();
     $('.alert-success').remove();
    $.ajax({
            url: '/newsletter',
            type: 'POST',
            dataType: 'json',
            data: { email: Email, _token:CSRF_TOKEN},
            success: function(response){ // What to do if we succeed
                $('.call_to_action.last').append("<div class='alert alert-success mail mt-3'>"+response.success+"</div>");
            },
           
            error: function (error) {
               
               for (let [key, value] of Object.entries(error.responseJSON.errors)) {
               
                $(`.call_to_action.last`).after(`<div class='alert alert-danger mt-2 error'  id=error_mail>${value}</div>`);
               
               }
              
           }
            
        });
        
    });
    </script> 
    <script>
            var newletter_submit=document.getElementById('submit_newletter');
            newletter_submit.addEventListener('click', (event) => {
            $('.error').not(':last').remove();
            if($("#error_mail") != null){
            $(".alert-success.mail").remove();
             }
             
            });
    </script>
    <script src="{{asset('js/media.js')}}">

    </script>
   
    </body> 
</html>
