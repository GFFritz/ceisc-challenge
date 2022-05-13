@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar postagem</div>

                    <div class="card-body">
                        <div id="img-block">
                            <img src="/img/{{$data->imagem}}" class="img-thumbnail mb-3" />
                             <button id="remove" class="btn btn-danger mb-3">Remover imagem</button>
                        </div>

                        <form id="upload" class="form-group d-none" method="POST" enctype="multipart/form-data">
                            <input type="file" class="form-control-file" id="file" name="file">
                            <button type="submit" class="btn btn-primary my-2" name="upload" value="Upload">Upload</button>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0%">
                                    0%
                                </div>
                            </div>
                            <div id="success"></div>
                        </form>

                        <form id="form" class="form-group" action="/update">
                            <input type="text" class="form-control" placeholder="Titulo" id="titulo" name="titulo" value="{{$data->titulo}}">
                            <textarea type="text" class="form-control my-3" placeholder="Descrição" id="descricao" name="descricao" >{{$data->descricao}}</textarea>
                            <input type="hidden" name="img" id="img" value="{{$data->imagem}}">
                            <input type="hidden" name="id" id="id" value="{{$data->id}}">
                            <button type="submit" class="btn btn-success mt-5">Publicar</button>
                        </form>

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
