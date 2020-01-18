<?php
class Convalida {
    public $name;
    
    
    function __construct($name) {
        $this->name = $name;
       
    }
    function pulisci_input() {
        $this->name=  htmlspecialchars( $this->name);
        $this->name= trim( $this->name);
        $this->name=stripslashes( $this->name);
        $this->name= strtolower( $this->name);
        return $this->name;
    }
    
}
abstract class Errore {
    public $msgErr;
    
    abstract public function nome();
    abstract public function cognome();
    abstract public function password() ;
    abstract public function info() ;
}

    
    


//echo $apple->get_color();
?>