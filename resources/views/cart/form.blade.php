<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="width: 500px; margin: 0 auto;">
	<h2 style="text-align: center;">Add Cart</h2>
	<form action="{{url('add')}}" method="post" style="text-align: center;">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  	Id:<br>
	  	<input type="text" name="id">
	  	<br>
	  	name:<br>
	  	<input type="text" name="name">
	  	<br>
	  	Price:<br>
	  	<input type="text" name="price">
	  	<br>
	  	Quantity:<br>
	  	<input type="number" name="quantity">
	  	<br><br>
	  	<input type="submit" value="Submit">
	</form> 
</body>
</html>