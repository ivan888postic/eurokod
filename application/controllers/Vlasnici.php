<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vlasnici extends CI_Controller {

    public function index() {
        $vlasnik_id = 1;
        $data['title'] = 'Podaci o vlasniku';

        $this->load->model('Vlasnici_model');
        $owner = new Vlasnici_model();
        $owner->load($vlasnik_id);
        $data['owner'] = $owner;

        $this->load->model('Djelatnici_model');
        $boss = new Djelatnici_model();
        $boss->load($owner->direktor_id);
        $data['boss'] = $boss;
        
        $owner_view = $this->load->view("vlasnik", $data, true);
        $data["body"] = $owner_view;
        $this->load->view("okvir/podloga", $data);
    }

    public function updateVlasnik() {
        
        if (isset($_POST)) {
            $vlasnik_id = 1;
            $this->load->model('Vlasnici_model');
            $owner = new Vlasnici_model();
            $owner->load($vlasnik_id);
            $owner->naziv = $this->input->post('naziv');
            $owner->opis = $this->input->post('opis');
            //$this->direktor_id = $this->input->post('naziv');
            $owner->adresa = $this->input->post('adresa');
            $owner->mjesto = $this->input->post('mjesto');
            $owner->postanski_broj = $this->input->post('postanski_broj');
            $owner->telefon = $this->input->post('telefon');
            $owner->fax = $this->input->post('fax');
            $owner->ziroracun = $this->input->post('ziroracun');
            $owner->dnevnica_kn = $this->input->post('dnevnica_kn');
            $owner->dnevnica_eur = $this->input->post('dnevnica_eur');
            $owner->benzin_kn = $this->input->post('benzin_kn');
            $owner->benzin_eur = $this->input->post('benzin_eur');
            $owner->tecaj_kn_euro = $this->input->post('tecaj');
            $owner->save();
        }
        
        redirect('vlasnici');
    }

}