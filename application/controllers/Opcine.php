<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Opcine extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Opcine_model');
    }
    
    public function index() {
        $data['naslov'] = 'Podaci o općinama';
        $opcine = $this->Opcine_model->getOpcine();
        $data['opcine'] = $opcine;
        $opcine_pogled = $this->load->view("opcine", $data, true);
        $data['body'] = $opcine_pogled;
        $this->load->view("okvir/podloga", $data);
    }

    public function dodajOpcinu() {
        if (isset($_POST)) {
            $opcina = new Opcine_model();
            $opcina->naziv = $this->input->post('naziv');
            $opcina->sifra = $this->input->post('sifra');
            $opcina->save();
        }
        redirect('opcine');
    }

    public function obrisiOpcinu() {
        if (isset($_POST)) {
            $id = $this->input->post('id');
            $opcina = new Opcine_model();
            $opcina->load($id);
            $opcina->delete();
        }
        redirect('opcine');
    }

}