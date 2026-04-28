<?php $footerLinks = $site->footer_links()->toStructure() ?>

<footer class="Footer">

	<header class="Header Header--footer">
		<div class="Header-text">
			<?= $site->footer_header() ?>
		</div>
		<div class="Header-shadow" aria-hidden="true">
			<?= $site->footer_header() ?>
		</div>
	</header>

	<div class="Footer-columns">
		<?php foreach ($site->footer_columns()->toBlocks() as $footerColumn): ?>
			<div class="Footer-column">
				<?= $footerColumn->text() ?>
			</div>
		<?php endforeach; ?>
	</div>	

</footer>

<script src="/assets/js/main.js?v=<?= rand() ?>"></script>
</body>
</html>