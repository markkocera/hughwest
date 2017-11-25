<?php
if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="prev-next">
    <?php if($page->hasPrevVisible()): ?>
      <a class="prev" href="<?= $page->prevVisible()->url() ?>" rel="prev">
        <?= (new Asset("assets/images/chevron-left.svg"))->html(['class' => 'prev-img']) ?>
        <span class="prev-next-title"><?= $page->prevVisible()->title()->html() ?></span>
      </a>
    <?php else: ?>
      <span class="prev">&nbsp;</span>
    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
      <a class="next" href="<?= $page->nextVisible()->url() ?>" rel="next" title="">
        <span class="prev-next-title"><?= $page->nextVisible()->title()->html() ?></span>
        <?= (new Asset("assets/images/chevron-right.svg"))->html(['class' => 'next-img']) ?>
      </a>
    <?php else: ?>
      <span class="next">&nbsp;</span>
    <?php endif ?>
  </nav>
<?php endif ?>
