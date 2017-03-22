<?php

class NoticiaModel extends CI_Model {
    private $tbNoticia = "noticia";
    
    public function insert($tituloNtc, $subtituloNtc, $textoNtc, $fotoNtc, $dataHoraNtc, $ativoNtc) {
        $data = array(
            'titulo_ntc' => $tituloNtc,
            'subtitulo_ntc' => $subtituloNtc,
            'texto_ntc' => $textoNtc,
            'foto_ntc' => $fotoNtc,
            'dataHora_ntc' => $dataHoraNtc,
            'ativo_ntc' => $ativoNtc       
        );
        if ($this->db->insert($this->tbNoticia, $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function get($id) {
        $query = $this->db->select('id_ntc, titulo_ntc, subtitulo_ntc, texto_ntc, foto_ntc, dataHora_ntc, ativo_ntc')
                ->from($this->tbNoticia)
                ->where('id_ntc', $id)
                ->get();
        return $query->result();
    }
    
    public function getList() {
        $query = $this->db->select('id_ntc, titulo_ntc, subtitulo_ntc, texto_ntc, foto_ntc, dataHora_ntc, ativo_ntc')
                ->from($this->tbNoticia)
                ->order_by('id_ntc', 'desc')
                ->get();
        return $query->result();
    }
    
    public function update($id, $tituloNtc, $subtituloNtc, $textoNtc, $fotoNtc, $dataHoraNtc, $ativoNtc) {
        $data = array(
            'titulo_ntc' => $tituloNtc,
            'subtitulo_ntc' => $subtituloNtc,
            'texto_ntc' => $textoNtc,
            'foto_ntc' => $fotoNtc,
            'dataHora_ntc' => $dataHoraNtc,
            'ativo_ntc' => $ativoNtc       
        );
        $this->db->where('id_ntc', $id);
        if ($this->db->update($this->tbNoticia, $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    
}
