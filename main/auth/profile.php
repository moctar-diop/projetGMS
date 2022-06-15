<?php
include "../include/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/styles.css" rel="stylesheet">
  <style>
    body{
      overflow: scroll;
    }
    .btn-infos{
      background-color: #060f58;
      color: white;
    }
    label {
        color: #fff;
    }
  </style>
</head>
<body>

<div class="container mt-5 col-5">
  <h2>Profile</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="form2Example18">Nom:</label>
      <input type="text" class="form-control" id="nom" placeholder="Enter Nom" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="form2Example18">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="pays">Pays:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="telephone">Telephone:</label>
      <input type="email" class="form-control" id="telephone" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

</body>
</html>
<?php
include "../include/footer.php"; ?>
