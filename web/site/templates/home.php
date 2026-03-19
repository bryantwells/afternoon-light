<?= snippet('_layout/_layout-header'); ?>

<?php $page = $site->pages()->template('splash')->first() ?>
<?php $headers = $page->header()->toStructure()->shuffle() ?>
<?php $header = $headers->first() ?>
<?php $mobile_image = $header->mobile_image()->toFiles()->first() ?>
<?php $desktop_image = $header->desktop_image()->toFiles()->first() ?>
<?php $hours = $page->hours()->toStructure() ?>
<?php $blocks = $page->body()->toBlocks() ?>
 
<view-switcher 
	headers='<?= $page->header()->toStructure()->toJson() ?>' 
	files='<?= $page->files()->toJson() ?>' 
	style="
		--theme-color: <?= $header->color() ?>; 
		--x-offset: <?= $header->x_offset() ?>em; 
		--y-offset: <?= $header->y_offset() ?>em;">

	<style>
		html {
			background-image: url('<?= $mobile_image->url() ?>');
			background-size: cover;
			background-position: center;

			@media (min-width: 600px) {
				background-image: url('<?= $desktop_image->url() ?>');
			}

		}
	</style>

	<header class="Header Header--main">
		<div class="Header-text">
			<h1>Afternoon Light<br>Design Fair</h1>
			<h2>May 16–19, 2026<br>NYC</h2>
		</div>
		<div class="Header-shadow">
			<div>Afternoon Light<br>Design Fair</div>
			<div>May 16–19, 2026<br>NYC</div>
		</div>
	</header>

	<?php foreach ($blocks as $block): ?>
		<?= $block ?>
	<?php endforeach; ?>

	<section class="Block Block--form">
		<Form method="GET" action="https://afternoonlight.artsvp.com/a57962?link=alweb" target="_blank" class="Form--register">
			<button class="Form-button">Get Tickets</button>
		</Form>
	</section>

	<footer class="Footer">
		
		<div class="Footer-column">
			© 2026 Afternoon Light <a href="https://shop.afternoonlight.com/collections/exclusives" target="_blank">Shop</a> <a href="https://instagram.com/afternoonlight" target="_blank">Instagram</a> <a href="mailto:hi@afternoonlight.com">Contact</a> <a href="https://20a4045b.sibforms.com/serve/MUIFAMFhR8jPwKzEfSTnE4IoPmemhCo6Y0ISGg34DVTC6c-CdZC0UO3VqaQbbyKAB-I67X7vWhNkN6v8Bp69VzhVtmiiaSrVDXnp2yllmigbGUssTNaoSrSYeTVET_ohJ-FKDawXjmMkP52QgiooB_nbB14j8vmy1qKA3DoatD1NGd_M8hmlfu3HxVn5CNNILPF6xRsO8RW4NQBg3A==">Subscribe</a>
		</div>
		<div class="Footer-column">
			Pictured: <?= $header->caption() ?>.
		</div>
		
	</footer>

</view-switcher>

<?= snippet('_layout/_layout-footer'); ?>