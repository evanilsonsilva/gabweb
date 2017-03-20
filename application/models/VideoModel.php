<?php

class VideoModel extends CI_Model {

    private $tbVideo = "video";

    public function insert($titulo, $descricao, $link, $dataHora) {
        $data = array(
            'titulo_vdo' => $titulo,
            'descricao_vdo' => $descricao,
            'link_vdo' => $link,
            'datahora_vdo' => $dataHora
        );
        if ($this->db->insert($this->tbVideo, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function get($id) {
        $query = $this->db->select('id_vdo, titulo_vdo, descricao_vdo, link_vdo, datahora_vdo')
                ->from($this->tbVideo)
                ->where('id_vdo', $id)
                ->get();
        return $query->result();
    }

    public function getList() {
        $query = $this->db->select('id_vdo, titulo_vdo, descricao_vdo, link_vdo, datahora_vdo')
                ->from($this->tbVideo)
                ->order_by('id_vdo', 'desc')
                ->get();
        return $query->result();
    }

    public function update($id, $titulo, $descricao, $link, $dataHora) {
        $data = array(
            'titulo_vdo' => $titulo,
            'descricao_vdo' => $descricao,
            'link_vdo' => $link,
            'datahora_vdo' => $dataHora
        );
        $this->db->where('id_vdo', $id);
        if ($this->db->update($this->tbVideo, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->where('id_vdo', $id);
        if ($this->db->delete($this->tbVideo)) {
            return true;
        } else {
            return false;
        }
    }

}
