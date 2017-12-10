<?php
class model {
    protected $host;
     protected $dbname;
     protected $aduser;
     protected $pass;
            
            function __construct() {
                 $host = "localhost";
                 $dbname = "blog";
                  $aduser = "root";
                  $pass = "";
        $this -> pdo = new PDO("mysql:host=$host;dbname=$dbname", $aduser, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        
    }
    
    public function Select($select = "*", $from = null, $where = null, $orderby =null, $limit = null, $having = null){
        $query = "SELECT ".$select;
        if($from != null) $query .= " FROM ". $from;
        return $this->pdo->exec($query);
        
    }

}