<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RedeWbSv extends CI_Controller
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
        $unidade = $this->input->post('unidade');
        $endereco = $this->input->post('endereco');
        $bairro = $this->input->post('bairro');
        $cidade = $this->input->post('cidade');
        $telefone = $this->input->post('telefone');
        $funcionamento = $this->input->post('funcionamento');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $this->load->model('RedeModel');
        if ($this->RedeModel->insert($unidade, $endereco, $bairro, $cidade, $telefone, $funcionamento, $latitude, $longitude)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem enviada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi enviada!');
        }
        echo json_encode($response);
    }

    public function processaBuscar($id)
    {
        $this->load->model('RedeModel');
        $result = $this->RedeModel->get($id);
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["unidade"] = $row->unidade;
            $json["endereco"] = $row->endereco;
            $json["bairro"] = $row->bairro;
            $json["cidade"] = $row->cidade;
            $json["telefone"] = $row->telefone;
            $json["funcionamento"] = $row->funcionamento;
            $json["latitude"] = $row->latitude;
            $json["longitude"] = $row->longitude;
            array_push($response, $json);
        }
        echo json_encode($response);
    }

    public function processaListar()
    {
        $this->load->model('RedeModel');
        $result = $this->RedeModel->getList();
        $response = array();
        foreach ($result as $row) {
            $json["id"] = $row->id;
            $json["unidade"] = $row->unidade;
            $json["endereco"] = $row->endereco;
            $json["bairro"] = $row->bairro;
            $json["cidade"] = $row->cidade;
            $json["telefone"] = $row->telefone;
            $json["funcionamento"] = $row->funcionamento;
            $json["latitude"] = $row->latitude;
            $json["longitude"] = $row->longitude;
            array_push($response, $json);
        }
        echo json_encode($response);
    }


    public function processaListarProfissionalAssociado()
    {
        $this->load->model('RedeModel');
        $result = $this->RedeModel->getListProfissionalAssociado();
        $response = array();
        foreach ($result as $row) {
            $json["id_rede"] = $row->id;
            $json["titulo_rede"] = $row->titulo;
            $json["nome_profissional"] = $row->nome;
            $json["especialidade_profissional"] = $row->espec_prof;
            array_push($response, $json);
        }
        echo json_encode($response);
    }


    public function processaAtualizar($id)
    {
        $unidade = $this->input->post('unidade');
        $endereco = $this->input->post('endereco');
        $bairro = $this->input->post('bairro');
        $cidade = $this->input->post('cidade');
        $telefone = $this->input->post('telefone');
        $funcionamento = $this->input->post('funcionamento');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $this->load->model('RedeModel');
        if ($this->RedeModel->update($id, $unidade, $endereco, $bairro, $cidade, $telefone, $funcionamento, $latitude, $longitude)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem atualizada com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi atualizada!');
        }
        echo json_encode($response);
    }

    public function processaRemover($id)
    {
        $this->load->model('RedeModel');
        if ($this->RedeModel->delete($id)) {
            $response = array('result' => 'true', 'msg' => 'Mensagem removida com sucesso!');
        } else {
            $response = array('result' => 'false', 'msg' => 'A mensagem não foi removida!');
        }
        echo json_encode($response);
    }

}
