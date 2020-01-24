<?php
class Convalida {
    public $name;
    public $errNomNum;
    public $min,$max;
    
    function __construct($name) {
        $this->name = $name;
       
    }
    
    function pulisci_input() {
        $this->name= htmlspecialchars( $this->name);
        $this->name= trim( $this->name);
        $this->name= stripslashes($this->name);
        $this->name= strtolower( $this->name);
        return $this->name;
    }
    
    function convalida_CF(){
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$this->name)){
            echo "I valori del CF devono essere alfanumerici";
        } else {
            return $this->pulisci_input();
            header(index.php);
        }
    }
    
    function controllo_nome(){
     if (!preg_match("/^[a-zA-Z ]*$/", $this->name)) {
         
         return $this->errNomNum;
     
     
     } else {
        
        $this->pulisci_input();
        header(index.php);
     }
   
    }
   function controllo_Pwd(){
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$this->name)) {
        return $this->errNomNum;
        
        
    } else {
        $this->pulisci_input();
        $this->name= password_hash($this->name, PASSWORD_DEFAULT);
        $this->name;
        header(index.php);
    }
    
}
         

    function controllo_Info($min,$max) {
        if (!preg_match("/^[0-9]*$/",$this->name) or $this->name <= $min or $this->name >= $max){
            return '<div class="col-12 errore">Valore età non valido</div>';
            
        } else {
            
            $this->pulisci_input();
            header(index.php);
        }
    }
}


     ?>