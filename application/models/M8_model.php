<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M8_model extends CI_Model {

    private $tb_name = 'pwa_imp_m08';

    public function get_lists()
    {
            //ใส่ชื่อtable
            $query = $this->db->get($this->tb_name);
            return $query->result_array();
    }
}
?>