<?php if($image = $item->coverimage()->toFile()): ?>
  <figure>
    <img src="<?= $image->url() ?>" alt="" />
    <?php //$news_page = $page->id('news') ?>
    <?php if( $page->id() != 'news' && $page->id() != 'blogs' ): ?>
    <figcaption>
      <span class="caption"><?= html($image->caption()) ?></span>
    </figcaption>
  <?php endif ?>
  </figure>
<?php endif ?>
