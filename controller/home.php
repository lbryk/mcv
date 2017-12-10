<?php

// najpierw stwórz plik controller.php
class home extends controlh {

    function __construct($params) {
        parent::__construct();
       // echo " index.php"; //test konstruktora (params dodaj po teście)
      // print_r($params);
      
      // dopiero przy modelach:
      require_once 'model/home_model.php'; 
      $this -> model = new home_model();
        // ---------------
      
      $action = "ShowUser";
      $this->$action();
      
    }
    
    private function ShowUser(){
        //echo "test"; // testowanie jeszcze przed stworzeniem modelu
        echo $this->model->please_show_user(1);
    }

}