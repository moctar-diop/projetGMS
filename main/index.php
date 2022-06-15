<?php
include "class/session.php"; 
include "include/headert.php"; 
Session::getInstance();

?>
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
  <link href="assets/css/style.css" rel="stylesheet">
  <!----------style----------->
  <style>
    body {
 color: lightcyan;
    background-color: #05094d!important;
  }
  *{
    color:#f1f1f1
  }
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
          <h2 class="badge rounded-pill bg-success text-dark">QUI SOMMES NOUS ?</h2>
          <h3>ET  <span>QUE POUVONS-NOUS FAIRE POUR VOUS ?</span></h3>
          <p>Génie Management Solution est un cabinet privé d’orientation pédagogique et professionnelle qui offre aux élèves, étudiants et professionnels des services de qualité, adaptés à leurs problématiques liées à leurs formations et métiers.
Fort d’une expérience de cinq (05) ans, notre mission consiste à assister les jeunes afin de leurs permettre de monter un bon projet aussi bien pédagogique que professionnel.</p>

            <h3>CONTEXTE</h3>
            <p>
            Conscients que le développement de l’Afrique ne se fera qu’avec et par les africains, la plupart des jeunes partent faire leurs études dans la sous-région afin de confronter leurs expertise et savoir-faire aux vraies problématiques de notre très cher continent.
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item  ">Accueillir, informer et orienter ;</li>
              <li class="list-group-item ">Permettre à chaque étudiant (e)  de trouver une bonne école et faire le bon choix de formation répondant à son profil ;</li>
              <li class="list-group-item list-group-item-primary">Trouver un logement pour chaque étudiant qui le désire ;</li>
            </ul>
          
            <p>
            De ce fait, GENIE MANAGEMENT SOLUTION a mis en place un Programme d’accompagnement dénommé <a href="teranga.php"> TERANGA-ETUDES</a> qui consiste à accueillir, informer et orienter les étudiants africains désireux de poursuivre leurs études au Sénégal.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2 class="badge rounded-pill bg-danger text-dark">Services GMS</h2>
          <h3>We do offer awesome <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Formation</a></h4>
              <p class="description text-dark">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Consiste à accueillir, informer et orienter les étudiants africains désireux de poursuivre leurs études au Sénégal</a></h4>
              <p class="description text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Recherche de logement</a></h4>
              <p class="description text-dark">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Recherche de preinccription a l'etranger</a></h4>
              <p class="description text-dark">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
      <div class="section-title">
         <h2 class="badge rounded-pill bg-danger text-dark"> FORMATIONS GMS</h2>
    </div>   
        <div class="row">
          <div class=" col-md-4 col-6 col-6">
            <div class="icon-box bg-light">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.5em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"  style="color: #000000;"><path fill="currentColor" d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"/></svg>
              <h3><a href="" class="text-dark  ps-2"> Bureautique</a></h3>
            </div>
          </div>
          <div class=" col-md-4 col-6">
            <div class="icon-box bg-light">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="color: #000000;"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse cx="16" cy="6" rx="5" ry="3"/><path d="M11 6v4c0 1.657 2.239 3 5 3s5-1.343 5-3V6"/><path d="M11 10v4c0 1.657 2.239 3 5 3s5-1.343 5-3v-4"/><path d="M11 14v4c0 1.657 2.239 3 5 3s5-1.343 5-3v-4M7 9H4.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H3m2 0v1m0-8v1"/></g></svg> 
              <h3><a href="" class="text-dark ps-1">Entreprenariat</a></h3>
            </div>
          </div>
          <div class=" col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box bg-light">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"  style="color: #000000;"><path fill="currentColor" d="M265.301 269.334c-1.24-39.937 26.821-71.547 67.562-60.916v122.94c-40.599 9.808-69.274-14.325-67.562-62.024zM0 0v512h512V0H0zm177.804 369.014H134.61v-266.92h43.194v266.92zm135.122 3.322c-49.296 1.424-92.89-29.841-91.927-100.787c.774-57.015 36.303-108.212 111.864-103.002v-66.453h44.302v239.785c0 4.067.37 9.887 1.363 14.713c-17.01 9.418-39.047 15.574-65.602 15.744z"/></svg>
              <h3><a href="" class="text-dark ps-1">Infographie</a></h3>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-4 ">
            <div class="icon-box bg-light">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2.8em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 28 28"  style="color: #000000;"><path fill="currentColor" d="M18.081 13.399A4.48 4.48 0 0 0 18.5 11.5c0-.526-.09-1.03-.256-1.5h6.006c.966 0 1.75.784 1.75 1.75v2.002l-.008.108a3.32 3.32 0 0 1-.38 1.152A7.474 7.474 0 0 0 20.5 13c-.846 0-1.66.14-2.419.399Zm-4.656 9.596c-2.812-.13-4.52-1.141-4.91-3.098L8.5 19.75v-2c0-.966.784-1.75 1.75-1.75h4.25a7.466 7.466 0 0 0-1.5 4.5c0 .875.15 1.714.425 2.495ZM9.756 10H3.75A1.75 1.75 0 0 0 2 11.75v2l.014.147c.42 2.101 2.36 3.112 5.553 3.112H7.6A2.751 2.751 0 0 1 10.25 15h.922l-.176-.15A4.489 4.489 0 0 1 9.5 11.5c0-.526.09-1.03.256-1.5Zm7.744 1.5a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0Zm6.5-6a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0Zm-13 0a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0ZM20.5 27a6.5 6.5 0 1 0 0-13a6.5 6.5 0 0 0 0 13Zm0-11a.5.5 0 0 1 .5.5V20h3.5a.5.5 0 0 1 0 1H21v3.5a.5.5 0 0 1-1 0V21h-3.5a.5.5 0 0 1 0-1H20v-3.5a.5.5 0 0 1 .5-.5Z"/></svg>
              <h3><a href="" class="text-dark ps-1">Comminity Management</a></h3>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-4">
            <div class="icon-box bg-light">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2.5em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128" style="color: #000000;"><path fill="#1976D2" d="M76.38 106.44c2.27-1.75 9.1-1.99 12-2.4c1.82-.26 5.09-.53 6.49-2.05c2.55-2.76 2.72-5.42 2.44-7.77c-.3-2.45-.8-4.81.12-6.29c.47-.75 2.45-4.53.08-5.46c-1.26-.5-2.08-.05-7.33.13c-2.44.08-4.3-.85-3.5-2.17c.89-1.01 4.7-1.44 8.28-2.76c2.53-.93 3.86-1.5 4.15-3.68c.18-1.32-.78-2.1-1.27-3.74c-.45-1.49-.02-2.17.59-2.77c.93-.91 3.39-2.38 3.72-5.06c.55-4.58-7.09-6.94-9.6-11.69c-1.2-2.27-.18-8.44-.18-10.45c0-8.14-4.07-21.78-16.93-29.57c-11.56-7-26.06-7.78-39.18-4.5c-6.27 1.57-12.63 5.81-16.76 9.52c-9.87 8.86-12.1 21.92-12.82 26.6c-2.28 14.72 1.7 25.98 7.41 35.02c8.25 13.07 20.12 21.5 21.94 29.01c.28 1.17.5 3.61.5 5.71c0 4.49-.25 8.21-.51 10.93h37.91c-.07-6.28-.19-14.51 2.45-16.56z"/><path fill="#B0BEC5" d="M104.8 71.35a2.205 2.205 0 0 1-1.22-4.04l15.14-9.99c1.01-.67 2.38-.39 3.05.62c.67 1.01.39 2.38-.62 3.05l-15.14 9.99c-.37.25-.79.37-1.21.37zm15.14 27c-.42 0-.84-.12-1.21-.36L103.59 88a2.196 2.196 0 0 1-.62-3.05a2.196 2.196 0 0 1 3.05-.62l15.14 9.99c1.02.67 1.29 2.04.62 3.05c-.43.63-1.13.98-1.84.98zm-14.65-18.97a2.2 2.2 0 0 1-.04-4.4l18.13-.32c1.22-.01 2.22.95 2.24 2.16s-.95 2.22-2.16 2.24l-18.13.32h-.04z"/></svg>
              <h3><a href="" class="text-dark ps-1">Prise de parole en public</a></h3>
            </div>
          </div>
          <div class=" col-md-4 col-6 mt-4">
            <div class="icon-box bg-light">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"  style="color: #ffa76e;"><path fill="currentColor" d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64"/></svg>
              <h3><a href="" class="text-dark ps-1">Comptabilite PAIE</a></h3>
            </div>
          </div>
        
        </div>

      </div>
    </section><!-- End Features Section -->

  


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 class="badge rounded-pill bg-danger text-dark">IMMIGRATION CANADA</h2>
          <h3 class="fw-bold text-decoration-underline">TRAVAILLEURS </h3> <br>
          <h3><span>CONDITIONS D'ADMISSIONS</span></h3>
          <p> Vous souhaitez immigrer au Canada en tant que travailleur, le programme d’entré express est un excellent moyen d’y parvenir, sans doute le plus rapide. Tout ce que vous avez à faire c’est de vous assurer de remplir les conditions fixées par  le gouvernement fédéral. Ces conditions sont basées sur l’âge, le niveau de scolarité, le nombre d’année d’expérience professionnelle, l’adaptabilité que vous ayez une famille ou non, l’offre d’emploi et les compétences linguistiques. Si vous remplissez les critères pour le premier niveau décrit qui est l’éligibilité, dans ce cas-là, vous pourrez être inscrit dans le bassin de sélection du programme d’entré express et une fois que vous avez été sélectionné, la procédure ne prend que 06 mois. Si vous souhaitez entamer votre procédure,  nous vous proposons de nous rencontrer afin d’avoir tous les éléments en rapport avec l’entré express au Canada.</p>
         <!-- <h3>Contexte du projet <span>TERANGA-ETUDES</span></h3>-->
          <h3 class="fw-bold text-decoration-underline">COMMERCANTS  <br>
          <h3><span>CONDITIONS D'ADMISSIONS</span></h3>
          <p>Si vous êtes et que vous avez les documents prouvant votre activité, vous pourriez demander un visa visiteur ou touristique au Canada qui et un visa renouvelable et qui vous permettra de  d’exercer librement et en toute légalité vos activités au Canada. 
