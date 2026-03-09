<?= snippet('_layout/_layout-header'); ?>

<?php $page = $site->pages()->template('splash')->first() ?>
<?php $headers = $page->header()->toStructure()->shuffle() ?>
<?php $header = $headers->first() ?>
<?php $image = $header->image()->toFiles()->first() ?>
<?php $hours = $page->hours()->toStructure() ?>

<style>
	html {
		--theme-color: <?= $header->color() ?>;
		--x-offset: <?= $header->x_offset() ?>em;
		--y-offset: <?= $header->y_offset() ?>em;
	}
</style>
 
<view-switcher 
	headers='<?= $page->header()->toStructure()->toJson() ?>' 
	files='<?= $page->files()->toJson() ?>' 
	style="--theme-color: <?= $header->color() ?>; --x-offset: <?= $header->x_offset() ?>em; --y-offset: <?= $header->y_offset() ?>em;" >

	<div class="Background">
		<img class="Background-image" src="<?= $image->url() ?>" alt="<?= $header->caption() ?>">
	</div>

	<main class="Main">

		<header class="Header Header--main">
			<div class="Header-title">
				<h1>Afternoon Light<br>Design Fair</h1>
				<h2>May 17–19, 2026<br>NYC</h2>
			</div>
			<div class="Header-shadow">
				<div>Afternoon Light<br>Design Fair</div>
				<div>May 17–19, 2026<br>NYC</div>
			</div>
		</header>

		<section class="Section">
			<div class="Section-container">
				<div class="Section-description u-bodyText">
					<?= $page->event_description()->kt() ?>
				</div>
				<dl class="Hours">
					<?php foreach ($hours as $hour): ?>
						<div class="Hours-item">
							<dt class="Hours-title">
								<?= $hour->title() ?>
							</dt>
							<dd class="Hours-description u-bodyText">
								<?= $hour->description() ?>
							</dd>
						</div>
					<?php endforeach; ?>
				</dl>
			</div>
		</section>

		<section class="Header Header--section">
			<div class="Header-title">
				<div>
					WSA<br>
					161 Water Street,<br>
					New York, NY 10038
				</div>
			</div>
			<div class="Header-shadow">
				<div>
					WSA<br>
					161 Water Street,<br>
					New York, NY 10038
				</div>
			</div>	
		</section>

		<section class="Section">
			<div class="Section-container">
				<div class="Section-description u-bodyText">
					<?= $page->venue_description()->kt() ?>
				</div>
				<div>
					<p>Join our email list for updates:</p>
					<br>
					<form class="Form">
						<input class="Form-input" type="email" name="Email">
						<button class="Form-button">Submit</button>
					</form>
				</div>
			</div>
		</section>

	</main>

	<footer class="Footer">
		<p>©2026 Afternoon Light <a href="#">Shop</a> <a href="#">Instagram</a> <a href="#">Colophon</a></p>
	</footer>
</view-switcher>

<?= snippet('_layout/_layout-footer'); ?>