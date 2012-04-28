<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jokempo extends CI_Controller {

	function jokempo(){
		parent::__construct();
		$this->load->model("jokempo_model");
	}

	//@todo Listar
	public function index(){
		$data = array();
		$data["jogagas"] = $this->jokempo_model->listar();
	
		$this->load->view('index',$data);
	}
	
	//@todo Criar e Editar
	public function jogada($id = null){
		$data = array();
		$data["jogadas"] = $this->jokempo_model->listar();
		
		if($id)
			$data["jogada"] = $this->jokempo_model->buscar($id);
	
		$this->load->view('jogada',$data);
		
		if($this->input->post()){
			$nome = $this->input->post("nome");
			$perde = $this->input->post("perde");
			$ganha = $this->input->post("ganha");
			
			$this->jokempo_model->cadastrar($nome, $ganha, $perde, $id);
			
			redirect('jokempo/index');
		}
		
	}
	
	////@todo Deletar
	public function delete($id){
		$this->jokempo_model->delte($id);
		redirect('jokempo/index');
	}
	
	public function jogar(){
		$data["jogadas"] = $this->jokempo_model->listar();
		
		if($this->input->post()){
			$j1 = $this->input->post('j1');
			$j2 = $this->input->post('j2');
			
			$data["vencedor"] = $this->jokempo_model->jogar($j1,$j2);
			
		}
		$this->load->view("jogar",$data);
	}
}

?>
