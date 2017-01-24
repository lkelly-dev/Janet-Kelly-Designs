<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap">

      <header>
        <!-- <h1><?= $page->title()->html() ?></h1> -->
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
      </header>
    </div>

    <div>
      <div class="pic_column">
        <img class="showroom picmobile" src="<?= image('showroom1.jpg')->url() ?>"  alt="Showroom"/>
        <img class="showroom picnonmobile" src="<?= image('dining.jpg')->url() ?>"  alt="Dining room"/>
        <img class="showroom picnonmobile" src="<?= image('plants.jpg')->url() ?>"  alt="Plants"/>
        <img class="showroom picnonmobile" src="<?= image('circle.jpg')->url() ?>"  alt="Circle"/>
      </div>

      <div class="text_column">
        <div class="text service_text">
          <?= $page->text()->kirbytext() ?>
        </div>
        <br>
        <div id="note">
          <?= $page->note()->kirbytext() ?>
        </div>
      </div>
    </div>

    <hr>

  </main>

<?php snippet('footer') ?>
