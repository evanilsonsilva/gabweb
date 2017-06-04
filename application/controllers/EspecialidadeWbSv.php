<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EspecialidadeWbSv extends CI_Model
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
        $this->load->model('EspecialidadeModel');
        if ($this->EspecialidadeModel->insert($nome)) {
            $response = array('result' => 'true', 'msg' => 'Especialidade cadastrada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A Especialidade não foi cadastrada!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id)
    {
        $this->load->model('EspecialidadeModel');
        $result = $this->EspecialidadeModel->get($id);
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
        $this->load->model('EspecialidadeModel');
        $result = $this->EspecialidadeModel->getList();
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
        $this->load->model('EspecialidadeModel');
        if ($this->EspecialidadeModel->update($id, $nome)) {
            $response = array('result' => 'true', 'msg' => 'Especialidade atualizada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A Especialidade não foi atualizada!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id)
    {
        $this->load->model('EspecialidadeModel');
        if ($this->EspecialidadeModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Especialidade removida com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A Especialidade não foi removida!');
        }
        echo json_encode($response);
    }

}