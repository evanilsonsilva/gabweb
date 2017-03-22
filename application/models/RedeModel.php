<?php

class RedeModel extends CI_Model {
    private $tbRede = "Rede";
    
    public function insert($latitudeRde, $longitudeRde) {
        $data = array(
            'latitude_rde' => $latitudeRde,
            'longitude_rde' => $longitudeRde,      
        );
        if ($this->db->insert($this->tbRede, $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function get($id) {
        $query = $this->db->select('id_rde, latitude_rde,longitude_rde')
                ->from($this->tbRede)
                ->where('id_rde', $id)
                ->get();
        return $query->result();
    }
    
    public function getList() {
        $query = $this->db->select('id_rde, latitude_rde,longitude_rde')
                ->from($this->tbRede)
                ->order_by('id_rde', 'desc')
                ->get();
        return $query->result();
    }
    
    public function update($id, $latitudeRde, $longitudeRde) {
        $data = array(
            'latitude_rde' => $latitudeRde,
            'longitude_rde' => $longitudeRde,      
        );
        $this->db->where('id_rde', $id);
        if ($this->db->update($this->tbRede, $data)) {
            return true;
        } else {
            return false;
        }
    }
    
}
