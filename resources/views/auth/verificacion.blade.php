@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificacion del Correo Electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un enlace de verificación a su Correo Electrónico') }}
                        </div>
                    @endif

                    {{ __('Para continuar consulte su Correo Electronico con su enlace de verificacion') }}
                    {{ __('No has recibido el Correo Electronico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Da clic aqui para enviarte otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection