<?php $image = $block->image()->toFiles()->first(); ?>

<section class="Block Block--headerFigure">
	<header class="Block-header">
		<h2><?= $block->title() ?></h2>
	</header>
	<figure class="HeaderFigure">
		<img class="HeaderFigure-image" src="<?= $image->url() ?>">
		<figcaption class="HeaderFigure-caption">
			<p>
				<?= $block->text() ?>
			</p>
			
		</figcaption>
		<div class="HeaderFigure-credit">
			<?= $image->credit() ?>
		</div>
	</figure>
	
</section>