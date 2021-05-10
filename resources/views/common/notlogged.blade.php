@extends('layouts.app')

@section('title', 'Debe hacer login')

@section('content')

  @include('common.success')

		<div class="container">
			<a href="/login">
				<h1 class="text-center">Debe hacer login para poder ver esta pagina.</h1>
			</a>
		</div>  

@endsection