<?php 
    require('db.php');


?>
<?php include("include/header.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GMS</title>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">
  <!----------style----------->
  <style>
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
    width: 100%;
    height: 100vh;
    background: url("assets/img/accueilgms.jpg") top center;
    background-size: contain;
    position: relative;
  }
#hero:before {
    content:"";
    background: rgba(0, 0, 0, 0.6);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}

#hero .hero-container {
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    padding: 0 25px;
}
#hero h3 {
    background: rgba(255, 255, 255, 0.1);
    color: #f1f1f1;
    font-size: 30px;
    padding: 10px 30px;
    margin-bottom: 30px;
    border-radius: 50px;
}
#hero h1  {
    margin: 0 0 10px 0;
    font-size: 50px;
    font-weight: 700;
    line-height: 60px;
    text-transform: uppercase;
    color: #fff;
}
#hero h2 {
    color: #eee;
    margin-bottom: 50px;
    font-size: 30px;
}
#hero .btn-get-started {
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 15px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 30px 10px 30ps;
    border-radius: 50px;
    transition: 0.5s;
    border: 2px solid #fff;
    color: #f1f1f1;
    text-decoration: none;
    background: #e43c5c;
}
#hero .btn-get-started:hover {
    background: #fff;
    border: 2px solid #e43c5c;
    color: #e43c5c;
}
@media (min-width: 1024px) {
    #hero {
      background-attachment: fixed;
    }
  }
  @media (max-width: 768px) {
    #hero h3 {
      font-size: 22px;
    }
    #hero h1 {
      font-size: 28px;
      line-height: 36px;
    }
    #hero h2 {
      font-size: 18px;
      line-height: 24px;
      margin-bottom: 30px;
    }
  }
  @media (max-height: 500px) {
    #hero {
      height: 150vh;
    }
  }
  </style>
</head>
<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Soyez les  <strong>bienvenus </strong></h3>
      <h1>Génie Management Solution</h1>
      <h2>CONSEIL & ACOMPAGNEMENT ETUDES AU SENEGAL</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>-->
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>QUI SOMMES NOUS ?</h2>
          <h3>ET  <span>QUE POUVONS-NOUS FAIRE POUR VOUS ?</span></h3>
          <p>Génie Management Solution est un cabinet privé d’orientation pédagogique et professionnelle qui offre aux élèves, étudiants et professionnels des services de qualité, adaptés à leurs problématiques liées à leurs formations et métiers.
