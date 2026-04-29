<nav class="MainNav">
	<details class="MainNav-details">
		<summary class="MainNav-summary">
			<span class="MainNav-summaryText MainNav-summaryText--desktop">
				Menu
			</span>
			<span class="MainNav-summaryText MainNav-summaryText--mobile">
				<svg viewbox="0 0 100 80">
					<rect x="0" y="0" width="100" height="10"/>
					<rect x="0" y="35" width="100" height="10"/>
					<rect x="0" y="70" width="100" height="10"/>
				</svg>
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
				<a href="/about">About & FAQ</a>
			</li>
			<li class="MainNav-item">
				<a href="https://afternoonlight.artsvp.com/a57962">Get Tickets</a>
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