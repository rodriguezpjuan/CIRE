@extends('layouts.app')

@section('content')

	@include('common.errors')
	@include('common.success')

	<div class="container">
		<div class="justify-content-center row">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header" style="background:#808080;">
						<div class="row">
							<div class="col-md-6">
								<h4 style="color:white;">Editando Cliente</h4>
							</div>
							<div class="col">
								<a href="/clientes" class="btn btn-warning float-right">Volver</a>
							</div>
						</div>
					</div>
					<div class="card-body" style="background:#f2f2f2;">
						<form class="form-group row" method="post" accept-charset="utf-8" enctype="multipart/form-data" action="/clientes/{{$cliente->id}}">
							@method('PUT')
							@csrf
							@include('masters.clientes.form_edit')

					</div>
					<div class="card-footer" style="background:#808080">
						<button class="btn btn-primary float-right" type="submit">Actualizar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection