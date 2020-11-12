<?php

class Mahasiswa extends CI_Controller
{

  public function __construct(){
    parent:: __construct();
    $this->load->model('m_mhs');
  }

  public function index(){

    //$data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();

    $data['tbl_mahasiswa'] = $this->m_mhs->getAll();
    $this->load->view('mahasiswa/v_index',$data);

  }
  public function tambah(){
  	$this->load->view('mahasiswa/v_formAdd');
  }
  public function proses_tambah(){
    $NIM = $this->input->post('t_nim');
    $nama = $this->input->post('t_nama');
    $alamat = $this->input->post('t_alamat');

    $dataInput = [
      'NIM' => $NIM,
      'nama' => $nama,
      'alamat' => $alamat
    ];
    //var_dump($dataInput);
    $this->m_mhs->m_Add($dataInput);
    redirect('Mahasiswa/index');
  }
  public function edit($ID)
  {
    $dataInput['tbl_mahasiswa'] = $this->m_mhs->getById($ID);
    $this->load->view('mahasiswa/v_edit',$dataInput);
  }

  public function update()
  {
    $ID = $this->input->post('ID');
    // $dataInput['NIM'] = $this->input->post('t_nim');
    // $dataInput['nama'] = $this->input->post('t_nama');
    // $dataInput['alamat'] = $this->input->post('t_alamat');
    //$ID = $this->input->post('ID');
    $NIM = $this->input->post('t_nim');
    $nama = $this->input->post('t_nama');
    $alamat = $this->input->post('t_alamat');

    $dataInput = [
      'NIM' => $NIM,
      'nama' => $nama,
      'alamat' => $alamat
    ];

    $this->m_mhs->update($dataInput, $ID);
    redirect('Mahasiswa');
  }

  public function delete($ID)
  {
    $this->m_mhs->delete($ID);
    redirect('Mahasiswa');
  }

}
