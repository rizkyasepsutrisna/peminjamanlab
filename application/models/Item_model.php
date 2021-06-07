<?php

class Item_model extends CI_Model
{

    public function getAllItem()
    {
        return $this->db->get('alat_db')->result_array();
    }
}