Fort d’une expérience de cinq (05) ans, notre mission consiste à assister les jeunes afin de leurs permettre de monter un bon projet aussi bien pédagogique que professionnel.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <h3>CONTEXTE</h3>
            <p>
            Conscients que le développement de l’Afrique ne se fera qu’avec et par les africains, la plupart des jeunes partent faire leurs études dans la sous-région afin de confronter leurs expertise et savoir-faire aux vraies problématiques de notre très cher continent.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Accueillir, informer et orienter ;</li>
              <li><i class="ri-check-double-line"></i>Permettre à chaque étudiant (e)  de trouver une bonne école et faire le bon choix de formation répondant à son profil ;</li>
              <li><i class="ri-check-double-line"></i>Trouver un logement pour chaque étudiant qui le désire ;</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            De ce fait, GENIE MANAGEMENT SOLUTION a mis en place un Programme d’accompagnement dénommé <a href="teranga.php"> TERANGA-ETUDES</a> qui consiste à accueillir, informer et orienter les étudiants africains désireux de poursuivre leurs études au Sénégal.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Formationm</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Consiste à accueillir, informer et orienter les étudiants africains désireux de poursuivre leurs études au Sénégal</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Recherche de logement</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Recherche de preinccription a l'etranger</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
      <div class="section-title">
         <h2> FORMATIONS GMS</h2>
    </div>   
        <div class="row">
          <div class=" col-md-4 col-6 col-6">
            <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.5em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"  style="color: #ffbb2c;"><path fill="currentColor" d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"/></svg>
              <h3><a href=""> Bureautique</a></h3>
            </div>
          </div>
          <div class=" col-md-4 col-6">
            <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="color: #5578ff;"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse cx="16" cy="6" rx="5" ry="3"/><path d="M11 6v4c0 1.657 2.239 3 5 3s5-1.343 5-3V6"/><path d="M11 10v4c0 1.657 2.239 3 5 3s5-1.343 5-3v-4"/><path d="M11 14v4c0 1.657 2.239 3 5 3s5-1.343 5-3v-4M7 9H4.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H3m2 0v1m0-8v1"/></g></svg> 
              <h3><a href="">Entreprenariat</a></h3>
            </div>
          </div>
          <div class=" col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"  style="color: #e80368;"><path fill="currentColor" d="M265.301 269.334c-1.24-39.937 26.821-71.547 67.562-60.916v122.94c-40.599 9.808-69.274-14.325-67.562-62.024zM0 0v512h512V0H0zm177.804 369.014H134.61v-266.92h43.194v266.92zm135.122 3.322c-49.296 1.424-92.89-29.841-91.927-100.787c.774-57.015 36.303-108.212 111.864-103.002v-66.453h44.302v239.785c0 4.067.37 9.887 1.363 14.713c-17.01 9.418-39.047 15.574-65.602 15.744z"/></svg>
              <h3><a href="">Infographie</a></h3>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-4 ">
            <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2.8em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 28 28"  style="color: #e361ff;"><path fill="currentColor" d="M18.081 13.399A4.48 4.48 0 0 0 18.5 11.5c0-.526-.09-1.03-.256-1.5h6.006c.966 0 1.75.784 1.75 1.75v2.002l-.008.108a3.32 3.32 0 0 1-.38 1.152A7.474 7.474 0 0 0 20.5 13c-.846 0-1.66.14-2.419.399Zm-4.656 9.596c-2.812-.13-4.52-1.141-4.91-3.098L8.5 19.75v-2c0-.966.784-1.75 1.75-1.75h4.25a7.466 7.466 0 0 0-1.5 4.5c0 .875.15 1.714.425 2.495ZM9.756 10H3.75A1.75 1.75 0 0 0 2 11.75v2l.014.147c.42 2.101 2.36 3.112 5.553 3.112H7.6A2.751 2.751 0 0 1 10.25 15h.922l-.176-.15A4.489 4.489 0 0 1 9.5 11.5c0-.526.09-1.03.256-1.5Zm7.744 1.5a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0Zm6.5-6a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0Zm-13 0a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0ZM20.5 27a6.5 6.5 0 1 0 0-13a6.5 6.5 0 0 0 0 13Zm0-11a.5.5 0 0 1 .5.5V20h3.5a.5.5 0 0 1 0 1H21v3.5a.5.5 0 0 1-1 0V21h-3.5a.5.5 0 0 1 0-1H20v-3.5a.5.5 0 0 1 .5-.5Z"/></svg>
              <h3><a href="">Comminity Management</a></h3>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-4">
            <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2.5em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128" style="color: #47aeff;"><path fill="#1976D2" d="M76.38 106.44c2.27-1.75 9.1-1.99 12-2.4c1.82-.26 5.09-.53 6.49-2.05c2.55-2.76 2.72-5.42 2.44-7.77c-.3-2.45-.8-4.81.12-6.29c.47-.75 2.45-4.53.08-5.46c-1.26-.5-2.08-.05-7.33.13c-2.44.08-4.3-.85-3.5-2.17c.89-1.01 4.7-1.44 8.28-2.76c2.53-.93 3.86-1.5 4.15-3.68c.18-1.32-.78-2.1-1.27-3.74c-.45-1.49-.02-2.17.59-2.77c.93-.91 3.39-2.38 3.72-5.06c.55-4.58-7.09-6.94-9.6-11.69c-1.2-2.27-.18-8.44-.18-10.45c0-8.14-4.07-21.78-16.93-29.57c-11.56-7-26.06-7.78-39.18-4.5c-6.27 1.57-12.63 5.81-16.76 9.52c-9.87 8.86-12.1 21.92-12.82 26.6c-2.28 14.72 1.7 25.98 7.41 35.02c8.25 13.07 20.12 21.5 21.94 29.01c.28 1.17.5 3.61.5 5.71c0 4.49-.25 8.21-.51 10.93h37.91c-.07-6.28-.19-14.51 2.45-16.56z"/><path fill="#B0BEC5" d="M104.8 71.35a2.205 2.205 0 0 1-1.22-4.04l15.14-9.99c1.01-.67 2.38-.39 3.05.62c.67 1.01.39 2.38-.62 3.05l-15.14 9.99c-.37.25-.79.37-1.21.37zm15.14 27c-.42 0-.84-.12-1.21-.36L103.59 88a2.196 2.196 0 0 1-.62-3.05a2.196 2.196 0 0 1 3.05-.62l15.14 9.99c1.02.67 1.29 2.04.62 3.05c-.43.63-1.13.98-1.84.98zm-14.65-18.97a2.2 2.2 0 0 1-.04-4.4l18.13-.32c1.22-.01 2.22.95 2.24 2.16s-.95 2.22-2.16 2.24l-18.13.32h-.04z"/></svg>
              <h3><a href="">Prise de parole en public</a></h3>
            </div>
          </div>
          <div class=" col-md-4 col-6 mt-4">
            <div class="icon-box">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"  style="color: #ffa76e;"><path fill="currentColor" d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64"/></svg>
              <h3><a href="">Comptabilite PAIE</a></h3>
            </div>
          </div>
        
        </div>

      </div>
    </section><!-- End Features Section -->

   <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section>-->
    <!-- End Cta Section -->
    <!-- Carousel -->
