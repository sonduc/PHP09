<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<table class="table table-hover table-striped table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>Mã hóa đơn</th>
				<th>Mã khách hàng</th>
				<th>Tổng tiền</th>
				<th>Ngày bán</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if(isset($data)){
			foreach ($data as $bill) { ?>
			<tr>
				<td><?= $bill['id_bill'] ?></td>
				<td><?= $bill['id_client'] ?></td>
				<td><?= $bill['price'] ?></td>
				<td><?= $bill['created_at'] ?></td>
			</tr>
			<?php } }?>
		</tbody>
	</table>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>