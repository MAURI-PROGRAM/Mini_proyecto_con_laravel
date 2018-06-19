@extends('layauts.app')
@section('title')
CREAR NOTA
@endsection

@section('content')
<form action="/prueba/public/notes" method="POST" role="form">
	{{csrf_field()}}
	<legend>Crear nueva nota</legend>
	<div>
		<label for="">Titulo</label>
		<input name="title" type="text" id="" placeholder="Escriba el titulo">
	</div>
	
	<div>
		<label for="">Nota</label>
		<textarea name="body" id="" placeholder="Escriba la nota"></textarea>
	</div>
	<div>
		<label for="">
		<input type="checkbox" value="1" name="important">
		Es importatnte
		</label>
	</div>

	<button type="submit" >Crear</button>
</form>
@endsection

