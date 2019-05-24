<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
	.container{
		padding: 40px;
	}
	.right{
		min-height: 100px;
		background: lightgray;
		padding: 10px;
	}
	#kq{
		background: gray;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quod repudiandae nulla. Reiciendis praesentium expedita voluptates voluptatem animi provident nisi!
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 right">
			<button type="button" class="btn btn-primary">Update</button>
			<div id="kq">
				
			</div>
		</div>
	</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('button').click(function(event){
				$.post('xl.php',function(data){
					var div = $('#kq');
					//div.html(data+"<br>")
					//$('.right').append(data+"<br>");
					var hv = JSON.parse(data);
					//console.log(json);
					
					var html = [
						'<table class="table table-hover">	',
						'	<thead>							',
						'		<tr>						',
						'			<th>Id</th>				',
						'			<th>Name</th>			',
						'			<th>Email</th>			',
						'		</tr>						',
						'	</thead>						',
						'	<tbody>							'
					].join('');

					
					for(var i=0;i < hv.lenght;i++){
						html+='     <tr>';
						html+='         <td>'+hv[i].id+'</td>';
						html+='         <td>'+hv[i].name+'</td>';
						html+='         <td>'+hv[i].email+'</td>';
						html+='     </tr>';
					};
					html+=' </tbody>';					
					html+='</table>';	

					div.html(html);
				});
			});
		});
	</script>
</body>
</html>