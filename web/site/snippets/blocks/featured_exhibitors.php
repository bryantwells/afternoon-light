<section class="Block Block--featuredExhibitors">
	<header class="Block-header">
		<h2>Featured Exhibitors</h2>
	</header>
	<div class="FeaturedExhibitors">
		<?php foreach ($block->exhibitors()->toStructure() as $exhibitor): ?>
			<?php $image = $exhibitor->image()->toFiles()->first() ?>
			<figure class="FeaturedExhibitors-figure">
				<img class="FeaturedExhibitors-image" src="<?= $image->url() ?>">
				<figcaption class="FeaturedExhibitors-caption">
					<?= $exhibitor->name() ?>
				</figcaption>
			</figure>
		<?php endforeach; ?>
	</div>
</section>