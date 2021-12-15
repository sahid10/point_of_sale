<?php

Class Grafik extends CI_Controller {
function __construct() {
        parent::__construct();
        // $this->load->Model('Model_grafik');
        chek_seesion();
       // chek_akses_modul();
        //$this->load->Model('Model_kategori');
    }
    function index() {
        // $x['laporan'] = $this->db->get('tbl_beli_suplier')->result();
        $x['data'] = $this->db->query('SELECT * FROM `v_transaksi_laporan_penjualan` Group by nama_kategori')->result();
        $this->template->load('template', 'grafik/list', $x);
    }

}
?>