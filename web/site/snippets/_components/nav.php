<nav class="MainNav">
	<details class="MainNav-details">
		<summary class="MainNav-summary">
			<span class="MainNav-summaryText MainNav-summaryText--desktop">
				Menu
			</span>
			<span class="MainNav-summaryText MainNav-summaryText--mobile">
				☰
			</span>
		</summary>
		<ul class="MainNav-list">
			<li class="MainNav-item">
				<a href="/">Home</a>
			</li>
			<li class="MainNav-item">
				<a href="/exhibitors">Exhibitors</a>
			</li>
			<li class="MainNav-item">
				<a href="/about">About</a>
			</li>
			<li class="MainNav-item">
				<a href="">Tickets</a>
			</li>
		</ul>
	</details>
	<?php if ($page->title() != 'Home'): ?>
		<div class="MainNav-item MainNav-item--back">
			<span class="MainNav-itemText MainNav-itemText--desktop">
				<a href="/">Back</a>
			</span>
			<span class="MainNav-itemText MainNav-itemText--mobile">
				<a href="/">←</a>
			</span>
		</div>
	<?php endif; ?>
	<footer class="Footer">
		<div class="Footer-columns">
			<?php foreach ($site->footer_columns()->toBlocks() as $footerColumn): ?>
				<div class="Footer-column">
					<?= $footerColumn->text() ?>
				</div>
			<?php endforeach; ?>
		</div>	
	</footer>
</nav>