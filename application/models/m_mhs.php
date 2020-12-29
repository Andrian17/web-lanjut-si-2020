<?php 
/**
 * 
 */
class m_mhs extends CI_Model
{
	private $table = 'mahasiswa';
	public function getAll()
	{

		//selct * from "table"
		return $this->db->get($this->table)->result();
	}

	public function m_Add($dataInput){
		//insert into value 
		return $this->db->insert($this->table, $dataInput);
	}
	public function getById($ID)
	{
		return $this->db->get_where($this->table, ["ID" => $ID])->row_object();
	}

	public function update($dataInput, $ID)
	{
		return $this->db->update($this->table, $dataInput, array('ID' => $ID));
	}

	public function delete($ID)
	{
		return $this->db->delete($this->table, array("ID" => $ID));
	}
}



?>