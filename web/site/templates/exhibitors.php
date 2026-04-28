<?= snippet('_layout/_layout-header'); ?>
<?php $exhibitors = $page->children() ?>

<style>
	html {
		--theme-color: <?= $site->color() ?>; 
		background-color: #ede8e1;
		color: var(--theme-color);
	}
</style>

<?= snippet('_components/nav'); ?>

<header class="Header Header--page">
	<div class="Header-text">
		<h1>Afternoon Light: <?= $page->title() ?></h1>
	</div>
</header>

<section class="Content Content--page">
	<div class="Block Block--exhibitors">			
		<?php foreach ($exhibitors as $exhibitor): ?>
			<?php $image = $exhibitor->image() ?>
			<details class="Exhibitor">
				<summary class="Exhibitor-summary">
					<h2><?= $exhibitor->title() ?></h2>
					<p><?= $exhibitor->location() ?></p>
				</summary>
				<div class="Exhibitor-body">
					<img class="Exhibitor-image" src="<?= $image->url() ?>">
					<div class="u-bodyText">
						<?= $exhibitor->description() ?>
						<p>
							<a href="<?= $exhibitor->link()->url() ?>" target="_blank">Website</a>
						</p>
					</div>
				</div>
			</details>
		<?php endforeach; ?>
	</div>
</section>

<?= snippet('_layout/_layout-footer'); ?>