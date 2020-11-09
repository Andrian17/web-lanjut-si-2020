<?php 
/**
 * 
 */
class m_mhs extends CI_Model
{
	private $table = 'mahasiswa';
	public function m_tampil()
	{

		//selct * from "table"
		return $this->db->get($this->table)->result();
	}
	
}



 ?>