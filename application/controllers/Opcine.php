<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Opcine extends CI_Controller {

    public function index() {
        $data['naslov'] = 'Podaci o općinama';
        
        $this->load->model('Opcine_model');
        $opcine  = $this->Opcine_model->getOpcine();
        $data['opcine'] = $opcine;
        
        $opcine_pogled = $this->load->view("opcine", $data, true);
        $data['body'] = $opcine_pogled;
        $this->load->view("okvir/podloga", $data);
    }

}