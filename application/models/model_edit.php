<?php

class Model_edit extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function update_dp($id, $file_name) 
    {
        $this->db->set("images", $file_name);
        $this->db->where("id", $id);
        $this->db->update("users");
        $row = $this->db->affected_rows();

        if ($row) 
        {
            return $image_path;
        } 
        else
        {
            return FALSE;
        }
    }
 
}

?>