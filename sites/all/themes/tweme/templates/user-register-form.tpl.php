<div class="row">
	<div class="tweme-user-register-infos-wrapper col-md-6 col-sm-12">
		<div class="well">
			<?php
				$block = module_invoke('block', 'block_view', '1');
				print render($block['content']);
			?>
		</div>
	</div>
	<div class="tweme-user-register-form-wrapper col-md-6 col-sm-12">
		<div class="well">
			<?php print drupal_render_children($form) ?>
		</div>
	</div>
</div>