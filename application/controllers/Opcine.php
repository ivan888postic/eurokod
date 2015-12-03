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

    
    public function dodajOpcinu() {
        if(isset($_POST)){
            $this->load->model('Opcine_model');
            $auto = new Opcine_model();
            $auto->naziv = $this->input->post('naziv');
            $auto->sifra = $this->input->post('sifra');
            $auto->save();
        }
        
        redirect('opcine');
    }
    
}