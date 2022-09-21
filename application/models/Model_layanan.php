<?php
class Model_layanan  extends CI_model
{

    public function getAllLayanan()
    {
        return $this->db->get('layanan')->result_array();
    }
}
