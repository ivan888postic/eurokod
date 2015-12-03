<?php

class Automobili_model extends MY_Model {

    function __Construct() {
        parent::__Construct();
    }
    
    const DB_TABLE = 'automobili';
    const DB_TABLE_PK = 'id';

    public $id;
    public $naziv;
    public $reg_oznaka;
    public $km;
    
    function getAutomobils(){
        $query = $this->db->get('automobili');
        return $query->result(); 
    }
    
    public function getAutomobil($id) {
        $query = $this->db->get_where('automobili', array('id' => $id));
        return $query->result();
    }
}

?>
