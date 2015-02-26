<?php snippet('header') ?>

<?php
 	 
	$query = $_POST['search'];
	$results = $site->search( $query )->filterBy('template', 'recipe')->paginate(12);
?>

<?php if ( isset($results) && ($results->count() !== 0) ): ?>
	<h1 class="recipes-header"><?= $results->count() ?> recipe<?php if($results->count()!==1) echo "s" ?> matched '<?= $query ?>' :</h1>
<?php endif ?>

<main class="container">
	
	<?php if ( $results->count() == 0 ): ?>
		<h1 class="no-results">Sorry! No results for '<?= $query ?>'</h1>
		<p class="recipes-cta">Try a different keyword or <a href="<?= $pages->find('recipes')->url() ?>">browse all recipes</a>.</p>
	<?php endif ?>

	<?php if ( $results->count() != 0 ): ?>
		<section class="recipe-list">
			<?php foreach($results as $result): ?>
				<figure class="thumbnail">
					<a class="thumbnail-pic" href="<?= $result->url() ?>" style="background-image: url(<?= $result->image('hero.jpg')->url() ?>)"></a>
					<figcaption>
						<h3><?= $result->title() ?></h3>
						<p><?=  $result->introduction()->excerpt(175) ?></p>
					</figcaption>
					<a href="<?= $result->url() ?>" class="read-more">The Recipe</a>
				</figure>	
			<?php endforeach ?>
		</section>
	<?php endif ?>

</main>

<?php snippet('footer') ?>