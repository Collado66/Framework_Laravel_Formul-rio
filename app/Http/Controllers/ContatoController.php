<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {

        var_dump($_GET); // vai mostrar na url os dados armazenandos no formulario
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}

//var_dump() é uma função em PHP que exibe informações estruturadas 
// sobre uma ou mais variáveis. Ela mostra o tipo de dado da variável, 
// seu valor e, para arrays, a quantidade de elementos e seus conteúdos.
//  É uma ferramenta de depuração muito útil para programadores.
//$_GET é uma superglobal em PHP, que é um array associativo. 
// Ele contém todas as variáveis passadas para o script através da URL,
//  como os parâmetros de uma query string. Por exemplo, se a URL for
//  https://exemplo.com/pagina.php?nome=joao&idade=30, 
// o array $_GET terá a seguinte estrutura: array('nome' => 'joao', 'idade' => '30').
//Portanto, a linha var_dump($_GET); está instruindo o PHP a exibir 
// na tela o conteúdo da superglobal $_GET, mostrando os dados que foram enviados 
// pela URL. Isso é feito geralmente para fins de teste, para verificar se 
// os dados estão sendo recebidos corretamente.