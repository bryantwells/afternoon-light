<section class="Block Block--heading">
	<div class="Header">
		<div class="Header-text">
			<<?= $level = $block->level()->or('h2') ?>>
				<?= $block->text() ?>
			</<?= $level ?>>
		</div>
		<div class="Header-shadow">
			<<?= $level = $block->level()->or('h2') ?>>
				<?= $block->text() ?>
			</<?= $level ?>>
		</div>
	</div>
</section>