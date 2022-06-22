<?php
include("class/session.php");
 include("include/header.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Vendor CSS Files -->
   <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <!----------style----------->
  <style>
     body {
 color: lightcyan;
    background-color: #05094d!important;
  }
  *{
    color:#f1f1f1
  }

  ul>li{
    color: black;
  }
  p{
   text-align: justify;
  }
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
    width: 100%;
    height: 100vh;
    background: url("assets/img/flyers/terangaadmin.jpg") top center;
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
  <script src="https://kit.fontawesome.com/dc8de4a567.js" crossorigin="anonymous"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  
<!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Soyez les  <strong>bienvenus sur</strong></h1>
      <h3 class="badge rounded-pill bg-transparent text-primary">TERANGA-ETUDES</h3>
      <h2>CONSEIL & ACOMPAGNEMENT ETUDES AU SENEGAL</h2>
      <a href="#about" class="btn-get-started scrollto">VOTRE REUSSITE NOTRE SACERDOCE</a>
    </div>
  </section>
  <!-- End Hero -->
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>TERANGA-ETUDES</h2>
          <h3>QUI SOMMES NOUS ET QUE POUVONS-NOUS FAIRE POUR VOUS ? <br>
          <br><span>CONSEIL & ACOMPAGNEMENT ETUDES AU SENEGAL</span></h3>
          <p> Génie Management Solution est un cabinet privé de conseil et d’orientation  pédagogique qui offre aux élèves, étudiants et professionnels des services de qualité, adaptés à leurs problématiques liées à leurs formations et métiers. Fort d’une expérience de cinq (05) ans, notre mission consiste à assister les jeunes afin de leurs permettre de monter un bon projet aussi bien pédagogique que professionnel.</p>
          <h3>Contexte du projet <span>TERANGA-ETUDES</span></h3>
          <p>Conscients que le développement de l’Afrique ne se fera qu’avec et par les africains, la plupart des jeunes partent faire leurs études dans la sous-région afin de confronter leurs expertise et savoir-faire aux vraies problématiques de notre très cher continent.De ce fait, GENIE MANAGEMENT SOLUTION a mis en place un Programme d’accompagnement dénommé TERANGA-ETUDES qui consiste à accueillir, informer et orienter les étudiants africains désireux de poursuivre leurs études au Sénégal.</p>
        </div>
        </div>
    

        


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2 class="badge rounded-pill bg-danger text-dark">A PROPOS DE NOUS</h2>
          <h3>Learn More <span>About Us</span></h3>
          <p>POURQUOI NOUS FAIRE CONFIANCE?</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            QUATRE (04) RAISONS DE NOUS FAIRE CONFIANCE :
            </p>
            <ul class="list-group list-group-light">
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg> Notre agence est composée de consultants qui maitrisent parfaitement leur sujet avec des années d’expérience.</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg>Nos différentes écoles partenaires sont reconnues par la qualité de leurs formations, leurs diplômés sont recherchés par les employeurs.</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg>Possibilité de bénéficier chaque année d’étude d’un (01) mois de stage en entreprise grâce à la politique mise en place par certains de nos partenaires.</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg>La rapidité et la fiabilité de notre procédure</li>
            </ul>
          </div>
          
         
          <div class="col-lg-6">
            <p>
            OBJECTIFS
            </p>
            <ul class="list-group list-group-light">
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg>Accueillir, informer et orienter ;</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg>Permettre à chaque étudiant (e)  de trouver une bonne école et faire le bon choix de formation répondant à son profil ;</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg>Trouver un logement pour chaque étudiant qui le désire ;</li>
            </ul>
            <p>
            Commencez votre procédure aujourd’hui pour finir à temps pour la rentrée prochaine.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
          
       

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

      <div class="section-title">
          <h2 class="badge rounded-pill bg-danger text-dark">SERVICES</h2>
          <h3>les services de <span>TERANGA-ETUDES</span></h3>
        </div>

       
      
        

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Accueil, information et Orientation </a></h4>
              <p class="description text-dark">Comme tout étranger venu d’un autre pays, nous avons toujours besoin des bonnes informations afin de s’adresser aux personnes ressources pour rendre notre séjour inoubliable. Pour ça, nous nous chargerons de vous accueillir, vous informer et vous orienter durant tout le processus pour une meilleure intégration.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Recherche  d’école de formation</a></h4>
              <p class="description text-dark">Etant en partenariat avec les plus grandes écoles de formation privée de Dakar, nous nous chargerons de vous trouver une école de formation avec des enseignements de qualité. De plus, nos agents vous accompagneront pour vos démarches administratives afin de vous assurer une bonne intégration auprès de ses instituts.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-mortarboard"></i></div>
              <h4 class="title"><a href="">Bourse d’étude</a></h4>
              <p class="description text-dark">GENIE MANAGEMENT SOLUTION, avec l’accompagnement de ses écoles partenaires, vous assistera pour l’obtention d’une bourse d’étude qui vous permettra d’alléger le coût de scolarité. NB : Les bourses d’études ne concernent pas toutes nos écoles partenaires.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Recherche de logement</a></h4>
              <p class="description text-dark">De nos jours, trouver un logement à Dakar fait partie de l’une des problématiques les plus récurrentes pour les  étrangers notamment les étudiants. De ce fait, GENIE MANAGEMENT SOLUTION en partenariat avec des cabinets immobiliers vous facilitera à trouver un logement avant même votre arrivée.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Accueil et accompagnement jusqu’à son logement</a></h4>
              <p class="description text-dark">Un agent de Génie Management Solution viendra vous chercher à partir de l’aéroport et vous accompagnement jusqu’à votre domicile.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Accompagnement pour l’inscription pédagogique</a></h4>
              <p class="description text-dark">Un agent de GENIE MANAGEMENT SOLUTION vous accompagnera lors de votre inscription pédagogique à l’école pour mieux vous faciliter la tâche.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Accompagnement auprès de son ambassade</a></h4>
              <p class="description text-dark">Une fois sur place, vous aurez peut-être besoin d’aller auprès de votre ambassade pour remplir certaines formalités administratives ; et dans ce cas, GENIE MANAGEMENT SOLUTION mettra à votre disposition un agent pour vous accompagner.</p>
            </div>
          </div>

        </div>

      </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container">
    <section id="faq" class="faq">
      <div class="container">
      <section id="features" class="features">
      <div class="container">
      <div class="section-title">
         <h2 class="badge rounded-pill bg-danger text-dark">Nos Ecoles Partenaire</h2>
    </div>   
        <div class="row">
          <div class=" col-md-4 col-6 col-6">
            <div class="icon-box bg-light row h-100">
            <a href="index.html" class="logo"><img src="assets/img/ecole/logo-unipro.jpg" alt="" class="img-fluid"></a>
                  <h3> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      UNIPRO
                    </button></h3>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                      <h1 class="text-black">FILIERE</h1>      
                      <ul>
                          <li>Commercce International</li>
                          <li>Transport Logistique</li>
                          <li>Marketing & Strategie</li>
                          <li>management des affaires</li>
                          <li>Science de Gestion</li>
                          <li>Gestion de Projets</li>
                          <li>Monnaie Banque Finance</li>
                          <li>Genie Civil</li>
                          <li>Entrepaniat & Gestion</li>
                          <li>Hygiene Qualite Securite & Environnement</li>
                          <li>Genie Informatique </li>
                          <li>Gestion des resssouces Humaines</li>
                        </ul>
                </div>
                </div>
            </div>
          </div>
          <div class=" col-md-4 col-6">
            <div class="icon-box bg-light row h-100">
            <a href="index.html" class="logo h-75"><img src="assets/img/ecole/ENSUP.jpg" alt="" class="img-fluid pt-5"></a>
               <h3> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                      ENSUP Afrique
                    </button></h3>
           
                <div class="collapse" id="collapseExample1">
                  <div class="card card-body">
                            <h1 class="text-black">FILIERE</h1>
                            <ul>
                              <li>Management de la Qualite</li>
                              <li>Management de Projets</li>
                              <li>Gestion des Ressources Humaines GRH</li>
                              <li>Compatilite de Gestion</li>
                              <li>Banque-Assurance-Finance</li>
                              <li>Audit et Controle de Gestion</li>
                              <li>Droit des Affaires et Fiscalite</li>
                              <li>Commerce International</li>
                              <li>Communication- Journalisme</li>
                              <li>Hotellerie - Tourisme</li>
                              <li>Administration Des Entreprises </li>
                              <li>Informatique de gestion</li>
                              <li>Transport Logistique</li>
                              <li>Marketing et Communication</li>
                              <li>Passation de Marches</li>
                            </ul>
                  </div>
                </div>
            </div>
          </div>
          <div class=" col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box bg-light row h-100">
            <a href="index.html" class="logo h-75"><img src="assets/img/ecole/HECM.jpg" alt="" class="img-fluid mx-auto d-block float-boottom  pt-5"></a>
            <h3> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                      HECM/ DAKAR
                    </button></h3>
           
                <div class="collapse" id="collapseExample2">
                  <div class="card card-body">
                    <h1 class="text-black">FILIERE</h1>
                    <ul>
                      <li>Administration/ Gestion des Entreprises</li>
                      <li>Assistanat de Direction</li>
                      <li>Compatible - Gestion</li>
                      <li>Banque- Finance- Assurance</li>
                      <li>Transport Logistique </li>
                      <li>Commerce International</li>
                      <li>Marketing- Management Digital</li>
                      <li>Journalisme - Communication</li>
                      <li>Gestion des Projet</li>
                      <li>Gestion des ressources Humaines</li>
                      <li>Audit et Controle de Gestion</li>
                      <li>Management de la Qualite, Hygiene, Securite et Environnement</li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-4 ">
            <div class="icon-box bg-light row h-100">
            <a href="index.html" class="logo"><img src="assets/img/ecole/ozana.jpg" alt="" class="img-fluid"></a>
            <h3> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                      Groupe OZANA
                    </button></h3>
           
                <div class="collapse" id="collapseExample3">
                  <div class="card card-body">
                    <h1>FILIERE</h1>
                    <ul>
                      <li>Sage Femme D'etat</li>
                      <li>Infirmiere d'Etat</li>
                      <li>Assistant d'Etat</li>
                      <li>Secretaire Medical</li>
                      <li>Aide Soignant(e)</li>
                      <li>Vendeur-Vendeuse en PHARMACIE</li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-6 mt-4">
            <div class="icon-box bg-light row h-100">
            <a href="index.html" class="logo"><img src="assets/img/ecole/ISMAT.jpg" alt="" class="img-fluid"></a>
            <h3> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                      ISMAT
                    </button></h3>
           
                <div class="collapse" id="collapseExample4">
                  <div class="card card-body">
                    <h1 class="text-black">FILIERE</h1>  
                  <ul>
                    <li>Systemes et Reseaux informatique</li>
                    <li>Base de donnees et Systeme d'information</li>
                    <li>Programmation et developpement Logiciel</li>
                    <li>Systemes d'information et reseaux d'entreprise</li>
                    <li>Audiovisuel et multimedia</li>
                    <li>Maintenancee Informatique</li>
                    <li>Reparation de smartphones et de tablettes</li>
                    <li>Reparation d'ordinateurs et d'imprimantes</li>
                  </ul>
                  </div>
                </div>
            </div>
          </div>
          <div class=" col-md-4 col-6 mt-4">
            <div class="icon-box bg-light row h-100">
            <a href="index.html" class="logo"><img src="assets/img/ecole/CEFAS.jpg" alt="" class="img-fluid"></a>
            
            <h3> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                      CEFAS
                    </button></h3>
           
                <div class="collapse" id="collapseExample5">
                  <div class="card card-body">
                    <h1 class="text-black">FILIERE</h1>
                      <ul>
                        <h3>Departement des sciences et techniques</h3>
                        <li>Genie Civil</li>
                        <li>Genie Pretolier</li>
                        <li>Agro-alimentaire</li>
                        <li>Management des entreprises agricole</li>
                        <h3>Departement Informatique</h3>
                        <li>Genie Informatique</li>
                        <li>Informatique de gestion</li>
                        <li>Reseaux et telecommunication</li>
                        <li>Developpement Web</li>
                        <h3>Departement de Gestion et de management</h3>
                        <li>Transport et Logistique</li>
                        <li>Commerce International</li>
                        <li>Transit Douane</li>
                        <li>Compatilite et gestion</li>
                        <li>Gestion des Entreprises</li>
                        <li>Secretariat bureautique</li>
                        <li>Banque Finance assurance</li>
                        <li>Audit et controle de gestion</li>
                        <li>Gestion des Ressources humaines</li>
                        
                      </ul>
                  </div>
                </div>
            </div>
          </div>
        
        </div>

      </div>
    </section>
      </div>
    </section>
    
  </main><!-- End #main -->
  
</script>
  <?php include("include/footer.php")?>
  </body>
</html>