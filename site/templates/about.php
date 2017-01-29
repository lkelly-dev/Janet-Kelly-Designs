<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap">





    <div id="about_page">
      <div class="about_pic_column">
        <img class="about_pic picmobile" src="<?= image('janet.jpg')->url() ?>"  alt="Janet"/>
      </div>

      <div class="about_text_column">
        <div class="text about_service_text">
          <?= $page->text()->kirbytext() ?>
        </div>
        <br>
        <div id="note">
          <?= $page->note()->kirbytext() ?>
        </div>
      </div>
      <div style="clear:both"></div>
    </div>



    <h2 style="font-size: 1.5rem; margin: 0rem;">Affiliations</h2>
    <div class="affiliate-container">
    <img class="affiliates" src="<?= image('affiliate1.jpg')->url() ?>"  alt="Janet"/>
    <img class="affiliates" src="<?= image('affiliate2.png')->url() ?>"  alt="Janet"/>
  </div>

  <div class="intro text small-text" id="elsie">
    <?= $page->intro()->kirbytext() ?>
  </div>
    <hr>

  </div>

  </main>

<?php snippet('footer') ?>
