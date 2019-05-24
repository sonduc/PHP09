<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<div class="container" style="width: 100%">
		<a class="btn btn-primary" href="?mod=users&act=add">Thêm mới</a>
		<table class="table table-hover">
			<thead>
				<tr>
					<th align="">ID</th>
					<th align="">Name</th>
					<th align="">Slug</th>
					<th align="">Created at</th>
					<th align="">Update_up</th>
					<th align="">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php  foreach($data as $created) { ?>
				<tr>
					<td align=""><?= $created['id'] ?></td>
					<td align=""><?= $created['name'] ?></td>
					<td align=""><?= $created['slug'] ?></td>
					<td align=""><?= $created['created_at'] ?> </td>
					<td align=""><?= $created['update_at'] ?> </td>

					<td align="">
						<a class='btn btn-info' href="?mod=users&act=detail&id=<?= $user['id'] ?>">Detail</a>
						<a  class='btn btn-warning' href="?mod=users&act=edit&id=<?= $user['id'] ?>">Edit</a>
						<a class='btn btn-danger' href="?mod=users&act=delete&id=<?= $user['id'] ?>">Delete</a>				
					</td>
				</tr>
				<?php } ?>
			</tbody>

		</table>
	</div>
</div>

<?php include_once 'views/layouts/footer.php'; ?>