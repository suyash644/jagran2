<?php include_once('admin_header.php') ?>
<h1>
	<?= $articles->title ?>
	<img src="<?= $articles->image_path ?>" alt="" height="50px" width="50%">
</h1>
<hr>
<div class="row">

<div class="col-md-3 col-md-offset-3 pull-right">
<span>
</span>
</div>
</div>

<p>
	<?= $articles->body ?>
</p>
<?php if(! is_null($articles->image_path)): ?>
	<div class="col-md-3 col-md-offset-3">
	
	</div>
	<?php endif; ?>

<?php include_once('admin_footer.php') ?>