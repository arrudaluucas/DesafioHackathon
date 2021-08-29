@extends('layout.main')

@section('main-content')


<form method="POST" action="/send" enctype="multipart/form-data">

    @csrf
    <div class="container main">
        <div class="card mb-8">
            <div class="card-body">
                <section class="data-main">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Estoque</label>
                            <input name="file" type="file" accept=".csv" class="form-control" id="formGroupExampleInput">
                        </div>

                        <div class="mb-3">
                            <span for="formGroupExampleInput" class="form-label">Mensagem</span>
                            <textarea name="message" type="text" class="form-control" id="caracters" onkeyup="handlePress()"></textarea>
                            <span>Sua mensagem tem <span id="msg"></span> caracteres! Máximo: <strong>160</strong></span>
                            <div class="quantity">
                                <label for="">Quantidade</label>
                                <input type="number" name="quantity">
                            </div>


                            <div class="due-date">
                                <div class="sub-due-date">
                                    <label for="f">Atraso de</label>
                                    <input name="due-date-first" type="date">
                                    <label for="">Até</label>
                                    <input name="due-date-exit" type="date">
                                </div>

                                <div class="value">
                                    <label for="">Valor de</label>
                                    <input type="number" name="currency-first">
                                </div>

                                <div class="value">
                                    <label for="">Até</label>
                                    <input type="number" name="currency-exit">
                                </div>

                            </div>

                           

                        </div>

                        <div class="selects-type">
                            <span>Carteira</span>
                            <select name="portfolio" class="form-select" aria-label="Default select example">
                                <option selected hidden>Selecione uma carteira</option>
                                <option value="1">Bradesco</option>
                                <option value="2">Itaú</option>
                                <option value="3">Banco do Brasil</option>
                            </select>
                        </div>

                        <div class="selects-type">
                            <span>Tipo de negócio</span>
                            <select class="form-select" name="type-business" aria-label="Default select example">
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
                    <input name="B" type="checkbox" class="form-check-input">
                    <label for="">O</label>
                    <input name="O" type="checkbox" class="form-check-input">

                    <label for="">P</label>
                    <input name="P" type="checkbox" class="form-check-input">

                    <label for="">M</label>
                    <input name="M" type="checkbox" class="form-check-input">

                    <label for="">T</label>
                    <input name="T" type="checkbox" class="form-check-input">
                </section>

                <section class="mb-3 checkbox">
                    <div class="sub-classification">
                        <div>
                            <strong>Classificação</strong>
                        </div>

            <section class="mb-3 checkbox">
                <div>
                    <strong>Origem</strong>
                </div>
                <label for="">B</label>
                <input name="b" type="checkbox" class="form-check-input">

                <label for="">O</label>
                <input name="o" type="checkbox" class="form-check-input">

                <label for="">P</label>
                <input name="p" type="checkbox" class="form-check-input">

                <label for="">M</label>
                <input name="m" type="checkbox" class="form-check-input">

                <label for="">T</label>
                <input name="t" type="checkbox" class="form-check-input">
            </section>

            <section class="mb-3 checkbox">
                <div class="sub-classification">
                    <div>
                        <strong>Classificação</strong>
                    </div>

                    <label for="">Exc.</label>
                    <input name="exc" type="checkbox" class="form-check-input">

                    <label for="">Bom.</label>
                    <input name="bom" type="checkbox" class="form-check-input">

                    <label for="">Inde.</label>
                    <input name="inde" type="checkbox" class="form-check-input">
                </div>
            </section>

            <section class="mb-3 checkbox">
                <div class="sub-whatsapp">
                    <div>
                        <strong>Whatsapp</strong>
                    </div>
                    <label for="">S</label>
                    <input name="s" type="checkbox" class="form-check-input">

                    <label for="">N</label>
                    <input name="n" type="checkbox" class="form-check-input">

                    <label for="">I</label>
                    <input name="i" type="checkbox" class="form-check-input">

                    <label for="">Vazio.</label>
                    <input name="vazio" type="checkbox" class="form-check-input">
                </div>
            </section>

            <section class="container">

                <strong>Data de envio</strong>
                <div class="due-date-send">
                    <label for="f">De</label>
                    <input name="date-send-first" type="date" class="form-control">
                    <label for="">Até</label>
                    <input name="date-send-exit" type="date" class="form-control">
                </div>
            </section>


        </div>

    </div>
    <div class="button">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>




@endsection