@extends('layout.main')

@section('main-content')
<div class="container">
    <div class="card mb-8">
    <div class="card-body">
        <section class="data-main">
            <div class="mb-3">
                <span for="formGroupExampleInput" class="form-label">Estoque</span>
                <input type="text" class="form-control" id="formGroupExampleInput">
                <button type="button" class="btn btn-success">Add</button>

                <div class="mb-3">
                    <span for="formGroupExampleInput" class="form-label">Frase</span>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                    <span>Sua frase tem 0 caracteres! Max: 160</span>

                    <div class="due-date">
                        <label for="f">Atraso de</label>
                        <input type="date" class="form-control">
                        <label for="">Até</label>

                        <input type="date" class="form-control">
                    </div>
        </section>

        <section class="origin">
            <div>
                <strong>Origem</strong>
            </div>
            <label for="">B</label>
            <input type="checkbox" class="form-check-input">
            <label for="">O</label>
            <input type="checkbox" class="form-check-input">

            <label for="">P</label>
            <input type="checkbox" class="form-check-input">

            <label for="">M</label>
            <input type="checkbox" class="form-check-input">

            <label for="">T</label>
            <input type="checkbox" class="form-check-input">
        </section>

        <section class="classification">
            <div class="sub-classification">
                <div>
                    <strong>Classificação</strong>
                </div>

                <label for="">Exc.</label>
                <input type="checkbox" class="form-check-input">

                <label for="">Bom.</label>
                <input type="checkbox" class="form-check-input">

                <label for="">Inde.</label>
                <input type="checkbox" class="form-check-input">
            </div>
        </section>

        <section class="whatsapp">
            <div class="sub-whatsapp">
                <div>
                    <strong>Whatsapp</strong>
                </div>
                <label for="">S</label>
                <input type="checkbox" class="form-check-input">

                <label for="">N</label>
                <input type="checkbox" class="form-check-input">

                <label for="">I</label>
                <input type="checkbox" class="form-check-input">

                <label for="">Vazio.</label>
                <input type="checkbox" class="form-check-input">
            </div>
        </section>

        <section class="">

            <strong>Datas</strong>
            <div class="due-date">
                <label for="f">De</label>
                <input type="date" class="form-control">
                <label for="">Até</label>
                <input type="date" class="form-control">
            </div>
        </section>


    </div>

    </div>
   
</div>

@endsection