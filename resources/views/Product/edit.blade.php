@extends('layouts.app')

@section('title', 'Actualización de Producto')
@section('title2', 'Actualización de Producto')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/product/{{$product->id}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						@method('PUT')
						<div class="form-group">
							<label for="productName">Producto</label>
							<input type="text" value = '{{$product->name}}' class="form-control" name="name" id="productName"/>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/product" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
