<?php 

class Animal {
     public $name;
     public $legs=2;
     public $cold_blooded = false;
     
     public function __construct($name) {
        $this->name = $name;
      }
      /*
     public function get_name($name) {    
         $this->$name = $name;
          echo "Nama Animal: $this->name <br>";
     }
     
     public function get_legs() {    
          echo "Jumlah kaki: $this->legs <br>";
     }

     public function get_cold_blooded() {    
          echo "Cold Blooded: $this->cold_blooded <br>";
          $my-var = 
     }

     public function tampilkan() {    
          echo "Animal dengan nama " . $this->name . " memiliki " . $this->legs . " buah dan " . $this->cold_blooded;
     }
     */

}