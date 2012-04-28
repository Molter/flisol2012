<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jokempo extends CI_Controller {
	//@todo Listar
	public function index(){
		$this->load->view('index');
	}
	
	//@todo Criar e Editar
	public function jogada($id = null){
		$this->load->view('jogada');
	}
	
	////@todo Deletar
	public function delete($id){
//		$this->load->view('index');
	}
}

?>
