<?php include_once 'views/layouts/header.php'; ?>
    
    <div  id="page-wrapper">
	<h3>Thông tin chi tiết</h3>
	<ul>
		<li>ID: <?= $user['id'] ?></li>
		<li>Name: <?= $user['name'] ?></li>
		<li>Email: <?= $user['email'] ?></li>
		<li>Moblie: <?= $user['moblie'] ?></li>
		<li>Created: <?= $user['created_at'] ?></li>
		<li>Status: <?= $user['status'] ?></li>
	</ul>
	<a class="btn btn-primary" href="?mod=users&act=list">Danh sách</a>
</div>

<?php include_once 'views/layouts/footer.php'; ?>