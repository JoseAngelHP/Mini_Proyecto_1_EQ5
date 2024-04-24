@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('DashBoard') }} </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" rol="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Estado: Conectado')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection