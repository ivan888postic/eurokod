<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Djelatnici extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Djelatnici_model');
        $this->load->model('Opcine_model');
    }
    
    public function index() {
        
        log_message('error', 'Djelatnici controller loaded ... ');
        
        $data['naslov'] = 'Podaci o djelatnicima';
        
        $djelatnici  = $this->Djelatnici_model->getDjelatniksJoined();
        $data['djelatnici'] = $djelatnici;
        
        $opcine  = $this->Opcine_model->getOpcine();
        $data['opcine'] = $opcine;
        
        $djelatnici_pogled = $this->load->view("djelatnici", $data, true);
        $data['body'] = $djelatnici_pogled;
        $this->load->view("okvir/podloga", $data);
    }
    
    public function dodajDjelatnika() {
        
        log_message('error', 'Djelatnico/dodajDjelatnika method started ... ');
        
        if(isset($_POST)){
            $djelatnik = new Djelatnici_model();
            $djelatnik->naziv = $this->input->post('naziv');
            $djelatnik->titula = $this->input->post('titula');
            $djelatnik->adresa = $this->input->post('adresa');
            $djelatnik->posao = $this->input->post('posao');
            $djelatnik->opcina_preb_id = $this->input->post('preb_opcina_id');
            $djelatnik->opcina_rad_id = $this->input->post('preb_rad_id');
            $djelatnik->save();
        }
        
        log_message('error', 'Djelatnico/dodajDjelatnika method redirecting to djelatnici... ');
        redirect('djelatnici');
    }

    public function obrisi() {
        log_message('error', 'Djelatnici/obrisi method started ... ');
        $djelatnik = new Djelatnici_model();
//        $djelatnik->load($id)
//        $djelatnik->delete();
        
    }


    public function updateDjelatnikField($field_user_id, $new_value) {
        log_message('error', 'update: ' . $field_user_id . ' with ' . $new_value);
    }
    

}