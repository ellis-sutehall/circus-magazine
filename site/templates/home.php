<?php snippet('header') ?>

<h1>Hi, I'm the homepage :)</h1>

<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="featured">
        <h3>Featured</h3>
      </div>
      <?php snippet('home-comment') ?>
    </div>
    <div class="col-4">
      <?php snippet('home-news') ?>
    </div>
    <div class="col-2 third">
      <h3>This will be the advert column</h3>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
