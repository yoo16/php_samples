<?php if ($member->errors) : ?>
	<div class="alert alert-danger">
		<?php foreach ($member->errors as $error) : ?>
			<ul>
				<li><?= $error ?></li>
			</ul>
		<?php endforeach ?>
	</div>
<?php endif ?>