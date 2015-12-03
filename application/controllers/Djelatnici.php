<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Djelatnici extends CI_Controller {

    public function index() {
        $data['naslov'] = 'Podaci o djelatnicima';
        
        $this->load->model('Djelatnici_model');
        $djelatnici  = $this->Djelatnici_model->getDjelatniksJoined();
        $data['djelatnici'] = $djelatnici;
        
        $djelatnici_pogled = $this->load->view("djelatnici", $data, true);
        $data['body'] = $djelatnici_pogled;
        $this->load->view("okvir/podloga", $data);
    }

}