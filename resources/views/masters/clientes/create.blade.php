@extends('layouts.app')
@section('content')

	@if( $errors->any() )
		@foreach($errors->all() as $error)
			<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 350px; margin-left:auto; margin-right:auto;">
				<p>{{ $error }}</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>	
		@endforeach
	@endif

	{{-- Form --}}
	<div class="container">
		<div class="justify-content-center row">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header" style="background:#808080;">
						<div class="row">
							<div class="col-md-6">
								<h4 style="color:white;">Nuevo Cliente</h4>
							</div>
							<div class="col-md-6">
								<a href="/clientes" class="btn btn-warning float-right">Volver</a>
							</div>
						</div>
					</div>
					<div class="card-body" style="background:#f2f2f2;">
						<form class="form-group row" method="POST" accept-charset="utf-8" enctype="multipart/form-data" action="{{ url('/clientes')}}">
							@method('POST')
							@csrf
							@include('masters.clientes.form')

					</div>
					<div class="card-footer" style="background:#808080">
						<button class="btn btn-primary float-right" type="submit">Agregar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection	