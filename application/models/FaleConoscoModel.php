<?php

class FaleConoscoModel extends CI_Model {

    private $tbFaleConosco = "faleconosco";

    public function insert($nome, $email, $telefone, $idMotivo, $mensagem) {
        $data = array(
            'nome_fcn' => $nome,
            'email_fcn' => $email,
            'telefone_fcn' => $telefone,
            'id_mct' => $idMotivo,
            'mensagem_fcn' => $mensagem
        );
        if ($this->db->insert($this->tbFaleConosco, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function get($id) {
        $query = $this->db->select('id_fcn, nome_fcn, email_fcn, telefone_fcn, id_mct, mensagem_fcn')
                ->from($this->tbFaleConosco)
                ->where('id_fcn', $id)
                ->get();
        return $query->result();
    }

    public function getList() {
        $query = $this->db->select('id_fcn, nome_fcn, email_fcn, telefone_fcn, id_mct, mensagem_fcn')
                ->from($this->tbFaleConosco)
                ->order_by('id_fcn', 'desc')
                ->get();
        return $query->result();
    }

    public function update($id, $nome, $email, $telefone, $idMotivo, $mensagem) {
        $data = array(
            'nome_fcn' => $nome,
            'email_fcn' => $email,
            'telefone_fcn' => $telefone,
            'id_mct' => $idMotivo,
            'mensagem_fcn' => $mensagem
        );
        $this->db->where('id_fcn', $id);
        if ($this->db->update($this->tbFaleConosco, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->where('id_fcn', $id);
        if ($this->db->delete($this->tbFaleConosco)) {
            return true;
        } else {
            return false;
        }
    }

}
