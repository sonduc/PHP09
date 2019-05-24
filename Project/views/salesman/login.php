<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PROJECT</title>
	<link rel="stylesheet" type="text/css" href="public/dist/css/login.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form class="login-form" action="?mod=salesmans&act=login" method="POST">
				<input type="email" placeholder="Email" name="email">
				<input type="password" placeholder="Mật khẩu" name="password">
				<button type="submit" name="submit">Đăng nhập</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		$('.message a').click(function(){
			$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>
