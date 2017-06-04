<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ConselhoWbSv extends CI_Controller
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
        $this->load->model('ConselhoModel');
        if ($this->ConselhoModel->insert($nome)) {
            $response = array('result' => 'true', 'msg' => 'Conselho cadastrado com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'O conselho não foi cadastrado!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id)
    {
        $this->load->model('ConselhoModel');
        $result = $this->ConselhoModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["nome"] = $row->nome;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar()
    {
        $this->load->model('ConselhoModel');
        $result = $this->ConselhoModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["nome"] = $row->nome;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaAtualizar($id)
    {
        $nome = $this->input->post('nome');
        $this->load->model('ConselhoModel');
        if ($this->ConselhoModel->update($id, $nome)) {
            $response = array('result' => 'true', 'msg' => 'Conselho atualizado com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'O Conselho não foi atualizado!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id)
    {
        $this->load->model('ConselhoModel');
        if ($this->ConselhoModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Conselho removido com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'O Conselho não foi removido!');
        }
        echo json_encode($response);
    }

}