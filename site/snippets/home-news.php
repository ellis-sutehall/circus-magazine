<?php $articles = page('news')->children()->visible() ?>
<h2><a href="<?= url('news') ?>">News</a></h2>
<?php if($articles->count() ): ?>
  <?php $i = 0; ?>
  <?php foreach($articles as $article): $i++ ?>
    <?php if( $i <= 5 ): ?>
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
          <?php if( $image ): ?>
            <?php echo thumb($image, array( 'width' => 122, 'height' => 92, 'crop' => true)); ?>
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
  <?php endforeach ?>
<?php else: ?>
  <p>Today there is no news</p>
<?php endif ?>
