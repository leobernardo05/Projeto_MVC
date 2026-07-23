<?php
    namespace App\Controllers;

    class IndexController{
        public function index(){
            $dados = array('Sofá', 'Cadeira', 'Cama');
            require_once "../App/Views/index.phtml";
        }

        public function sobreNos(){
            $dados = array('Notebook', 'Smartphone');
            require_once "../App/Views/sobreNos.phtml";
        }


    }
?>