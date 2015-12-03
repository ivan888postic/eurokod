<?php

class Djelatnici_model extends MY_Model {

    function __Construct() {
        parent::__Construct();
    }

    const DB_TABLE = 'djelatnici';
    const DB_TABLE_PK = 'id';

    public $id;
    public $naziv;
    public $titula;
    public $posao;
    public $adresa;
    public $opcina_preb_id;
    public $opcina_rad_id;

    function getDjelatniks() {
        $query = $this->db->get('djelatnici');
        return $query->result();
    }

    function getDjelatniksJoined() {
        $query = $this->db->query(
                'SELECT djelatnici.*, preb_opcina.naziv as preb_opcina, rad_opcina.naziv as rad_opcina FROM djelatnici
                JOIN opcine as preb_opcina ON djelatnici.opcina_preb_id = preb_opcina.id	
                JOIN opcine as rad_opcina ON djelatnici.opcina_rad_id = rad_opcina.id');
        return $query->result();
    }

    public function getDjelatnik($id) {
        $query = $this->db->get_where('djelatnici', array('id' => $id));
        return $query->result();
    }

}

?>
