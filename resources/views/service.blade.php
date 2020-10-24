<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach ($a as $row)
	<p>Name: {{$row['name']}}</p>
	<p>age: {{$row['age']}}</p>
@endforeach
</body>
</html>