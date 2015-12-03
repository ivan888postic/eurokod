<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Automobili extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Automobili_model');
    }
    
    public function index() {
        $data['naslov'] = 'Podaci o automobilima';
        
        $this->load->model('Automobili_model');
        $automobili = $this->Automobili_model->getAutomobils();
        $data['automobili'] = $automobili;
        
        $automobili = $this->load->view("automobili", $data, true);
        $data["body"] = $automobili;
        $this->load->view("okvir/podloga", $data);
    }
    
    public function dodajAuto() {
        if(isset($_POST)){
            $auto = new Automobili_model();
            $auto->naziv = $this->input->post('naziv');
            $auto->reg_oznaka = $this->input->post('reg_oznaka');
            $auto->km = $this->input->post('km');
            $auto->save();
        }
        
        log_message('error', 'Djelatnico/dodajAuto method redirecting to djelatnici... ');
        redirect('automobili');
    }
    

}