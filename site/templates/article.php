<?php snippet('header') ?>

<main class="main" role="main">
  <div class="row">
    <div class="col-6">
      <article class="article">
        <header>
          <h1><?php echo $page->title()->html() ?></h1>
          <?php if( $page->subtitle() ): ?>
            <h3><?= $page->subtitle() ?></h3>
          <?php endif ?>
        </header>

      <?php snippet('coverimage', $page) ?>

      <div class="text">
        <!-- <?php // if( $image = $page->image() ): ?>
        <figure>
          <img src="<?php // echo $image->url() ?>" alt="<?php // echo html($image->title()) ?>">
          <figcaption>
            <span class="caption">
              <?php // echo html($image->caption()) ?>
            </span>
          </figcaption>
        </figure>
      <?php // endif ?> -->
      <?php echo $page->text()->kirbytext() ?>
      </div>
      <?php snippet('tags') ?>
      </article>

    <div class="row">
      <div class="col">
        <?php snippet('social') ?>
        <h4>Related</h4>
        <p>Tags</p>
        <?php snippet('tags') ?>
        <?php snippet('comments') ?>
      </div>
    </div>

    </div>

    <div class="col-4">
      <h4>Col 4</h4>
      <?php snippet('popular-tabs') ?>
    </div>
    <div class="col-2">
      <?php snippet('twitter-sidebar') ?>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <?php snippet('prevnext', ['flip' => true]) ?>
    </div>
  </div>

</main>

<?php snippet('footer') ?>
