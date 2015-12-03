<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Djelatnici extends CI_Controller {

    public function index() {
        $data['naslov'] = 'Podaci o djelatnicima';
        
        $kupci = $this->load->view("kupci", $data, true);
        $data["tijelo"] = $kupci;
        $this->load->view("podloga", $data);
    }

}