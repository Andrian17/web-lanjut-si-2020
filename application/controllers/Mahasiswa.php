<?php

class Mahasiswa extends CI_Controller
{


  public function pertemuan2()
  {
    echo 'Dosen mengajarkan github';
  }
  public function index(){
  	// $data['nama'] = 'Andrian';
  	// $data['umur'] = '19';
  	// $data['nim'] = $url_nim;
   //  $data['jurusan'] = $url_jur;
  	$this->load->view('mahasiswa/v_index');

  }
}
