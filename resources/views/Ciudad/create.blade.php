@extends('layouts.app')

@section('title', 'Creación de Ciudad')

@section('title2', 'Nueva Ciudad')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/ciudad" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="comuna">Ciudad</label>
						<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="comunalHelp">
						<small id="comunalHelp" class="form-text text-muted">Nombre de la ciudad.</small>
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/ciudad" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


