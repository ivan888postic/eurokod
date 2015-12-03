<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Automobili extends CI_Controller {

    public function index() {
        $data['naslov'] = 'Podaci o automobilima';
        
        $automobili = $this->load->view("automobili", $data, true);
        $data["body"] = $automobili;
        $this->load->view("okvir/podloga", $data);
    }

}