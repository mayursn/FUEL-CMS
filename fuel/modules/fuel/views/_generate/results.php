<div id="fuel_main_content_inner">

<h3>Created</h3>
<?php if (!empty($created)) : ?>
<ul class="nobullets">
<?php foreach($created as $val) : ?>
<li><?=$val?></li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<p>There were no files created.</p>
<?php endif; ?>

<?php if (!empty($errors)) : ?>
<h3>Errors</h3>
<ul>
<?php foreach($errors as $val) : ?>
<li class="error"><?=$val?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

</div>