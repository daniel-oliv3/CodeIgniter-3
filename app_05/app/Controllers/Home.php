<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
           $this->load->view('cabecalho');
           $this->load->view('conteudo');
           $this->load->view('rodape');
    }
}
