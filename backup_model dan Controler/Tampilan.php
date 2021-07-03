<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Tampilan extends CI_Model{
    private $table = "wp_posts";
    public $ID;


     function postku(){
        $this->db->select ('*');
        //$this->db->where ('post_status=publish');
        $this->db->order_by("post_status=publish", "random");
        $this->db->from ($this->table);
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
}