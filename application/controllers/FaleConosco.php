<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FaleConosco extends CI_Controller {

    public function index() {
        $this->load->view('teste');
    }

    public function processaCadastrar() {
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $idMotivo = $this->input->post('motivo');
        $mensagem = $this->input->post('mensagem');

        $this->load->model('FaleConoscoModel');
        if ($this->FaleConoscoModel->insert($nome, $email, $telefone, $idMotivo, $mensagem)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem enviada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi enviada!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id) {
        $this->load->model('FaleConoscoModel');
        $result = $this->FaleConoscoModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id_fcn;
            $json["nome"] = $row->nome_fcn;
            $json["email"] = $row->email_fcn;
            $json["telefone"] = $row->telefone_fcn;
            $json["motivo"] = $row->id_mct;
            $json["mensagem"] = $row->mensagem_fcn;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar() {
        $this->load->model('FaleConoscoModel');
        $result = $this->FaleConoscoModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id_fcn;
            $json["nome"] = $row->nome_fcn;
            $json["email"] = $row->email_fcn;
            $json["telefone"] = $row->telefone_fcn;
            $json["motivo"] = $row->id_mct;
            $json["mensagem"] = $row->mensagem_fcn;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaAtualizar($id) {
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $idMotivo = $this->input->post('motivo');
        $mensagem = $this->input->post('mensagem');

        $this->load->model('FaleConoscoModel');
        if ($this->FaleConoscoModel->update($id, $nome, $email, $telefone, $idMotivo, $mensagem)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem atualizada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi atualizada!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id) {
        $this->load->model('FaleConoscoModel');
        if ($this->FaleConoscoModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem removida com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi removida!');
        }
        echo json_encode($response);
    }

}
