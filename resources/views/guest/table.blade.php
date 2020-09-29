<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>name</th>
		</tr>


		<tr>
			@foreach ($newdata as $data)
				<td>{{ ++$loop->index}}</td>
				<td>{{ $data}}</td>
			@endforeach
		</tr>
	</table>

</body>
</html>