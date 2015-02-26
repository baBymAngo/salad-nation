<?php snippet('header') ?>

<main>

	<section id="hero" style="background-image: url(<?= $page->image('hero.jpg')->url() ?>)">
		<div class="text-area">
			<h2 class="hero-title"><?= $page->heroTitle() ?></h2>
			<h3 class="hero-subtitle"><?= $page->heroSubtitle() ?></h3>
		</div>		
	</section>

	<section class="recipe-list">
		<h1><?= $page->featuredRecipesTitle() ?></h1>
		<section class="recipes-list container">
			<?php $recipes = $pages->children()->sortBy('date', 'desc')->limit(6) ?>
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
		<a class="button" href="<?= $pages->find('recipes')->url() ?>">More Recipes</a>
	</section>

</main>

<?php snippet('footer') ?>