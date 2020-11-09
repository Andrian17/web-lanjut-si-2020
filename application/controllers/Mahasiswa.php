<?php

class Mahasiswa extends CI_Controller
{

  // public function __construct(){
  //   parent:: __construct();
  //   $this->load->model('m_mhs');
  // }

  public function index(){

    $data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();

    //$data['tbl_mahasiswa'] = $this->m_mhs->m_tampil();

  	$this->load->view('mahasiswa/v_index',$data);

  }
}
