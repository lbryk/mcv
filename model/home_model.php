<?php

class home_model extends model {

    function __construct() {
        parent::__construct();   
    }
    
    public function please_show_user($id){

        $query = $this -> pdo->query("SELECT login FROM user WHERE id=2");
    
        while($row = $query->fetch(PDO::FETCH_NUM)){
            
            return $row[0];

       }
    }

}
