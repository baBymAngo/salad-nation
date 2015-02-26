<?php snippet('header') ?>

<main id="about">
	<section id="hero" style="background-image: url(<?= $page->image('hero.jpg')->url() ?>)"></section>

	<div class="container">
		<h1><?= $page->title() ?></h1>
		<p><?= kirbytext( $page->text() ) ?></p>
		<a href="<?= $pages->find('contact')->url() ?>" class="button">Contact Me</a>
	</div>
</main>

<?php snippet('footer') ?>