@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data->titulo }}</div>

                <div class="card-body">
                    <img src="../img/{!! $data->imagem !!}" class="card-img-top" alt="...">
                    <p class="card-text">{{ $data->descricao }} </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
