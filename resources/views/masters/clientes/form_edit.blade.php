
	<div class="col-md-3">
		<div class="form-group">
			<label for="cli_rif">R.I.F.:</label>
			<input type="text" name="cli_rif" class="form-control" value="{{ $cliente->cli_rif }}">
		</div>
	</div>
	<div class="col-md-9">
		<div class="form-group">
			<label for="cli_razon">Raz&oacuten Social:</label>
			<input type="text" name="cli_razon" class="form-control" value="{{ $cliente->cli_razon }}">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="cli_dir">Direcci&oacuten:</label>
			<input type="text" name="cli_dir" class="form-control" value="{{ $cliente->cli_dir }}">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="cli_telf1">Tel&eacutefono principal:</label>
			<input type="text" name="cli_telf1" class="form-control" value="{{ $cliente->cli_telf1 }}">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="cli_telf2">Tel&eacutefono segundario:</label>
			<input type="text" name="cli_telf2" class="form-control" value="{{ $cliente->cli_telf2 }}">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="cli_telf3">Tel&eacutefono 3:</label>
			<input type="text" name="cli_telf3" class="form-control" value="{{ $cliente->cli_telf3 }}">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="cli_tipo">Tipo cliente:</label>
			<select name="cli_tipo" id="cli_tipo" class="form-control">
				@if ($cliente->cli_tipo ===0)
				<option value="0" selected>Contribuyente</option>
				@else
				<option value="0">Contribuyente</option>
				@endif
				@if ($cliente->cli_tipo ===1)
				<option value="1" selected>No Contribuyente</option>
				@else
				<option value="1">No Contribuyente</option>
				@endif
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<label for="cli_activo">Cliente Activo:</label><br>
		@if ($cliente->cli_activo === 1)
		<input type="radio" id="si" name="cli_activo" value="1" checked>
		<label for="cli_activo">S&iacute</label><br>
		@else
		<input type="radio" id="si" name="cli_activo" value="1">
		<label for="cli_activo">S&iacute</label><br>
		@endif
		@if ($cliente->cli_activo === 0)
		<input type="radio" id="No" name="cli_activo" value="0" checked>
		<label for="cli_activo">No</label><br>
		@else
		<input type="radio" id="No" name="cli_activo" value="0">
		<label for="cli_activo">No</label><br>
		@endif
	</div>
	<div class="col-md-6">
		<label for="cli_mail1">Correo Principal:</label><br>
		<input class="form-control" type="type" name="cli_mail1" value="{{ $cliente->cli_mail1 }}">
	</div>
	<div class="col-md-6">
		<label for="cli_mail2">Correo Segundario:</label><br>
		<input class="form-control" type="type" name="cli_mail2" value="{{ $cliente->cli_mail2 }}">
	</div>
