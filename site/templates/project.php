<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1 class="project-head"><?= $page->title()->html() ?></h1>
      <!-- <div class="intro text">
        <?= $page->year() ?>
      </div> -->

    </header>

    <div class="text wrap project-text">

      <?= $page->text()->kirbytext() ?>



      <section class="gallery before">
        <h2 class="BA_label">Before</h2>
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->filterBy('filename', '*=', 'before')->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
    </section>


    <section class="gallery after">
      <h3 class="BA_label">After</h3>
    <?php
    // Images for the "project" template are sortable. You
    // can change the display by clicking the 'edit' button
    // above the files list in the sidebar.
    foreach($page->images()->filterBy('filename', '*=', 'after')->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      </figure>
    <?php endforeach ?>
  </section>

    </div>

    <div id="prevnext"><?php snippet('prevnext') ?></div>

    <hr>

  </main>

<?php snippet('footer') ?>
