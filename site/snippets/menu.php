<nav class="site-navigation alignright" role="navigation">
	<ul class="navigation">
		<?php foreach($pages->visible() as $p): ?>
			<li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
		<?php endforeach ?>

		<li class="hide-sm">
			<button class="btn btn-line"><?php echo l::get('free_estimate_btn') ?></button>
		</li>

	</ul>
</nav>