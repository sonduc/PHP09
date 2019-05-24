<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="inDL.php" method="POST" role="form">
		<div class="form-group">
			<label for="">Mã: </label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="Ma">
		</div>
		<div class="form-group">
			<label for="">Họ Tên: </label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="Ten">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại: </label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="SoDt">
		</div>
		<div class="form-group">
			<label for="Dchi">Email: </label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="Email">
		</div>
		<div class="form-group">
			<label for="Dchi">Địa chỉ: </label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="DChi">
		</div>	
		<button type="submit" class="btn btn-primary" name="HT">Submit</button>
	</form>
</body>
</html>
<!-- Mã  Tên Sôdt email diaChi -->