<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FaleConoscoWbSv extends CI_Controller
{
    public function index()
    {
        $this->load->view('teste');
    }

    public function cadastrar()
    {
        $this->load->view('template/html-header');
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('faleconosco/formCadastrar');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function processaCadastrar()
    {
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $motivo = $this->input->post('motivo');
        $mensagem = $this->input->post('mensagem');
        $this->load->model('FaleConoscoModel');
        if ($this->FaleConoscoModel->insert($nome, $email, $telefone, $motivo, $mensagem)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem enviada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi enviada!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id)
    {
        $this->load->model('FaleConoscoModel');
        $result = $this->FaleConoscoModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["nome"] = $row->nome;
            $json["email"] = $row->email;
            $json["telefone"] = $row->telefone;
            $json["motivo"] = $row->motivo;
            $json["mensagem"] = $row->mensagem;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar()
    {
        $this->load->model('FaleConoscoModel');
        $result = $this->FaleConoscoModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["nome"] = $row->nome;
            $json["email"] = $row->email;
            $json["telefone"] = $row->telefone;
            $json["motivo"] = $row->motivo;
            $json["mensagem"] = $row->mensagem;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaAtualizar($id)
    {
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $motivo = $this->input->post('motivo');
        $mensagem = $this->input->post('mensagem');
        $this->load->model('FaleConoscoModel');
        if ($this->FaleConoscoModel->update($id, $nome, $email, $telefone, $motivo, $mensagem)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem atualizada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi atualizada!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id)
    {
        $this->load->model('FaleConoscoModel');
        if ($this->FaleConoscoModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem removida com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi removida!');
        }
        echo json_encode($response);
    }
}