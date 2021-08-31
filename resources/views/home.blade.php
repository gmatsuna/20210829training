@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                    <div class="title m-b-md">
                        Teste 1 </br>
                        Manipulação de string
                    </div>
                    <a href="{{ asset('teste1') }}" class="btn btn-lg btn-outline-orange">Iniciar teste 1</a>
                </div>
                <div class="card-body">
                    <div class="title m-b-md">
                        Teste 2 </br>
                        Caixa de banco
                    </div>
                    <a href="{{ asset('teste2') }}" class="btn btn-lg btn-outline-orange">Iniciar teste 2</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
