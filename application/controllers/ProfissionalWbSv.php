<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfissionalWbSv extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/html-header');
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('teste');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function processaCadastrar()
    {
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $conselho = $this->input->post('conselho');
        $inscricao_conselho = $this->input->post('inscricao_conselho');
        $especialidade = $this->input->post('especialidade');
        $this->load->model('ProfissionalModel');
        if ($this->ProfissionalModel->insert($nome, $email, $telefone, $conselho, $inscricao_conselho, $especialidade)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem enviada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi enviada!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id)
    {
        $this->load->model('ProfissionalModel');
        $result = $this->ProfissionalModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["nome"] = $row->nome;
            $json["email"] = $row->email;
            $json["telefone"] = $row->telefone;
            $json["conselho"] = $row->conselho;
            $json["inscricao_conselho"] = $row->inscricao_conselho;
            $json["especialidade"] = $row->especialidade;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar()
    {
        $this->load->model('ProfissionalModel');
        $result = $this->ProfissionalModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["nome"] = $row->nome;
            $json["email"] = $row->email;
            $json["telefone"] = $row->telefone;
            $json["conselho"] = $row->conselho;
            $json["inscricao_conselho"] = $row->inscricao_conselho;
            $json["especialidade"] = $row->especialidade;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaAtualizar($id)
    {
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $conselho = $this->input->post('conselho');
        $inscricao_conselho = $this->input->post('inscricao_conselho');
        $especialidade = $this->input->post('especialidade');
        $this->load->model('ProfissionalModel');
        if ($this->ProfissionalModel->update($id, $nome, $email, $telefone, $conselho, $inscricao_conselho, $especialidade)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem atualizada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi atualizada!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id)
    {
        $this->load->model('ProfissionalModel');
        if ($this->ProfissionalModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem removida com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi removida!');
        }
        echo json_encode($response);
    }
}