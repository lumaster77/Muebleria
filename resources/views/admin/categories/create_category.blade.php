@extends('layouts.menu_admin')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					Crear categoria
				</div>
				<div class="card-body">
					<form action="{{ route('admin.category_store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Descripcion</label>
							<input type="text" name="description" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
						<a href=" {{ route('admin.category_index') }}" class="btn btn-danger">Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection