<?php snippet('header') ?>

<h1 class="recipes-header"><?= $page->header() ?></h1>

<main class="container">
	<section class="recipe-list">
		<?php $recipes = $page->children()->sortBy('date', 'desc')->paginate(12) ?>
		<?php foreach($recipes as $recipe): ?>
			<figure class="thumbnail">
				<a class="thumbnail-pic" href="<?= $recipe->url() ?>" style="background-image: url(<?= $recipe->image('hero.jpg')->url() ?>)"></a>
				<figcaption>
					<h3><?= $recipe->title() ?></h3>
					<p><?=  $recipe->introduction()->excerpt(175) ?></p>
				</figcaption>
				<a href="<?= $recipe->url() ?>" class="read-more">The Recipe</a>
			</figure>
		<?php endforeach ?>
	</section>

</main>

<?php snippet('footer') ?>