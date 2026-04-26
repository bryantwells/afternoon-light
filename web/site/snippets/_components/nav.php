<nav class="MainNav">
	<details class="MainNav-details">
		<summary class="MainNav-summary">Menu</summary>
		<ul class="MainNav-list">
			<li class="MainNav-item">
				<a href="">Tickets</a>
			</li>
			<li class="MainNav-item">
				<a href="#">Exhibitors</a>
			</li>
			<li class="MainNav-item">
				<a href="">Visit</a>
			</li>
			<li class="MainNav-item">
				<a href="">About</a>
			</li>
		</ul>
	</details>
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