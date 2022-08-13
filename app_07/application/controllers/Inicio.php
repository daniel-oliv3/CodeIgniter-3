<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('template/cabecalho');
		$this->load->view('conteudo_inicial/conteudo');
		$this->load->view('template/rodape');
	}
}

?>
