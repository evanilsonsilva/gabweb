<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

    public function index() {
        $this->load->view('teste');
    }
    
    public function cadastrar() {
        $this->load->view('template/html-header');
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('noticia/formCadastrar');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
        
    }

    public function processaCadastrar() {
        $titulo = $this->input->post('titulo');
        $subtitulo = $this->input->post('subtitulo');
        $texto = $this->input->post('texto');
        $foto = $this->input->post('foto');
        $tipo = $this->input->post('tipo');
        $dataHora = $this->input->post('dataHora');
        $ativo = $this->input->post('ativo');

        $this->load->model('NoticiaModel');
        if ($this->NoticiaModel->insert($titulo, $subtitulo, $texto, $foto, $tipo,$dataHora, $ativo)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem enviada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi enviada!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id) {
        $this->load->model('NoticiaModel');
        $result = $this->NoticiaModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id_ntc;
            $json["titulo"] = $row->titulo_ntc;
            $json["subtitulo"] = $row->subtitulo_ntc;
            $json["texto"] = $row->texto_ntc;
            $json["foto"] = $row->foto_ntc;
            $json["tipo"] = $row->tipo_ntc;
            $json["dataHora"] = $row->dataHora_ntc;
            $json["ativo"] = $row->ativo_ntc;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar() {
        $this->load->model('NoticiaModel');
        $result = $this->NoticiaModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id_ntc;
            $json["titulo"] = $row->titulo_ntc;
            $json["subtitulo"] = $row->subtitulo_ntc;
            $json["texto"] = $row->texto_ntc;
            $json["foto"] = $row->foto_ntc;
            $json["tipo"] = $row->tipo_ntc;
            $json["dataHora"] = $row->dataHora_ntc;
            $json["ativo"] = $row->ativo_ntc;
            array_push($response, $json);
        }
        echo json_encode($response);
    }
    
    public function processaAtualizar($id) {
        $titulo = $this->input->post('titulo');
        $sibtitulo = $this->input->post('sibtitulo');
        $texto = $this->input->post('texto');
        $foto = $this->input->post('foto');
        $tipo = $this->input->post('tipo');
        $dataHora = $this->input->post('dataHora');
        $ativo = $this->input->post('ativo');

        $this->load->model('NoticiaModel');
        if ($this->NoticiaModel->update($id, $titulo, $sibtitulo, $texto, $foto, $tipo, $dataHora, $ativo)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem atualizada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi atualizada!');
        }
        echo json_encode($response);
    }

}
