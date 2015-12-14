<?php

class Relacije_model extends MY_Model {

    function __Construct() {
        parent::__Construct();
    }
    
    const DB_TABLE = 'relacije';
    const DB_TABLE_PK = 'id';

    public $id;
    public $nalog_id;
    public $od;
    public $do;
    public $km;
    public $auto_vrsta;
    public $iznos;
        
    // dohvati sve relacije za neki nalog
    public function getRelacije($nalog_id) {
        $query = $this->db->get_where('relacije', array('nalog_id' => $nalog_id));
        return $query->result();
    }
}

?>
