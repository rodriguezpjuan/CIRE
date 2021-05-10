@extends('layouts.app')

@section('content')

	@include('common.errors')
	@include('common.success')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6 ">
								<h4>Clientes</h4>		
							</div>
							<div class="col-md-6 w-100 text-right">
								<a href="/clientes/create" class="btn btn-success">Agregar</a>		
							</div>
						</div>
					</div>
					<div class="card-body">
						@if($cant_clientes === 0)
							<h4 class="text-center">No existen registros de Clientes.</h4>
							<br>
							{{-- <center>
								<a class="btn btn-primary mx-auto" href="/clientes/create" role="button">Nuevo Cliente</a>
							</center> --}}
						@else
							<table class="table table-striped">
								<thead>
							    	<tr>
								    	<th scope="col">#</th>
								    	<th scope="col">R.I.F.</th>
								    	<th scope="col">Nombre</th>
								    	<th scope="col">Correo</th>
								    	<th scope="col">Acci&oacuten</th>
							    	</tr>
							  	</thead>
								<tbody>
								@foreach ($clientes as $cliente)
									<tr>
										<td>{{ $cliente->id }}</th>
										<td>{{ $cliente->cli_rif }}</td>
										<td>{{ $cliente->cli_razon }}</td>
										<td>{{ $cliente->cli_mail1}}</td>
										<td>
											<div class="row">
												<div class="col-2" style="margin-left: 5px;">
													<a href="/clientes/{{ $cliente->id }}" class="btn btn-primary"><i class="fa fa-eye"></i> </a>
												</div>
												<div class="col-2" style="margin-left: 5px;">
													<a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
												</div>
												<div class="col-2" style="margin-left: 5px;">
													<form method="POST" action="{{ url("clientes/{$cliente->id}") }}" class="formulario_eliminar">
												    	@csrf
												    	@method('DELETE')
												    	<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
												    </form>
												</div>
											</div>
										</td>
						    		</tr>
								@endforeach
						    	</tbody>
						    </table>
							    <br>
						@endif
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-md-6">
								<a href="/home" class="btn btn-warning float-left">Volver</a>
							</div>
							<div class="col-md-6">
								<div class="text-right"><strong>Cantidad de Registros:</strong> {{ $cant_clientes }} registros.</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>

	<script>
		@if(session('eliminado')=='1')
			Swal.fire(
            	'¡Eliminado!',
            	'El elemento ha sido eliminado.',
            	'success'
            )
		@endif

		$('.formulario_eliminar').submit(function(e) {
			e.preventDefault(); /* Esto evita que se envie el form al controlador */

	        Swal.fire({
	          title: '¡Se eliminará el elemento!',
	          text: "¡Esto no se puede deshacer!",
	          icon: 'warning',
	          showCancelButton: true,
	          confirmButtonColor: '#3085d6',
	          cancelButtonColor: '#d33',
	          cancelButtonText: 'Cancelar',
	          confirmButtonText: 'Sí, ¡elimi&iacutenalo!'
	        }).then((result) => {
	          if (result.isConfirmed) {
	            this.submit();
	          }
	        })
		})
    </script>
    
@endsection	