<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/custom.css">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <p><?= date("d/m/Y") ?></p>
      </div>
      <div class="col-sm">
        <p>Twitter</p>
      </div>
      <div class="col-sm">
        <form action="">
            <input type="text">
            <input type="submit" >
          </form>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <a href="<?= url() ?>" rel="home">
          <img class="logo" src="<?= kirby()->urls()->assets() . '/images/circus-magazine-logo.jpg' ?>" alt="">
        </a>
      </div>
    </div>
    <div class="col-sm">
      <?php snippet('main-nav') ?>
    </div>
