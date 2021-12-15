<?php

class Chatbot extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        //$this->load->library('pagination');
        chek_seesion();
        // chek_akses_modul();
    }

    function index() {
        $this->template->load('template', 'chatbot/chatbot');
      
    }
    function chatbot(){
        // getting user message through ajax
        $getMesg =$this->input->post('mesg');

        //checking user query to database query
        $query = $this->db->query("SELECT replies FROM tbl_chatbot WHERE queries LIKE '%$getMesg%'");
       
        foreach($query->result_array() as $replay){
        echo $replay['replies'];
        }
    }

}