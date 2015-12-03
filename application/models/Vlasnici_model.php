<?php

class Vlasnici_model extends MY_Model {

    function __Construct() {
        parent::__Construct();
    }
    
    const DB_TABLE = 'vlasnici';
    const DB_TABLE_PK = 'id';

    public $id;
    public $naziv;
    public $opis;
    public $direktor_id;
    public $adresa;
    public $mjesto;
    public $postanski_broj;
    public $telefon;
    public $fax;
    public $ziroracun;
    public $dnevnica_kn;
    public $dnevnica_eur;
    public $benzin_kn;
    public $benzin_eur;
    public $tecaj_kn_euro;
    
    function getVlasniks(){
        $query = $this->db->get('vlasnici');
        return $query->result(); 
    }
    
    public function getVlasnik($id) {
        $query = $this->db->get_where('vlasnici', array('id' => $id));
        return $query->result();
    }
}

?>
