<!DOCTYPE html>
<html>
<head>
	<title>Tula Web Cup Progger - train</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		.form-sendler-situation{
			max-width: 500px;
			margin: 0 auto;
		}
		.form-control{
			margin: 10px;
		}
	</style>
<h1 class="text-center">Hello World</h1>
<form class="form-sendler-situation" action="form-sendler.php" method="post">
	<input class="form-control" type="text" name="water">
    <input class="form-control" type="text" name="electric">
	<input class="form-control" type="text" name="technical">
	<input class="form-control" type="text" name="mechanic">
	<input class="btn btn-success" type="submit">
</form>
 <div class="container">
<div class="row">
	<div class="col-md-3">
		<h1>Вода</h1>
	</div>
	<div class="col-md-3">
		<h1>Электрика</h1>
	</div>
	<div class="col-md-3">
		<h1>Техника</h1>
	</div>
	<div class="col-md-3">
		<h1>Механика</h1>
	</div>
</div>
</body>
</html>