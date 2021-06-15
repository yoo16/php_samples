<?php if (empty($member->errors)) : ?>
	<p>
		この内容で登録しますか？
	</p>
<?php else : ?>
	<div class="alert alert-danger">
		<ul>
			<?php foreach ($member->errors as $error) : ?>
				<li><?= $error ?></li>
			<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>