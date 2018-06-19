<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NOTAS</title>
</head>
<body>
	<div>
		@foreach($notes as $note)
			<a href="notes/{{$note->id}}">{{$note->title}}{{($note->important)?'*':''}}</a>
			<br>
        @endforeach
	</div>
</body>
</html>