<?php 
    require('db.php');

    $sql = 'SELECT * FROM gms221';
    
    $preparation = $connexion->prepare($sql);

    $preparation->execute();

    $customer = $preparation->fetchAll(PDO::FETCH_OBJ);

?>
<?php include("include/headerteranga.php");?>

<!-- End Header -->
   
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
      <img src="assets/img/gms.jpg" alt="#" class="d-block" style="width:100%">
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


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Soyez les  <strong>bienvenus sur</strong></h3>
      <h1>TERANGA-ETUDES</h1>
      <h2>CONSEIL & ACOMPAGNEMENT ETUDES AU SENEGAL</h2>
      <a href="#about" class="btn-get-started scrollto">VOTRE REUSSITE NOTRE SACERDOCE</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>A PROPOS DE NOUS</h2>
          <h3>Learn More <span>About Us</span></h3>
          <p>POURQUOI NOUS FAIRE CONFIANCE?</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            QUATRE (04) RAISONS DE NOUS FAIRE CONFIANCE :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Notre agence est composée de consultants qui maitrisent parfaitement leur sujet avec des années d’expérience.</li>
              <li><i class="ri-check-double-line"></i>Nos différentes écoles partenaires sont reconnues par la qualité de leurs formations, leurs diplômés sont recherchés par les employeurs.</li>
              <li><i class="ri-check-double-line"></i>Possibilité de bénéficier chaque année d’étude d’un (01) mois de stage en entreprise grâce à la politique mise en place par certains de nos partenaires.</li>
              <li><i class="ri-check-double-line"></i>La rapidité et la fiabilité de notre procédure</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Commencez votre procédure aujourd’hui pour finir à temps pour la rentrée prochaine.
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
          <p>GENIE MANAGEMENT SOLUTION a mis en place un Programme d’accompagnement dénommé TERANGA-ETUDES qui consiste à accueillir, informer et orienter les étudiants africains désireux de poursuivre leurs études au Sénégal. </p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Accueil, information et Orientation </a></h4>
              <p class="description">Comme tout étranger venu d’un autre pays, nous avons toujours besoin des bonnes informations afin de s’adresser aux personnes ressources pour rendre notre séjour inoubliable. Pour ça, nous nous chargerons de vous accueillir, vous informer et vous orienter durant tout le processus pour une meilleure intégration.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Recherche  d’école de formation</a></h4>
              <p class="description">Etant en partenariat avec les plus grandes écoles de formation privée de Dakar, nous nous chargerons de vous trouver une école de formation avec des enseignements de qualité. De plus, nos agents vous accompagneront pour vos démarches administratives afin de vous assurer une bonne intégration auprès de ses instituts.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-mortarboard"></i></div>
              <h4 class="title"><a href="">Bourse d’étude</a></h4>
              <p class="description">GENIE MANAGEMENT SOLUTION, avec l’accompagnement de ses écoles partenaires, vous assistera pour l’obtention d’une bourse d’étude qui vous permettra d’alléger le coût de scolarité. NB : Les bourses d’études ne concernent pas toutes nos écoles partenaires.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Recherche de logement</a></h4>
              <p class="description">De nos jours, trouver un logement à Dakar fait partie de l’une des problématiques les plus récurrentes pour les  étrangers notamment les étudiants. De ce fait, GENIE MANAGEMENT SOLUTION en partenariat avec des cabinets immobiliers vous facilitera à trouver un logement avant même votre arrivée.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Accueil et accompagnement jusqu’à son logement</a></h4>
              <p class="description">Un agent de Génie Management Solution viendra vous chercher à partir de l’aéroport et vous accompagnement jusqu’à votre domicile.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Accompagnement pour l’inscription pédagogique</a></h4>
              <p class="description">Un agent de GENIE MANAGEMENT SOLUTION vous accompagnera lors de votre inscription pédagogique à l’école pour mieux vous faciliter la tâche.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Accompagnement auprès de son ambassade</a></h4>
              <p class="description">Une fois sur place, vous aurez peut-être besoin d’aller auprès de votre ambassade pour remplir certaines formalités administratives ; et dans ce cas, GENIE MANAGEMENT SOLUTION mettra à votre disposition un agent pour vous accompagner.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <!--<section id="features" class="features">
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
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
    <section id="faq" class="faq">
      <div class="container">



    </section><!-- End F.A.Q Section -->

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Ecole Partenaires</li>
              <li data-filter=".filter-app">Département Sciences et Techniques</li>
              <li data-filter=".filter-card">Département de Gestion et de Management</li>
              <li data-filter=".filter-web">Département de Sant4</li>
            </ul>
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
            <img src="assets/img/CEFAS.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CEFAS</h4>
              <p>Web</p>
              <a href="assets/img/flygms2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/ENSUP.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ENSUP AFRIQUE</h4>
              <p>App</p>
              <a href="assets/img/flygms3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/ozana.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Groupe OZANA </h4>
              <p>Card</p>
              <a href="assets/img/flygms4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/HECM.jng" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>HECM</h4>
              <p>Web</p>
              <a href="assets/img/flygms5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="" class="img-fluid" alt="">
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
    <section id="team" class="team">
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
    <section id="contact" class="contact">
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