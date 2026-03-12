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

	<div 
		class="Background"
		style="
			--desktop-image: url('<?= $desktop_image->url() ?>');
			--mobile-image: url('<?= $mobile_image->url() ?>');
		">
	</div>

	<header class="Header Header--main">
		<div class="Header-text">
			<h1>Afternoon Light<br>Design Fair</h1>
			<h2>May 17–19, 2026<br>NYC</h2>
		</div>
		<div class="Header-shadow">
			<div>Afternoon Light<br>Design Fair</div>
			<div>May 17–19, 2026<br>NYC</div>
		</div>
	</header>

	<?php foreach ($blocks as $block): ?>
		<?= $block ?>
	<?php endforeach; ?>

	<section class="Block Block--form">
		<Form method="GET" action="https://ibxkftnv2of.typeform.com/to/MqUj2FGK?typeform-source=afternoonlight.com" target="_blank" class="Form--register">
			<button class="Form-button">Register Interest Now</button>
		</Form>
	</section>

	<footer class="Footer">
		
		<div class="Footer-column">
			© 2026 Afternoon Light <a href="https://shop.afternoonlight.com/collections/exclusives" target="_blank">Shop</a> <a href="https://instagram.com/afternoonlight" target="_blank">Instagram</a> <a href="mailto:hi@afternoonlight.com">Email</a>
		</div>
		<div class="Footer-column">
			Pictured: <?= $header->caption() ?>.
		</div>
		
	</footer>

</view-switcher>

<?= snippet('_layout/_layout-footer'); ?>