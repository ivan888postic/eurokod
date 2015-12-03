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
    
    function getDjelatniks(){
        $query = $this->db->get('djelatnici');
        return $query->result(); 
    }
    
    public function getDjelatnik($id) {
        $query = $this->db->get_where('djelatnici', array('id' => $id));
        return $query->result();
    }
}

?>
