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
/*
abstract class Errore {
    public $msgErr;
    public $inserito;
    abstract public function nome();
    abstract public function cognome();
    abstract public function password() ;
    abstract public function info() ;
    
    
}
class NomeErr extends Errore{
   public $nome;
    function __construct() {
        $this->inserito= $inserito;
    }
    function nome(){
        if (!preg_match("/^[a-zA-Z ]*$/", $this->inserito)) {
            $msgErr='<div class="col-12 errore">Sono consentiti solo lettere e numeri</div>';
            
            return $msgErr;
        } else {
          $nome=new Convalida();
          return $nome->pulisci_input($this->inserito);
        }
        }
        
    }
    
}
    
    
*/

//echo $apple->get_color();
?>