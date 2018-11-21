<ul class="tags">
  <?php foreach($tags as $tag): ?>
  <li>
    <a href="<?= url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>">
      <?= html($tag) ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>
