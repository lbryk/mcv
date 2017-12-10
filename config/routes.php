<?php
// tworzenie rozruchu
/* pierwszy traser bez parametrów
class Traser{
    function __construct() {
        $this->request= $_GET['url'];
       // print_r($this->request); //test wyświetlania adresu (2 raz)
        $this->controller = explode("/", $this->request)[0]; // rozbicie adresu na tablice w celu "wydobycia" kontrolera
        //echo $this-> controller; // wyświetlenie kontrolera test 3 -> usunąć z adresu nazwę kontrolera poda index.php, więc poniżej warunek na zmianę na kontroler
        if($this->request == "index.php" || $this->request == "index.html") $this->controller = "home";
       // echo $this-> controller; // test 3
    }
}*/

// traser z parametrami
class traser{
    function __construct() {
        $this->request= $_GET['url'];
        $this ->request = rtrim($this->request, "/"); // cięcie adresu url by pobierał odpowiednie parametry
        $this-> params = explode("/", $this->request);
        $this->controller =  $this-> params[0];// rozbicie adresu na tablice w celu "wydobycia" parametró
        if($this->request == "index.php" || $this->request == "index.html") $this->controller = "home";
        
        $file = 'controller/'.$this->controller.'.php'; // dołączanie kontrolerów
        
            if(file_exists($file)){
                require_once $file;
                $this->control=new $this->controller($this->params);
                
            }else{
                echo '<script> alert("Nie można wczytać zasobów strony");</script>';
            }
    }
}
 

// Po tym stwórz kontroler strony głównej -> index.php -> home.php
?>

