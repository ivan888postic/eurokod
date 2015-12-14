<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Djelatnici extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Djelatnici_model');
        $this->load->model('Opcine_model');
    }

    public function index() {
        $data['naslov'] = 'Podaci o djelatnicima';
        $djelatnici = $this->Djelatnici_model->getDjelatniksJoined();
        $data['djelatnici'] = $djelatnici;

        $opcine = $this->Opcine_model->getOpcine();
        $data['opcine'] = $opcine;

        $djelatnici_pogled = $this->load->view("djelatnici/pregled", $data, true);
        $data['body'] = $djelatnici_pogled;
        $this->load->view("okvir/podloga", $data);
    }

    public function dodajDjelatnika() {
        if (isset($_POST)) {
            $djelatnik = new Djelatnici_model();
            $djelatnik->naziv = $this->input->post('naziv');
            $djelatnik->titula = $this->input->post('titula');
            $djelatnik->adresa = $this->input->post('adresa');
            $djelatnik->posao = $this->input->post('posao');
            $djelatnik->opcina_preb_id = $this->input->post('preb_opcina_id');
            $djelatnik->opcina_rad_id = $this->input->post('preb_rad_id');
            $djelatnik->save();
        }

        redirect('djelatnici');
    }

    public function editDjelatnik() {
        if (isset($_POST)) {
            $id = $this->input->post('id');
            $djelatnik = new Djelatnici_model();
            $djelatnik->load($id);
            $data['djelatnik'] = $djelatnik;
            $opcine = $this->Opcine_model->getOpcine();
            $data['opcine'] = $opcine;

            $edit = $this->load->view('djelatnici/edit', $data, TRUE);
            $data['body'] = $edit;
            $this->load->view("okvir/podloga", $data);
        }
    }

    public function edit() {
        if (isset($_POST)) {
            $id = $this->input->post('id');
            $djelatnik = new Djelatnici_model();
            $djelatnik->load($id);
            $djelatnik->naziv = $this->input->post('naziv');
            $djelatnik->titula = $this->input->post('titula');
            $djelatnik->adresa = $this->input->post('adresa');
            $djelatnik->posao = $this->input->post('posao');
            $djelatnik->opcina_preb_id = $this->input->post('preb_opcina_id');
            $djelatnik->opcina_rad_id = $this->input->post('preb_rad_id');
            $djelatnik->save();
        }


        redirect('djelatnici');
    }

    public function obrisi($id) {
        $id = $this->input->post('id');
        log_message('error', 'deleting djelatnik id = ' . $id);
        $djelatnik = new Djelatnici_model();
        $djelatnik->load($id);
        $djelatnik->delete();

        redirect('djelatnici');
    }


}