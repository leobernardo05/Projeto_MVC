<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action
{
    public function index()
    {
        /*$this->view->dados = [
            'Sofá',
            'Cadeira',
            'Cama'
        ];*/

        // instância de conexão
        $conn = Connection::getDb();
        // instancia modelo
        $produto = new Produto($conn);

        // consulta
        $produtos = $produto->getProdutos();

        // envia para a view
        $this->view->dados = $produtos;

        // renderiza
        $this->render('index');
    }

    public function sobreNos()
    {
        /*$this->view->dados = [
            'Notebook',
            'Smartphone'
        ];*/

        $this->render('sobreNos');
    }
}