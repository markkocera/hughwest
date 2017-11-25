<?php if($pagination->hasPages()): ?>
  <nav class="pagination">
    <?php if($pagination->hasPrevPage()): ?>
      <a class="prev" href="<?= $pagination->prevPageURL() ?>" rel="prev">
        <?= (new Asset("assets/images/chevron-left.svg"))->html(['class' => 'prev-img']) ?>
      </a>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
      <a class="next" href="<?= $pagination->nextPageURL() ?>" rel="next">
        <?= (new Asset("assets/images/chevron-right.svg"))->html(['class' => 'next-img']) ?>
      </a>
    <?php endif ?>
  </nav>
<?php endif ?>
