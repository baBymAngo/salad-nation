<?php snippet('header-single') ?>

<main>

<section class="article-hero" style="background-image: url(<?= $page->image('hero.jpg')->url() ?>)"></section>

<article class="container">
	<h1 class="single-title"><?= $page->title() ?></h1>
	<?php $published = strtotime( $page->published() ) ?>
	<time class="article-date"><?= date('F j, Y', $published)?></time>
	<p class="article-intro"><?= $page->introduction() ?></p>

	<section class="recipe">
		<img class="recipe-thumbnail" src="<?= $page->image('thumbnail.jpg')->url() ?>" alt="">
		<h2><?= $page->title() ?></h2>
		<small class="servings">Serves <?= $page->servings() ?></small>
		<?php $ingredients = yaml($page->ingredients()) ?>
		<ul class="ingredients">
			<?php foreach($ingredients as $ingredient): ?>
				<li class="ingredient"><?= $ingredient['ingredient'] ?></li>
			<?php endforeach ?>
		</ul>
		<p class="instructions"><?= kirbytext($page->instructions() ) ?></p>
	</section>
	
	<div id="disqus_thread"></div>
    
</article>


</main>

<!-- <aside class="sidebar">
	<a href="/">Salad Nation</a>
	<nav class="sidebar-tags">
		
	</nav>
</aside> -->

<?= js('assets/js/vendors/disqus.js') ?>
<?php snippet('footer') ?>