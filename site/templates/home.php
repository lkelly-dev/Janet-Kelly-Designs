<?php snippet('header') ?>

  <main class="main" role="main">
    <header class="wrap">
      <div class="slider">

        <!-- <p id="kitchen-text">Serving MetroWest Boston and Worcester MA</p> -->
        <img src="<?= image('bathroom.jpg')->url() ?>"  alt="Image slider"/>
      </div>
      <div class="intro text elsie">
        <!-- <?= $page->intro()->kirbytext() ?> -->
      </div>
      <!-- <hr /> -->
    </header>


    <h2 style="font-size: 1.5rem;">Latest Projects</h2>
    <p id="kitchen-text">One of the most requested services for KellyDesigns is the kitchen and bath layout.</p>
    <div class="beforeafter">
      <img class="beforeafter-pics" src="<?= image('before.JPG')->url() ?>"  alt="Before"/>
      <img class="beforeafter-pics" src="<?= image('after.jpg')->url() ?>"  alt="After"/>
    </div>
    <p class="intro text elsie">Before and after of a kitchen renovation layout in Stow.</p>
    <p class="projects-section-more">
      <a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a>
    </p>


    <hr>

  </main>

<?php snippet('footer') ?>