<!--<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<!--<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>-->

<!-- The slideshow/carousel -->
<!--<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/accueilgms.jpg" alt="#" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="assets/img/servicesgms.jpg" alt="#" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="assets/img/gmsadmin.jpeg" alt="#" class="d-block" style="width:100%">
    </div>
  </div>-->

<!-- Left and right controls/icons -->
<!--<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>-->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>IMMIGRATION CANADA</h2>
          <h3>TRAVAILLEURS  <br>
          <br><span>CONDITIONS D'ADMISSIONS</span></h3>
          <p> Vous souhaitez immigrer au Canada en tant que travailleur, le programme d’entré express est un excellent moyen d’y parvenir, sans doute le plus rapide. Tout ce que vous avez à faire c’est de vous assurer de remplir les conditions fixées par  le gouvernement fédéral. Ces conditions sont basées sur l’âge, le niveau de scolarité, le nombre d’année d’expérience professionnelle, l’adaptabilité que vous ayez une famille ou non, l’offre d’emploi et les compétences linguistiques. Si vous remplissez les critères pour le premier niveau décrit qui est l’éligibilité, dans ce cas-là, vous pourrez être inscrit dans le bassin de sélection du programme d’entré express et une fois que vous avez été sélectionné, la procédure ne prend que 06 mois. Si vous souhaitez entamer votre procédure,  nous vous proposons de nous rencontrer afin d’avoir tous les éléments en rapport avec l’entré express au Canada.</p>
         <!-- <h3>Contexte du projet <span>TERANGA-ETUDES</span></h3>-->
          <h3>COMMERCANTS  <br>
          <br><span>CONDITIONS D'ADMISSIONS</span></h3>
          <p>Si vous êtes et que vous avez les documents prouvant votre activité, vous pourriez demander un visa visiteur ou touristique au Canada qui et un visa renouvelable et qui vous permettra de  d’exercer librement et en toute légalité vos activités au Canada. 
Pour plus de renseignement veuillez prendre rendez-vous avec un de nos agents. 
L’âge minimum demandé est entre 20 et 29 ans. Si votre âge se trouve dans cet intervalle, vous avez le maximum de points.29 ans jusqu’à 40 vous avez des points mais plus dépasse 29 ans, plus vos points diminuent. Si vous avez moins de 20 ans, vous n’avez pas de points. Si vous avez plus de 43 ans, vous n’avez aussi aucun point. 
Pour le niveau de scolarité, il n’y a de niveau minimum requis mais nous tenons en compte le deuxième niveau de sélection (la première c’est par rapport à l’éligibilité), vous devez avoir au moins le niveau licence.
Pour la compétence linguistique, c’est le test de français qu’il faut faire à l’institut français TEF CANADA.
Pour le nombre d’années d’expérience, le minimum c’est un an. 
L’adaptabilité c’est presque facultatif. Ça n’empêche d’être éligible mais si vous l’avez, vous augmentez vos points de même que l’offre d’emploi.
Si vous avez 40 ans avec le niveau licence, vous avez très peu de chance d’être sélectionné pour le programme entré express.  Si vous avez plus de 35 ans et que vous n’avez pas le niveau de master, ça va être très difficile d’être sélectionné même si vous avez une bonne compétence linguistique. Avec 35 ans le mieux c’est d’avoir 3 ans d’expériences professionnelles.</p>
          <h3>LES FRAIS</h3>
          <P> 115 000 pour frais d’équivalence de diplôme au niveau du wes (World Education Service)
