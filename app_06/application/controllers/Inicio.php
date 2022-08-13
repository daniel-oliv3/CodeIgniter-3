<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('cabecalho');
		$this->load->view('conteudo');
		$this->load->view('rodape');
	}
}
