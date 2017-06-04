<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NoticiaWbSv extends CI_Controller
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
        $this->load->view('noticia/formCadastrar');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function processaCadastrar()
    {
        $titulo = $this->input->post('titulo');
        $descricao = $this->input->post('descricao');
        $dataPostagem = $this->input->post('dataPostagem');
        $link = $this->input->post('link');
        $this->load->model('NoticiaModel');
        if ($this->NoticiaModel->insert($titulo, $descricao, $dataPostagem, $link)) {
            $response = array('result' => 'true', 'msg' => 'Notícia enviada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A notícia não foi enviada!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id)
    {
        $this->load->model('NoticiaModel');
        $result = $this->NoticiaModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["titulo"] = $row->titulo;
            $json["descricao"] = $row->descricao;
            $json["dataPostagem"] = $row->data_postagem;
            $json["link"] = $row->link;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar()
    {
        $this->load->model('NoticiaModel');
        $result = $this->NoticiaModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["titulo"] = $row->titulo;
            $json["descricao"] = $row->descricao;
            $json["dataPostagem"] = $row->data_postagem;
            $json["link"] = $row->link;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaAtualizar($id)
    {
        $titulo = $this->input->post('titulo');
        $descricao = $this->input->post('descricao');
        $dataPostagem = $this->input->post('dataPostagem');
        $link = $this->input->post('link');
        $this->load->model('NoticiaModel');
        if ($this->NoticiaModel->update($titulo, $descricao, $dataPostagem, $link)) {
            $response = array('result' => 'true', 'msg' => 'Notícia atualizada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A notícia não foi atualizada!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id)
    {
        $this->load->model('NoticiaModel');
        if ($this->NoticiaModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Notícia removida com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A notícia não foi removida!');
        }
        echo json_encode($response);
    }
}