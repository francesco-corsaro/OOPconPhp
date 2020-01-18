<?php
class Sicurezza {
    public $data;
    
    function __construct($data){
        $this->data=$data;
    }
    
    function test_input() {
        trim( $this->data);
        stripslashes( $this->data);
        htmlspecialchars($this->data);
        //global  $dato;
        //  $dato=$data;
        return $this->data;
        
    }
}


?>