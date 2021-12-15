<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class M_data extends CI_Model
{
  function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }

  function get_data($table){
    return $this->db->get($table);
  }

  function insert_data($data,$table){
    $this->db->insert($table,$data);
  }

  function update_data($table,$data,$where){
    $this->db->update($table,$data,$where);
  }
  
  //  $sql="UPDATE  'perpus1'.'admin' SET  'password' = MD5($data) WHERE  'admin'.`id_admin` =3; "
  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

		function hitung_total(){
	 $this->db->select_sum('hrg');
   $query = $this->db->get('barang');
   if($query->num_rows()>0)
   {
     return $query->row()->hrg;
   }
   else
   {
     return 0;
   }
	}

}
 ?>
