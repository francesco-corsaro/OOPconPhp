<?php
class Convalida {
    public $name;
    public $errNomNum;
    public $hash;
    
    function __construct($name) {
        $this->name = $name;
        $this->errNomNum = '<div class="col-12 errore">Sono consentiti solo lettere e numeri</div>';
    }
    
    function pulisci_input() {
        $this->name= htmlspecialchars( $this->name);
        $this->name= trim( $this->name);
        $this->name= stripslashes($this->name);
        $this->name= strtolower( $this->name);
        return $this->name;
    }
    

    
    function controllo_nome(){
     if (!preg_match("/^[a-zA-Z ]*$/", $this->name)) {
         return $this->errNomNum;
     
     
     } else {
        
        return $this->pulisci_input();
     
     }
   
    }
    function controllo_Pwd(){
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$this->name)) {
        return $this->errNomNum;
        
        
    } else {
        
        return $this->pulisci_input();
        
    }
    
}
     /*
     function controllo_Pwd(){
         
         if (!preg_match("/^[a-zA-Z0-9 ]*$/",$this->name)){
             return $this->errNomNum;
         } else {
             
             $this->pulisci_input()=password_hash($this->pulisci_input(), PASSWORD_DEFAULT);
             return $this->pulisci_input();
         }
     }
     
   /*  function controllo_Info(){
         if (!preg_match("/^[0-9]*$/",$this->name) or $this->name <= $min or $this->name >= $max)
     }*/
     
}



     ?>