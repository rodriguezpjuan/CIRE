@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="justify-content-center row">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header" style="background:#808080;">
						<h4 style="color:white;">Información de Cliente:</h4>
					</div>
					<div class="card-body" style="background:#f2f2f2;">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="cli_rif" style="font-weight: bold;">R.I.F.:</label>
									<br>
									<label for="cli_rif">{{ $cliente->cli_rif }}</label>
								</div>
							</div>
							<div class="col-md-9">
								<div class="form-group">
									<label for="cli_razon" style="font-weight: bold;">Raz&oacuten Social:</label>
									<br>
									<label for="cli_razon">{{ $cliente->cli_razon }}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="cli_razon" style="font-weight: bold;">Direcci&oacuten:</label>
									<br>
									<label for="cli_razon">{{ $cliente->cli_dir }}</label>
								</div>
							</div>
							<div class="col-md-4">
								<label for="cli_telf1" style="font-weight: bold;">Tel&eacutefono principal:</label>
								<br>
								<label for="cli_telf1">{{ $cliente->cli_telf1 }}</label>
							</div>
							<div class="col-md-4">
								<label for="cli_telf2" style="font-weight: bold;">Tel&eacutefono segundario:</label>
								<br>
								<label for="cli_telf2">{{ $cliente->cli_telf2 }}</label>
							</div>
							<div class="col-md-4">
								<label for="cli_telf1" style="font-weight: bold;">Tel&eacutefono 3:</label>
								<br>
								<label for="cli_telf1">{{ $cliente->cli_telf3 }}</label>
							</div>
							<div class="col-md-6">
								<label for="cli_telf1" style="font-weight: bold;">Tipo cliente:</label>
								<br>
								@if ($cliente->cli_tipo === 0)
								    <label for="cli_tipo">Contribuyente</label>
								@else
									<label for="cli_tipo">No contribuyente</label>
								@endif
							</div>
							<div class="col-md-6">
								<label for="cli_activo" style="font-weight: bold;">Cliente Activo:</label>
								<br>
								@if ($cliente->cli_activo === 1)
								    <label for="cli_tipo">Sí</label>
								@else
									<label for="cli_tipo">No</label>
								@endif
							</div>
							<div class="col-md-6">
								<label for="cli_mail1" style="font-weight: bold;">Correo principal:</label>
								<br>
								<label for="cli_mail1">{{ $cliente->cli_mail1 }}</label>
							</div>
							<div class="col-md-6">
								<label for="cli_telf1" style="font-weight: bold;">Correo segundario:</label>
								<br>
								<label for="cli_telf1">{{ $cliente->cli_mail2 }}</label>
							</div>
						</div>
					</div>
					<div class="card-footer" style="background:#808080">
						<a href="/clientes" class="btn btn-warning float-right">Volver</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection	