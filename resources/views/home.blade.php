@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">Postagens</div>

                <button type="button" class="btn btn-labeled btn-success col-2 m-2" onclick="window.location='{{ URL::to('posts/novo') }}'">
                    + Nova
                </button>
                @foreach ($postagens as $item)
                <div class="card" style="width: 18rem;">
                    <img src="img/{!! $item->imagem !!}" class="card-img-top" alt="Imagem {{ $loop->iteration}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->titulo }}</h5>
                        <p class="card-text">{{ $item->descricao }}</p>
                        <a href="{{ URL::to('edit', $item->id) }}" class="btn btn-primary">Editar</a>
                        @if ($item->ativa == 'N')
                            <a href="{{ URL::to('activate', $item->id) }}" class="btn btn-success">Ativar</a>
                        @else
                            <a href="{{ URL::to('delete', $item->id) }}" class="btn btn-danger">Desativar</a>
                        @endif

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
