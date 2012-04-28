<?
class Jokempo_Model extends CI_Model{

	public function cadastrar($nome, $ganha, $perde, $id = null){
		$dados = array(
			"nome" => $nome,
			"ganha" => $ganha,
			"perde" => $perde
		);
		
		if($id || !empty($id)){
			$this->db->where("id",$id);
			$this->db->update("jogadas",$dados);
		}else{
			$this->db->insert("jogadas",$dados);
		}
	}
	
	public function listar(){
		return $this->db->get("jogadas")->result();
	}
	
	public function buscar($id){
		$this->db->where("id",$id);
		return $this->db->get("jogadas")->row();
	}
	public function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("jogadas");
	}
	public function jogar($j1,$j2){
		$jogardor_1 = $this->buscar($j1);
		if($jogardor_1->ganha == $j2){
			$vencedor = "Jogador 1 Venceu!";	
		}elseif($jogardor_1->perde == $j2){
			$vencedor = "Jogador 2 Venceu!";	
		}else{
			$vencedor = "Empate!";	
		}
		return $vencedor;
	}

}

?>