100 000 pour le test de français au niveau de l’institut français TEF CANADA
Après avoir obtenu le rapport d’équivalence et le résultat du test de français, c’est à partir de ce moment qu’on peut l’inscrire dans le bassin d’entré express (frais extra honoraires). Si on vous envoie l’IPD (Invitation à Présenter une Demande), vous devez payer la biométrie (montant à rechercher). Pour le compte bancaire, le gouvernement fédéral vous demandera d’avoir au minimum 12 669 dollars à l’époque c’est ce qu’on exigeait. Maintenant, ça était modifié légèrement avec à peu 12 600 (et quelque) (5 à 6 millions).</P>
        </div>
        </div>
         <!-- ======= F.A.Q Section ======= -->
   <!-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>SERVICES</h2>
          <h3>les services de <span>TERANGA-ETUDES</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Accueil, information et Orientation <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
              Comme tout étranger venu d’un autre pays, nous avons toujours besoin des bonnes informations afin de s’adresser aux personnes ressources pour rendre notre séjour inoubliable. Pour ça, nous nous chargerons de vous accueillir, vous informer et vous orienter durant tout le processus pour une meilleure intégration.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Recherche  d’école de formation <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
              Etant en partenariat avec les plus grandes écoles de formation privée de Dakar, nous nous chargerons de vous trouver une école de formation avec des enseignements de qualité. De plus, nos agents vous accompagneront pour vos démarches administratives afin de vous assurer une bonne intégration auprès de ses instituts.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Bourse d’étude <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
              GENIE MANAGEMENT SOLUTION, avec l’accompagnement de ses écoles partenaires, vous assistera pour l’obtention d’une bourse d’étude qui vous permettra d’alléger le coût de scolarité.
NB : Les bourses d’études ne concernent pas toutes nos écoles partenaires.  
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Recherche de logement<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
              De nos jours, trouver un logement à Dakar fait partie de l’une des problématiques les plus récurrentes pour les  étrangers notamment les étudiants. De ce fait, GENIE MANAGEMENT SOLUTION en partenariat avec des cabinets immobiliers vous facilitera à trouver un logement avant même votre arrivée.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Accueil et accompagnement jusqu’à son logement <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                
              Un agent de Génie Management Solution viendra vous chercher à partir de l’aéroport et vous accompagnement jusqu’à votre domicile.

              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Accompagnement pour l’inscription pédagogique <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
              Un agent de GENIE MANAGEMENT SOLUTION vous accompagnera lors de votre inscription pédagogique à l’école pour mieux vous faciliter la tâche.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Accompagnement auprès de son ambassade <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
              Une fois sur place, vous aurez peut-être besoin d’aller auprès de votre ambassade pour remplir certaines formalités administratives ; et dans ce cas, GENIE MANAGEMENT SOLUTION mettra à votre disposition un agent pour vous accompagner.
              </p>
            </div>
          </li>

          

        </ul>

      </div>


    </section>End F.A.Q Section-->

     <!--   <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Presentation</li>
              <li data-filter=".filter-card">Ecole Partenaires</li>
              <li data-filter=".filter-web">Services</li>
            </ul>
          </div>
        
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/logo-unipro.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>UNIPRO</h4>
              <p>App</p>
              <a href="assets/img/flygms1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CEFAS</h4>
              <p>Web</p>
              <a href="assets/img/flygms2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/flygms3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ENSUP AFRIQUE</h4>
              <p>App</p>
              <a href="assets/img/flygms3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/flygms4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Groupe OZANA </h4>
              <p>Card</p>
              <a href="assets/img/flygms4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/flygms5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>HECM</h4>
              <p>Web</p>
              <a href="assets/img/flygms5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/flygms6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/flygms6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/flygms7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/flygms7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/flygms8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/flygms8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/flygms9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/flygms9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <!--<section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Our Competing <span>Prices</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Pricing Section -->
33
    <!-- ======= Team Section ======= -->
    <!--<section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!--<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.0877670668624!2d-17.457373285250437!3d14.707628478388077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172c012788a4d%3A0x58fe25c4ee69c755!2sPharmacie%20de%20l&#39;Emmanuel!5e0!3m2!1sfr!2sbg!4v1652276766471!5m2!1sfr!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localisation:</h4>
                <p>Immeuble Pharmacie de l'Emmanuel Grand Dakar près Garage casamance</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>genimanagement21@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+221 77 298 62 61 - +221 78 506 77 83</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include("include/footer.php")?>
  </body>
</html>