Pour plus de renseignement veuillez prendre rendez-vous avec un de nos agents. 
L’âge minimum demandé est entre 20 et 29 ans. Si votre âge se trouve dans cet intervalle, vous avez le maximum de points.29 ans jusqu’à 40 vous avez des points mais plus dépasse 29 ans, plus vos points diminuent. Si vous avez moins de 20 ans, vous n’avez pas de points. Si vous avez plus de 43 ans, vous n’avez aussi aucun point. 
Pour le niveau de scolarité, il n’y a de niveau minimum requis mais nous tenons en compte le deuxième niveau de sélection (la première c’est par rapport à l’éligibilité), vous devez avoir au moins le niveau licence.
Pour la compétence linguistique, c’est le test de français qu’il faut faire à l’institut français TEF CANADA.
Pour le nombre d’années d’expérience, le minimum c’est un an. 
L’adaptabilité c’est presque facultatif. Ça n’empêche d’être éligible mais si vous l’avez, vous augmentez vos points de même que l’offre d’emploi.
Si vous avez 40 ans avec le niveau licence, vous avez très peu de chance d’être sélectionné pour le programme entré express.  Si vous avez plus de 35 ans et que vous n’avez pas le niveau de master, ça va être très difficile d’être sélectionné même si vous avez une bonne compétence linguistique. Avec 35 ans le mieux c’est d’avoir 3 ans d’expériences professionnelles.</p>
          <h3 class="badge rounded-pill bg-info text-dark">LES FRAIS</h3>
          
          <P> 115 000 pour frais d’équivalence de diplôme au niveau du wes (World Education Service)
100 000 pour le test de français au niveau de l’institut français TEF CANADA
Après avoir obtenu le rapport d’équivalence et le résultat du test de français, c’est à partir de ce moment qu’on peut l’inscrire dans le bassin d’entré express (frais extra honoraires). Si on vous envoie l’IPD (Invitation à Présenter une Demande), vous devez payer la biométrie (montant à rechercher). Pour le compte bancaire, le gouvernement fédéral vous demandera d’avoir au minimum 12 669 dollars à l’époque c’est ce qu’on exigeait. Maintenant, ça était modifié légèrement avec à peu 12 600 (et quelque) (5 à 6 millions).</P>
        </div>
        </div>
        


  </main>

  <?php include("include/footer.php")?>
  </body>
</html>