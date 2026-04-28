<section class="Block Block--faq">
	<header class="Block-header">
		<h2><?= $block->title() ?></h2>
	</header>
	<div class="Block-body">
		<?php foreach ($block->faq()->toStructure() as $faq): ?>
			<details class="FAQ">
				<summary class="FAQ-question">
					<?= $faq->question() ?>
				</summary>
				<div class="FAQ-answer">
					<?= $faq->answer() ?>
				</div>
			</details>
		<?php endforeach; ?>
	</div>
</section>