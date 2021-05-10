{{-- Para la muestra de los mensajes --}}
{{-- de operaciones exitosas. --}}
<div class="container">
	@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
	@endif
</div>