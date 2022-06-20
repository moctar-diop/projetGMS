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
  <!----------style----------->
  <style>
    body {
 color: lightcyan;
    background-color: #05094d!important;
  }
  *{
    color:#f1f1f1;
  }
  p{
    text-align:justify;

  }
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#heros {
    width: 100%;
    height: 100vh;
    background: url("assets/img/gms-cover.jpg") top center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }
#heros:before {
    content:"";
    background: rgba(0, 0, 0, 0.6);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}

#heros .hero-container {
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
#heros h3 {
    background: rgba(255, 255, 255, 0.1);
    color: #f1f1f1;
    font-size: 30px;
    padding: 10px 30px;
    margin-bottom: 30px;
    border-radius: 50px;
}
#heros h1  {
    margin: 0 0 10px 0;
    font-size: 50px;
    font-weight: 700;
    line-height: 60px;
    text-transform: uppercase;
    color: #fff;
}
#heros h2 {
    color: #eee;
    margin-bottom: 50px;
    font-size: 30px;
}
#heros .btn-get-started {
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
#heros .btn-get-started:hover {
    background: #fff;
    border: 2px solid #e43c5c;
    color: #e43c5c;
}
@media (min-width: 1024px) {
    #heros {
      background-attachment: fixed;
    }
  }
  @media (max-width: 768px) {
    #heros h3 {
      font-size: 22px;
    }
    #heros h1 {
      font-size: 28px;
      line-height: 36px;
    }
    #heros h2 {
      font-size: 18px;
      line-height: 24px;
      margin-bottom: 30px;
    }
  }
  @media (max-height: 500px) {
    #heros {
      height: 150vh;
    }
  }
  </style>
</head>
<body>

  <!-- ======= Hero Section ======= -->
  <section id="heros">
    <div class="hero-container">
      <h3>Soyez les  <strong>bienvenus </strong></h3>
      <h1>Génie Management Solution</h1>
      <h2>CONSEIL & ACOMPAGNEMENT ETUDES AU SENEGAL</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
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
        <div class="section-title">
          <h2 class="badge rounded-pill bg-success text-dark">Mission</h2>
          <h3>ET  <span>QUE POUVONS-NOUS FAIRE POUR VOUS ?</span></h3>
          <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50px" height="30px" style="color:#eee"><path d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"/></svg>Contribuer a une perfomance acrue des projets de developpement par une meilleur formation et gestion de nos ressources et le renformcement de capacite.</p>

            <h3>CONTEXTE</h3>
            <p>
            Faire beneficier a notre clientel des meilleurs pratiques dans leurs domaines de competences et leur transmettre les connaissances et savoir faire les plus avancees.</p>
           
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
      <div class="section-title row">
         <h2 class="badge rounded-pill bg-danger text-dark"  id="formation"> FORMATIONS GMS</h2>
         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/portfolio/formations0.jpg" class="d-block w-100" height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/portfolio/formations3.jpg" class="d-block w-100" height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/portfolio/formations1.jpg" class="d-block w-100" height="500" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
         
   
    </div>   
        <div class="row">
          <div class=" col-md-4 col-6 col-6">
          <div class="icon-box bg-light row justify-content-center">
            <h3 class="text-center"> <span class="badge bg-danger"> Bureautique </span></h3><a class="btn btn-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#bureautique" aria-expanded="false" aria-controls="collapseExample">
            <img src="assets/img/flyers/bureautiques.jpg" alt="" srcset="" width="100%" height="375">

</a>
           
                <div class="collapse" id="bureautique">
                  <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                  </div>
                </div></div>
          </div>
          <div class=" col-md-4 col-6">
            <div class="icon-box bg-light row justify-content-center">
            <h3 class="text-center"> <span class="badge bg-danger">Parole </h3><a class="btn btn-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#parole" aria-expanded="false" aria-controls="collapseExample">
            <img src="assets/img/flyers/paroles.jpg" alt="" srcset="" width="100%" height="375">

