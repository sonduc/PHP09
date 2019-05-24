<?php include_once 'views/layouts/header.php'; ?>
    
    <div  id="page-wrapper">
        <a href="?mod=users&act=add">Them moi</a>
		<table border="1px">
			<tr>
				<td align="center">ID</td>
				<td align="center">Name</td>
				<td align="center">Email</td>
				<td align="center">Moblie</td>
				<td align="center">Created at</td>
				<td align="center">Status</td>
				<td align="center" colspan="3">Action</td>
			</tr>
			<?php  foreach($data as $user) { ?>
			<tr>
				<td align="center"><?= $user['id'] ?></td>
				<td align="center"><?= $user['name'] ?></td>
				<td align="center"><?= $user['email'] ?></td>
				<td align="center"><?= $user['moblie'] ?></td>
				<td align="center"><?= $user['created_at'] ?> </td>
				<td align="center"><?= $user['status'] ?></td>
				<td align="center"><a href="?mod=users&act=detail&id=<?= $user['id'] ?>">Detail</a></td>
				<td align="center"><a href="?mod=users&act=delete&id=<?= $user['id'] ?>">Delete</a></td>
				<td align="center"><a href="?mod=users&act=edit&id=<?= $user['id'] ?>">Edit</a></td>
			</tr>
			<?php } ?>
		</table>
    </div>
        
<?php include_once 'views/layouts/footer.php'; ?>