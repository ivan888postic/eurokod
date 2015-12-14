<?php

class Troskovi_model extends MY_Model {

    function __Construct() {
        parent::__Construct();
    }
    
    const DB_TABLE = 'troskovi';
    const DB_TABLE_PK = 'id';

    public $id;
    public $nalog_id;
    public $opis;
    public $iznos;
        
    // dohvati sve relacije za neki nalog
    public function getTroskovi($nalog_id) {
        $query = $this->db->get_where('troskovi', array('nalog_id' => $nalog_id));
        return $query->result();
    }
}

?>
