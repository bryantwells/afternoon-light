<?php $rows = $block->rows()->toStructure(); ?>

<section class="Block Block--table">
	<dl class="Table">
		<?php foreach ($rows as $row): ?>
			<div class="Table-item">
				<dt class="Table-title">
					<?= $row->title() ?>
				</dt>
				<dd class="Table-description u-bodyText">
					<?= $row->description() ?>
				</dd>
			</div>
		<?php endforeach; ?>
	</dl>
</section>
