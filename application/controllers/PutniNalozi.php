<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PutniNalozi extends CI_Controller {

    public function index() {
        $data['naslov'] = 'Putni nalozi';
        
        $nalozi = $this->load->view("putni_nalozi", $data, true);
        $data["body"] = $nalozi;
        $this->load->view("podloga", $data);
    }

}