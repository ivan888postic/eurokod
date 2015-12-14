<?php

class Putninalozi_model extends MY_Model {

    function __Construct() {
        parent::__Construct();
    }
    
    const DB_TABLE = 'putni_nalozi';
    const DB_TABLE_PK = 'id';

    public $id;
    public $djelatnik_id;
    public $vrijeme_naloga;
    public $datum_putovanja;
    public $dolazak_vrijeme;
    public $odlazak_vrijeme;
    public $mjesto_putovanja;
    public $trajanje;
    public $svrha_putovanja;
    public $auto_id;
    public $predujam_iznos;
    public $broj_sati;
    public $broj_dnevnica;
    public $iznos_dnevnice;
    
    
    function getNalozi(){
        $query = $this->db->get('putni_nalozi');
        return $query->result(); 
    }
    
    public function getNalog($id) {
        $query = $this->db->get_where('putni_nalozi', array('id' => $id));
        return $query->result();
    }
    
    function getNaloziJoined() {
        $query = $this->db->query(
                    'SELECT putni_nalozi.*, automobili.naziv auto_naziv, automobili.reg_oznaka, automobili.km, djelatnici.naziv as djelatnik_naziv, djelatnici.titula, djelatnici.posao, djelatnici.adresa FROM putni_nalozi JOIN automobili ON putni_nalozi.auto_id = automobili.id JOIN djelatnici ON putni_nalozi.djelatnik_id = djelatnici.id');
        return $query->result();
    }
    
    function getNalogJoined($id) {
        $query = $this->db->query(
                    "SELECT putni_nalozi.*, automobili.naziv auto_naziv, automobili.reg_oznaka, automobili.km, djelatnici.naziv as djelatnik_naziv, djelatnici.titula, djelatnici.posao, djelatnici.adresa FROM putni_nalozi JOIN automobili ON putni_nalozi.auto_id = automobili.id JOIN djelatnici ON putni_nalozi.djelatnik_id = djelatnici.id WHERE putni_nalozi.id = $id ");
        return $query->result();
    }
}

?>
