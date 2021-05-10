{{-- Para la muestra de los errores. --}}
{{-- en donde haya formularios. --}}

<div class="container">
	@if(session()->has('error'))
    <div class="alert alert-danger">
    	<ul>
    		@foreach($errors->all() as $error)
        		{{ session()->get('error') }}
        	@endforeach
        </ul>
    </div>
	@endif
</div>