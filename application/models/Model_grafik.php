<?php

class Model_grafik extends CI_Model {

    function tampil_grafik($limit, $start) {
        $data = $this->db->get('v_transaksi_laporan_penjualan', $limit, $start);
        return $data;
    }
}
?>