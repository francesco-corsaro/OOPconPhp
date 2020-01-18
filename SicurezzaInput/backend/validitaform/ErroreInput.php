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

class Nome extends Convalida{
     function controllo(){
     if (!preg_match("/^[a-zA-Z ]*$/", $this->name)) {
     return'<div class="col-12 errore">Sono consentiti solo lettere e numeri</div>';
     
     
     } else {
         
        return $this->pulisci_input();
     /* $nome=new Convalida($this->inserito);
     return $nome->pulisci_input();*/
     }
     }

}
     ?>