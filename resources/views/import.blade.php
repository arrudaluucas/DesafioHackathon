@extends('templates.app')

@section('content')
    <h1>Importe aqui o seu arquivo CSV da base do banco:</h1><br>
    <form action="{{ url('import_phone') }}" method="POST" name="importform" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="file">Arquivo CSV:</label>
            <input id="file" type="file" name="file" class="form-control">
        </div>
        <div class="form-row">
            <button class="btn btn-success">Importar Arquivo</button>
    <form/>

    </div>
@endsection
