<?php include('include/header.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GMS</title>


    

    <!-- Bootstrap core CSS -->

    <style>
      *{
        background-color: #080B3A;
        color: #ffffff;
        font-family: "Times New Roman", Times, serif;
        font-size: 0.9em;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
     


    </style>

    
 
    <link href="css/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="front/fontawesome/css/all.css">
    <script src="css/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dc8de4a567.js" crossorigin="anonymous"></script>

  
  </head>
  <body style="position:relative">
 
<main>

<section>
<div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img src="image/logo.jpeg" class="d-block mx-auto" alt="..."  height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Groupe Management Solution</h5>
        <p >Génie Management Solution est un cabinet privé de conseil et d’orientation  pédagogique qui offre aux élèves, étudiants et professionnels des services de qualité, adaptés à leurs problématiques liées à leurs formations et métiers... <br>
        <a href="public/gmsview.php" class="btn btn-danger">Voir nos services</a>
</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/bourse.jpg" height="400" class="d-block  mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Teranga Etudes</h5>
        <p>Consiste à accueillir, informer et orienter les étudiants africains désireux de poursuivre leurs études au Sénégal.</p>
        <a href="public/teranga.php" class="btn btn-danger">Voir les bourse disponible</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/etude.png" height="400" class="d-block  mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block bg-transparent text-dark">
        <h5  class="bg-transparent text-danger">Formation</h5>
        <p class="bg-transparent text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio et laboriosam, eos saepe, nemo at magni molestias debitis recusandae ratione distinctio rerum illo alias repellat sequi magnam cum, rem ex!.</p>
        <a href="public/teranga.php" class="btn btn-danger">Voir les formations disponible</a>

      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<hr class="featurette-divider">

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<section>
  <div class="container">
    
  <h1 class="text-center">NOS SERVICES</h1>
  <div class="row">

      <div class="col-lg-4">
      <img src="front/icon/accessibility.svg" alt="" class="rounded-circle mx-auto d-block bg-danger" width="140px" height="140px" >
      
        <h2>GENIE MANAGEMENT SOLUTION</h2>
        <p>Conseil et Accompagnement pedagogique Etant en partenariat avec les plus grandes écoles de formation privée de Dakar, nous nous chargerons de vous trouver une école de formation avec des enseignements de qualité. De plus, nos agents vous accompagneront pour vos démarches administratives afin de vous assurer une bonne intégration auprès de ses instituts.</p>
        <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="front/icon/school.svg" alt="" class="rounded-circle mx-auto d-block  bg-danger" width="140px" height="140px" >

        <h2>Teranga Etudes</h2>
        <p>Les formations proposees sont tailllees pour permettre le developpement et l'actualisation des connaissances professionnelles de nos clients au rythme des progres technologiques et du perfectionnements des methodes de travails.</p>
        <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="front/icon/home.svg" alt="" class="rounded-circle mx-auto d-block  bg-danger" width="140px" height="140px" >

        <h2>Logement</h2>
        <p>De nos jours, trouver un logement à Dakar fait partie de l’une des problématiques les plus récurrentes pour les  étrangers notamment les étudiants. De ce fait, GENIE MANAGEMENT SOLUTION en partenariat avec des cabinets immobiliers vous facilitera à trouver un logement avant même votre arrivée.</p>
        
        <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


</section>
<hr class="featurette-divider">

<section>
  <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <h1 class="text-danger">Temoignages</h1>
    <img src="" alt="">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ratione, eius atque sed laudantium quisquam delectus? A magnam veritatis error enim alias, vero, tempore repellendus molestiae recusandae, maxime vitae et!</p>
    </div>
    <div class="col-lg-4">
      <h1 class="text-danger">Contact</h1>
      <div class="card-body">
        <h5 class="card-title">GENIE MANAGEMENT SOLUTION</h5>
        <p class="card-text "><strong> Adresse:</strong> Grand Dakar, Immeuble Pharmacie de l’Emmanuel.<br>
        <strong> BP : </strong> 17855 Dakar – Liberté (Sénégal) <br>
        <strong> Tél Fixe : </strong> (00221) 33 824 21 26 / Mobile : 78 506 77 83 / 77 298 62 61 <br>

        <strong> E-mail : </strong> geniemanagement21@gmail.com</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="col-lg-4">
      <h1 class="text-danger">Ou ? nous trouver ? </h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.0878587997577!2d-17.45737328516566!3d14.707623289734338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172c012788a4d%3A0x58fe25c4ee69c755!2sPharmacie%20de%20l&#39;Emmanuel!5e0!3m2!1sfr!2ssn!4v1651068121723!5m2!1sfr!2ssn" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
      
    </div>
    </div>
  </div>
</section>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; Copyright 
    <?php echo date("Y"); ?> 
 Tous droits réservés.</p>&middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
