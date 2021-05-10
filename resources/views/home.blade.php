@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">¡Bienvenido {{ Auth::user()->name }}!</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Mini DashBoard --}}
                    <div class="profile-area">
                        <div class="row">
                            <div class="col-md-2">
                                
                                <div class="card">
                                    <div class="img1"><img src="{{ url('/images/img1.jpg') }}" alt=""></div>
                                    <a href="/clientes">
                                        <div class="img2"><img src="{{ url('/images/img2.jpg') }}" alt=""></div>
                                    </a>
                                    <div style="justify-content: center;">
                                        <h4 style="text-align:center;">Clientes: <br> {{ $cant_clientes }}</h4>
                                    </div>
                                    <div class="socials">
                                        <a href="/clientes">
                                            <i class="fab fa-facebook"  style="text-align:center;"></i>
                                        </a>
                                    </div>
                                    {{-- <div class="socials">
                                        <i class="fab fa-facebook"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fin Mini Dashboard --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
