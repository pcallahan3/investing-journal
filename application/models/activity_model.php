<?php

class Activity_model extends CI_Model {

    function __contruct(){
        parent::construct();
        $this->table = 'activities';
    }

    public function get_list(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function add($data){

        $this->db->insert($this->table, $data);
    }

}