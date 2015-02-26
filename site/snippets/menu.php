<nav id="main-menu">
    <?php foreach($pages->visible() as $p): ?>
      <a href="<?php echo $p->url() ?>" class="menu-item"><?php echo $p->title()->html() ?></a>
    <?php endforeach ?>
</nav>
