<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <!-- <h1><?= $page->title()->html() ?></h1> -->
      <!-- <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div> -->

    </header>
    <p style="text-align: center; font-size: .7em; margin-bottom: -15px;">Click a box to see more photos</p>

    <div class="wrap wide">
      <?php snippet('showcase') ?>
    </div>



    <hr>
  </main>

<?php snippet('footer') ?>
