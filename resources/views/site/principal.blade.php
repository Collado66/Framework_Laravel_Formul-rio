@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')
    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>FRAMEWORK LARAVEL</h1>
                <p>PW3.<p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">APRENDENDO FORMULARIO</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco"> FORMULARIO</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                <form>
                    <input type="text" placeholder="Nome" class="borda-branca">
                    <br>
                    <input type="text" placeholder="Telefone" class="borda-branca">
                    <br>
                    <input type="text" placeholder="E-mail" class="borda-branca">
                    <br>
                    <select class="borda-branca">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-branca">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
