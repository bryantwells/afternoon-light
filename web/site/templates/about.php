<?= snippet('_layout/_layout-header'); ?>

<?php $blocks = $page->body()->toBlocks() ?>

<style>
	html {
		--theme-color: <?= $site->color() ?>; 
		background-color: #f4f0e9;
		color: var(--theme-color);
	}
</style>

<?= snippet('_components/nav'); ?>

<header class="Header Header--page">
	<div class="Header-text">
		<h1><?= $page->title() ?></h1>
	</div>
</header>

<section class="Content Content--page">
	<?php foreach ($blocks as $block): ?>
		<?= $block ?>
	<?php endforeach; ?>
</section>

<?= snippet('_layout/_layout-footer'); ?>