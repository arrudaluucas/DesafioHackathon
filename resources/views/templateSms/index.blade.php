@extends('layout.main')

@section('main-content')
<div class="container main">
    <div class="card mb-8">
        <div class="card-body">
            <section class="data-main">
                <div class="mb-3">
                    <div class="form-group">
                    <label for="formGroupExampleInput">Estoque</label>
                    <input type="file" class="form-control" id="formGroupExampleInput">
                    </div>

                    <div class="mb-3">
                        <span for="formGroupExampleInput" class="form-label">Mensagem</span>
                        <textarea type="text" class="form-control" id="caracters" onkeyup="handlePress()"></textarea>
                        <span>Sua mensagem tem <span id="msg">{{$quantity ?? 0}}</span> caracteres! Máximo: <strong>160</strong></span>

                        <div class="due-date">
                            <label for="f">Atraso de</label>
                            <input type="date">
                            <label for="">Até</label>
                            <input type="date">
                            <hr> </hr>
                        </div>

                        <div class="selects-type">
                        <span>Carteira</span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected hidden>Selecione uma carteira</option>
                            <option value="1">Bradesco</option>
                            <option value="2">Itaú</option>
                            <option value="3">Banco do Brasil</option>
                        </select>
                        </div>

                        <div class="selects-type">
                        <span>Tipo de negócio</span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected hidden>Selecione um tipo de negócio</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="22">22</option>
                            <option value="248">248</option>
                            <option value="266">266</option>
                            <option value="CAF">CAF</option>
                            
                        </select>
                        </div>
                    </div>
                    
                </div>
                
            </section>
            

            <section class="mb-3 checkbox">
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

            <section class="mb-3 checkbox">
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

            <section class="mb-3 checkbox">
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

                <strong>Data de envio</strong>
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