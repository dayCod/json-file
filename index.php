<?php 

$get_json = file_get_contents('json/pizza.json');
$decode_json = json_decode($get_json, true);
$all_menu = $decode_json["menu"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Pizza Rest with PHP Native</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="WPU - Hut Logo" width="120" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#">All Menu</a>
            <a class="nav-link" href="#">Pizza</a>
            <a class="nav-link" href="#">Dessert</a>
            <a class="nav-link">Drinks</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container mt-3">
      <h3>All Menu</h3>
      <div class="row pt-3">
      <?php foreach ($all_menu as $data): ?>
        <div class="col-md-3">
          <div class="card">
            <img src="img/menu/<?= $data["gambar"] ?>" class="card-img-top" alt="beef-lasagna" />
            <div class="card-body">
              <h5 class="card-title"><?= $data["nama"] ?></h5>
              <p class="card-text"><?= $data["deskripsi"] ?></p>
              <h6>Rp. <?= number_format($data["harga"], 2, ",", "."); ?></h6>
              <a href="#" class="btn btn-dark d-block">Buy Now</a>
            </div>
          </div>
        </div>
      <?php endforeach;?>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
