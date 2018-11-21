<?php if($pagination->hasPages()): ?>
  <nav class="pagination-wrapper">

    <?php if($pagination->hasPrevPage()): ?>
      <div>
      <a class="" href="<?= $pagination->prevPageURL() ?>" rel="prev" title="newer articles">
        <?= (new Asset("assets/images/arrow-left.svg"))->content() ?>
      </a>
      </div>
    <?php else: ?>
      <div>
      <span class="">
        <?= (new Asset("assets/images/arrow-left.svg"))->content() ?>
      </span>
      </div>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
      <a class="" href="<?= $pagination->nextPageURL() ?>" rel="next" title="older articles">
        <?= (new Asset("assets/images/arrow-right.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class="">
        <?= (new Asset("assets/images/arrow-right.svg"))->content() ?>
      </span>
    <?php endif ?>

  </nav>
<?php endif ?>
