<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo url('assets/images/logo.png') ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo url('assets/images/logo.png') ?>" type="image/x-icon">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index.css') ?>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="grid">
      <div class="logo">
        <a href="<?= $pages->find('home')->url() ?>">
          <img src="<?php echo url('assets/images/logo.png') ?>"  alt="Logo"/>

      </a>
      </div>
      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </div>

      <p id="tagline">For the Home and Garden</p>


      <?php snippet('menu') ?>

    </div>
    <hr id="header-rule">
    <div class="test" style="padding-top: 3px;
    padding-bottom: 10px;
    color: #a8a5be;
    text-align: center;
    font-size: 20px;">
      <div style="display: inline-block; width: 33.3333%; float:left;">978-857-6505</div>
      <div style="display: inline-block; width: 33.3333%; float:left;">KellyDesigns87@gmail.com</div>
      <div style="display: inline-block; width: 33.3333%; float:left;">Stow, MA</div>

    </div>
  </header>
