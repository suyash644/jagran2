<title>Admin Dashboard</title>
<?php include_once('admin_header.php'); ?>

<?php 
		if(! $this->session->userdata('user_id'))
			return redirect('login');
?>

<div class="container">
<div class="row">
	<div class="col-lg-6 col-lg-offset-6">
		<?= anchor('admin/store_article','Add Product',['class'=>'btn btn-lg btn-primary pull-right']) ?>
	</div>
</div>
	<h1>All Products</h1>
	<hr>
	<table class="table">
		<thead>
			<tr>
				<td>Sr. No.</td>
				<td>Product Name</td>
			</tr>
		</thead>
		<tbody>
			<tr>
		<?php if 
		(count($articles)): ?>
			<?php $count= $this->uri->segment(3,0); ?>
		<?php foreach($articles as $article): ?>
				<td><?= ++$count ?></td>
				<td><?= anchor("user/article/{$article->id}",$article->title) ?></td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
		<td colspan="3">No Record Found</td>
		</tr>
	<?php endif; ?>
		</tbody>
	</table>
	<?= $this->pagination->create_links() ?>
</div>

<?php include_once('admin_footer.php'); ?>