</a>
           
                <div class="collapse" id="parole">
                  <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                  </div>
                </div></div>
          </div>
          <div class="col-md-4  ">
          <div class="icon-box bg-light row justify-content-center">
            <h3 class="text-center"> <span class="badge bg-danger">Anglais </h3><a class="btn btn-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#anglais" aria-expanded="false" aria-controls="collapseExample">
            <img src="assets/img/flyers/english.jpg" alt="" srcset="" width="100%" height="375">

</a>
           
                <div class="collapse" id="anglais">
                  <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                  </div>
                </div></div>
          </div>
          <div class="col-md-4 col-6 mt-4 ">
          <div class="icon-box bg-light row justify-content-center">
            <h3 class="text-center"> <span class="badge bg-danger">Montage Video </h3><a class="btn btn-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#montage" aria-expanded="false" aria-controls="collapseExample">
            <img src="assets/img/flyers/montages.jpg" alt="" srcset="" width="100%" height="375">

</a>
           
                <div class="collapse" id="montage">
                  <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                  </div>
                </div></div>
          </div>
          <div class="col-md-4 col-6 mt-4">
          <div class="icon-box bg-light row justify-content-center">
            <h3 class="text-center"> <span class="badge bg-danger">Permis  de conduire</h3><a class="btn btn-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#autoecole" aria-expanded="false" aria-controls="collapseExample">
            <img src="assets/img/flyers/autoecole.jpg" alt="" srcset="" width="100%" height="375">

</a>
           
                <div class="collapse" id="autoecole">
                  <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                  </div>
                </div></div>
          </div>
          <div class=" col-md-4 col-6 mt-4">
          <div class="icon-box bg-light row justify-content-center">
            <h3 class="text-center"> <span class="badge bg-danger">Marketing Digital </span></h3><a class="btn btn-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#marketing" aria-expanded="false" aria-controls="collapseExample">
            <img src="assets/img/flyers/marketing-digital.jpg" alt="" srcset="" width="100%" height="375">

</a>
           
                <div class="collapse" id="marketing">
                  <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                  </div>
                </div></div>
          </div>
        
        </div>

      </div>
    </section><!-- End Features Section -->

  <section>
    <div class="container text-center" id="preinscription">
      <h1>Preinscription au Canada</h1>
    <img src="assets/img/flyers/canadaa.jpg">

    </div>
  </section>


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 class="badge rounded-pill bg-danger text-dark"  id="immigration">IMMIGRATION CANADA</h2>

          <h3 class="fw-bold text-decoration-underline">TRAVAILLEURS </h3> <br>
          <h3><span>CONDITIONS D'ADMISSIONS</span></h3>
          <p> Vous souhaitez immigrer au Canada en tant que travailleur, le programme d’entré express est un excellent moyen d’y parvenir, sans doute le plus rapide. Tout ce que vous avez à faire c’est de vous assurer de remplir les conditions fixées par  le gouvernement fédéral. Ces conditions sont basées sur l’âge, le niveau de scolarité, le nombre d’année d’expérience professionnelle, l’adaptabilité que vous ayez une famille ou non, l’offre d’emploi et les compétences linguistiques. Si vous remplissez les critères pour le premier niveau décrit qui est l’éligibilité, dans ce cas-là, vous pourrez être inscrit dans le bassin de sélection du programme d’entré express et une fois que vous avez été sélectionné, la procédure ne prend que 06 mois. Si vous souhaitez entamer votre procédure,  nous vous proposons de nous rencontrer afin d’avoir tous les éléments en rapport avec l’entré express au Canada.</p>
         <!-- <h3>Contexte du projet <span>TERANGA-ETUDES</span></h3>-->
          <h3 class="fw-bold text-decoration-underline">COMMERCANTS  <br>
          <h3><span>CONDITIONS D'ADMISSIONS</span></h3>
          <p >Si vous êtes et que vous avez les documents prouvant votre activité, vous pourriez demander un visa visiteur ou touristique au Canada qui et un visa renouvelable et qui vous permettra de  d’exercer librement et en toute légalité vos activités au Canada. 
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