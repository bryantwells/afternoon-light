<?= snippet('_layout/_layout-header'); ?>

<?php $page = $site->pages()->template('splash')->first() ?>
<?php $header = $page->header()->toStructure()->first() ?>
<?php $image = $header->image()->toFiles()->first() ?>
<?php $hours = $page->hours()->toStructure() ?>

<style>
	html {
		--theme-color: <?= $header->color() ?>
	}
</style>

<header class="Header">
	<h1 class="Header-title">
		Afternoon Light<br>
		Design Fair
	</h1>
	<h2 class="Header-subtitle">
		May 17–19, 2026
	</h2>
	<figure class="Header-figure">
		<img class="Header-image" src="<?= $image->url() ?>" alt="<?= $header->caption()->kt() ?>">
		<figcaption class="Header-caption">
			<?= $header->caption()->kt() ?>
		</figcaption>
	</figure>
</header>

<section class="Page">
	<div class="Page-description u-bodyText">
		<?= $page->description()->kt() ?>
	</div>
	<dl class="Hours">
		<?php foreach ($hours as $hour): ?>
			<div class="Hours-item">
				<dt class="Hours-title">
					<?= $hour->title() ?>
				</dt>
				<dd class="Hours-description">
					<?= $hour->description() ?>
				</dd>
			</div>
		<?php endforeach; ?>
	</dl>
	<footer class="Page-footer">
		<p class="Page-address">
			WSA<br>
			161 Water Street,<br>
			New York, NY 10038
		</p>
	</footer>
</section>

<?= snippet('_layout/_layout-footer'); ?>