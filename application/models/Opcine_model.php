<?php

class Opcine_model extends MY_Model {

    function __Construct() {
        parent::__Construct();
    }
    
    const DB_TABLE = 'opcine';
    const DB_TABLE_PK = 'id';

    public $id;
    public $naziv;
    public $sifra;
    
    function getOpcine(){
        $query = $this->db->get('opcine');
        return $query->result(); 
    }
    
    public function getOpcina($id) {
        $query = $this->db->get_where('opcine', array('id' => $id));
        return $query->result();
    }
}

?>
