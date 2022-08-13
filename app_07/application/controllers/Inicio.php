<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('template/cabecalho');
		$this->load->view('conteudo_inicial/conteudo');
		$this->load->view('template/rodape');
	}

	public function outra(){
		$this->load->view('template/cabecalho');
		$this->load->view('pagina2');
		$this->load->view('template/rodape');
	}

	public function outra_fun(){
		$this->load->view('template/cabecalho');
		$this->load->view('conteudo_inicial/conteudo');
		$this->load->view('pagina2');
		$this->load->view('conteudo_inicial/conteudo');
		$this->load->view('template/rodape');
	}
}

?>
