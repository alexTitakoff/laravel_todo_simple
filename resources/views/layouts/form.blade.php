<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>my To do Laravel</title>
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>




	{!! Form::open() !!}


	<input type="text" name="username" placeholder="Username" />
	<input type="password" name="password" placeholder="Password" />
	<input type="submit" value="Sign in" />


	{!! Form::close() !!}



</body>
</html>