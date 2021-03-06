@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Postagens</div>

                    <div class="card-body">
                        @foreach ($data as $item)
                            <div class="card" style="width: 18rem;">
                                <img src="/img/{!! $item->imagem !!}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->titulo }}</h5>
                                    <p class="card-text">{{ $item->descricao }}</p>
                                    <a href="{{ URL::to('postagem', $item->id) }}" class="btn btn-primary">Abrir postagem</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
