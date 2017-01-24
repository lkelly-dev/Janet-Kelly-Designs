<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
    <!-- <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="http://www.google.com">Stow, MA</a>
    </li>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>">KellyDesigns87@gmail.com</a>
    </li> -->
  </ul>
</nav>
