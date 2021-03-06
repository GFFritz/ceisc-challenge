@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nova postagem</div>

                    <div class="card-body">
                        <form id="upload" class="form-group" method="POST" enctype="multipart/form-data">
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

                        <form id="form" class="form-group" action="/publicar">
                            <input type="text" class="form-control" placeholder="Titulo" id="titulo" name="titulo">
                            <textarea type="text" class="form-control my-3" placeholder="Descrição" id="descricao" name="descricao"></textarea>
                            <input type="hidden" name="img" id="img">
                            <button type="submit" class="btn btn-success mt-5">Publicar</button>
                        </form>

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
