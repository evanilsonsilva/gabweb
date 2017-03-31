<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function index() {
        $this->load->view('teste');
    }
    
    public function cadastrar() {
        $this->load->view('template/html-header');
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('video/formCadastrar');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function processaCadastrar() {
        $titulo = $this->input->post('titulo');
        $descricao = $this->input->post('descricao');
        $link = $this->input->post('link');
        $dataHora = $this->input->post('dataHora');

        $this->load->model('VideoModel');
        if ($this->VideoModel->insert($titulo, $descricao, $link, $dataHora)) {
            $response = array('result' => 'true', 'msg' => 'Vídeo cadastrado com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'O vídeo não foi cadastrado!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id) {
        $this->load->model('VideoModel');
        $result = $this->VideoModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id_vdo;
            $json["titulo"] = $row->titulo_vdo;
            $json["descricao"] = $row->descricao_vdo;
            $json["link"] = $row->link_vdo;
            $json["dataHora"] = $row->datahora_vdo;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar() {
        $this->load->model('VideoModel');
        $result = $this->VideoModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id_vdo;
            $json["titulo"] = $row->titulo_vdo;
            $json["descricao"] = $row->descricao_vdo;
            $json["link"] = $row->link_vdo;
            $json["dataHora"] = $row->datahora_vdo;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaAtualizar($id) {
        $titulo = $this->input->post('titulo');
        $descricao = $this->input->post('descricao');
        $link = $this->input->post('link');
        $dataHora = $this->input->post('dataHora');

        $this->load->model('VideoModel');
        if ($this->VideoModel->update($id, $titulo, $descricao, $link, $dataHora)) {
            $response = array('result' => 'true', 'msg' => 'Vídeo atualizado com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'O vídeo não foi atualizado!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id) {
        $this->load->model('VideoModel');
        if ($this->VideoModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Vídeo removido com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'O vídeo não foi removido!');
        }
        echo json_encode($response);
    }

}
