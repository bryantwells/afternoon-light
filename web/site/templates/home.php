<?= snippet('_layout/_layout-header'); ?>

<?php $headers = $page->headers()->toStructure()->shuffle() ?>
<?php $header = $headers->first() ?>
<?php $mobile_header_image = $header->mobile_image()->toFiles()->first() ?>
<?php $desktop_header_image = $header->desktop_image()->toFiles()->first() ?>
<?php $blocks = $page->body()->toBlocks() ?>

<style>
	html {
		--theme-color: <?= $header->mobile_color() ?>; 
		--x-offset: <?= $header->mobile_x_offset() ?>em; 
		--y-offset: <?= $header->mobile_y_offset() ?>em;

		@media (min-width: 800px) {
			--theme-color: <?= $header->desktop_color() ?>; 
			--x-offset: <?= $header->desktop_x_offset() ?>em; 
			--y-offset: <?= $header->desktop_y_offset() ?>em;
		}
	}
	body {
		&::before {
			background-image: url('<?= $mobile_header_image->url() ?>');

			@media (min-width: 600px) {
				background-image: url('<?= $desktop_header_image->url() ?>');
			}
		}
	}
	.MainNav svg {
		fill: white;
	}
</style>

<?= snippet('_components/nav'); ?>

<header class="Header Header--home">
	<div class="Header-text">
		<h1>
			Afternoon Light<br>
			Design Fair<br>
			16–19 May, 2026<br>
			NYC
		</h1>
	</div>
	<div class="Header-shadow" aria-hidden="true">
		<div>
			Afternoon Light<br>
			Design Fair<br>
			16–19 May, 2026<br>
			NYC
		</div>
	</div>
</header>

<section class="Content Content--home">
	<?php foreach ($blocks as $block): ?>
		<?= $block ?>
	<?php endforeach; ?>
</section>

<?= snippet('_layout/_layout-footer'); ?>