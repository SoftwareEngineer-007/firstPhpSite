<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>(OO=[][]=OO)</title>
</head>

<body>

<?php require "blocks/header.php" ?>

<div class="container mt-5">
  <h3 class="mb-5">Our articles</h3>
  
  <div class="d-flex flex-wrap">
  <?php
    for($i = 0; $i < 5; $i++):
  ?>

  <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal">Text</h4>
      </div>
      <div class="card-body">
        <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
         <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-outline-primary">More details</button>
      </div>
  </div>

  <?php endfor; ?>
  </div>
</div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2024 Sancho, Inc</p>
  </footer>
</div>

</body>
</html>