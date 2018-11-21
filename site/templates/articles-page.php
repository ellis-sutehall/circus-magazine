<?php snippet('header') ?>

<main class="main" role="main">
  <div class="row">
    <div class="col">
      <header>
        <h1><?php echo $page->title()->html() ?></h1>
        <?php
        if( $pagination->page() == 1 ):
        ?>
        <div class="intro text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>
      </header>
    </div>
  </div>

  <div class="row">
    <!-- Get Article Count -->
    <?php if($articles->count() ): ?>
    <?php $i = 0; ?>
      <?php foreach ($articles as $article): $i++ ?>
        <?php if( $i == 1 ): ?>
        <div class="col-6 left">
          <article class="article first-article">
            <header class="article-header">
              <p><?php // echo $i; ?></p>
              <a href="<?php echo $article->url() ?>">
                <?php snippet('coverimage', $article) ?>
              </a>
              <h2 class="article-title">
                <a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a>
              </h2>
            </header>
            <div class="text">
              <p>
                <?php // echo $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <?= $article->intro() ?>
                <!-- <a class="article-more" href="<?php // echo $article->url() ?>">Read More</a> -->
              </p>
              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
            </div>
          </article>
        <?php else: ?>
          <article class="article index">
            <header class="article-header">
              <p><?php // echo $i; ?></p>
              <h2 class="article-title">
                <a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a>
              </h2>
            </header>
            <div class="flex">
              <a href="<?= $article->url() ?>">
                <?php $image = $article->image() ?>
                <?php if($image): ?>
                  <?= thumb($image, array( 'width' => 122, 'height' => 92, 'crop' => true)); ?>
                <?php endif ?>
              </a>
              <div class="text">
                <p>
                  <?php // echo $article->text()->kirbytext()->excerpt(50, 'words') ?>
                  <?= $article->intro() ?>
                  <!-- <a class="article-more" href="<?php // echo $article->url() ?>">Read More</a> -->
                </p>
                <p class="article-date"><?= $article->date('F jS, Y') ?></p>
                </div>
            </div>
          </article>
        <?php endif ?>
          <?php if( $i == 3 ): ?>
          </div>
        <?php endif ?>
        <?php if( $i == 3 ): ?>
          <div class="col-4 right">
        <?php endif ?>
        <?php if( $i == 7 ): ?>
          </div>
        <?php endif ?>
      <?php endforeach ?>
    <?php else: ?>
    <p>This page does not contain any articles yet.</p>
    <?php endif ?>
    <div class="col-2 third">
      <h3>This will be the advert column</h3>
    </div>
  </div>

  <?php snippet('pagination') ?>

</main>

<?php snippet('footer') ?>
