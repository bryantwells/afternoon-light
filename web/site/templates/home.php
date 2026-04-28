<?= snippet('_layout/_layout-header'); ?>

<?php $headers = $page->headers()->toStructure()->shuffle() ?>
<?php $header = $headers->first() ?>
<?php $mobile_header_image = $header->mobile_image()->toFiles()->first() ?>
<?php $desktop_header_image = $header->desktop_image()->toFiles()->first() ?>
<?php $blocks = $page->body()->toBlocks() ?>

<style>
	html {
		--theme-color: <?= $header->color() ?>; 
		--x-offset: <?= $header->x_offset() ?>em; 
		--y-offset: <?= $header->y_offset() ?>em;
	}
	body {
		&::before {
			background-image: url('<?= $mobile_header_image->url() ?>');

			@media (min-width: 600px) {
				background-image: url('<?= $desktop_header_image->url() ?>');
			}
		}
	}
</style>

<?= snippet('_components/nav'); ?>

<header class="Header Header--home">
	<div class="Header-text">
		<h1>Afternoon Light<br>Design Fair</h1>
		<p>16–19 May, 2026<br>NYC</p>
	</div>
	<div class="Header-shadow" aria-hidden="true">
		<div>Afternoon Light<br>Design Fair</div>
		<div>16–19 May, 2026<br>NYC</div>
	</div>
</header>

<section class="Content Content--home">
	<?php foreach ($blocks as $block): ?>
		<?= $block ?>
	<?php endforeach; ?>
</section>

<?= snippet('_layout/_layout-footer'); ?>