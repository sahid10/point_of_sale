<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    //cek Login
    if($this->session->userdata('status') != "login"){
      redirect(base_url().'welcome?pesan=belumlogin');

    }
    }
function index(){
    $this->load->view('admin/header');
    $this->load->view('admin/index');
    $this->load->view('admin/footer');  
}

function indexa(){
    $this->load->view('admin/header');
    $this->load->view('admin/indexa');
    $this->load->view('admin/footer');  
}

function indexb(){
    $this->load->view('admin/header');
    $this->load->view('admin/indexb');
    $this->load->view('admin/footer');  
} 
function barchart(){
    $this->load->view('admin/header');
    $this->load->view('admin/barchart');
    $this->load->view('admin/footer');  
} 
function linechart(){
    $this->load->view('admin/header');
    $this->load->view('admin/linechart');
    $this->load->view('admin/footer');  
} 
function piechart(){
    $this->load->view('admin/header');
    $this->load->view('admin/piechart');
    $this->load->view('admin/footer');  
}  // function index(){

  //   $data['barang'] = $this->M_data->get_data('barang')->result();
  //   $data['total']=$this->M_data->hitung_total();

  //   $this->load->view('admin/header');
  //   $this->load->view('admin/index',$data);
  //   $this->load->view('admin/footer');
  // }
  
  // function logout(){

  //   $this->session->sess_destroy();
  //   redirect(base_url().'welcome?pesan=logout');
  // }

  // function tambah_barang(){
    
  //   $nama = $this->input->post('nm_brng');
  //   $harga = $this->input->post('hrg');
  //   $id_adm= $this->session->userdata('id_adm');

  //   $data = array(
  //     'nm_brng' => $nama,
  //     'hrg' => $harga,
  //     'id_adm' => $id_adm,
  //     );

  //   $this->M_data->insert_data($data,'barang');
  //   redirect('admin/index');
  // } 

  // function edit_brng($id){

  //     $where = array('id_brng' =>$id);
  //     $data['barang'] = $this->db->query("select * from barang where id_brng='$id'")->result();
      
  //     $this->load->view('admin/header');
  //     $this->load->view('admin/edit_brng',$data);
  //     $this->load->view('admin/footer');
  // }

  // function update_barang(){

  //     $id = $this->input->post('id_brng');
  //     $nama = $this->input->post('nm_brng');
  //     $harga = $this->input->post('hrg');
  //     $where = array('id_brng' => $id);
  //     $data = array(
  //           'id_brng' =>$id,
  //           'nm_brng' =>$nama,
  //           'hrg' =>$harga
  //         );

  //     $this->M_data->update_data('barang',$data,$where);
  //     redirect('admin/index');
  // }
  // function hapus_brng($id){

  //     $where = array('id_brng' => $id);

  //     $this->M_data->delete_data($where,'barang');
  //     redirect(base_url().'admin/index');
  //     }

  // function cari(){
    
  //   $kata = $this->input->get('nm_brng');
  //   $data['barang'] = $this->db->query("select * from barang where nm_brng='$kata'")->result();

  //   $this->load->view('admin/header');
  //   $this->load->view('admin/cari',$data);
  //   $this->load->view('admin/footer');
  // }
}
