<?php
namespace planet\moon;
require("Mars.php");

   class Phobos{
      private $mars=false;

      function __construct($planet){
         if (gettype($planet)=="string"){
            if (get_class($planet)=="planet\Mars"){      
               $this->mars=true;
               echo "Phobos placed in orbit.\n";
            }
            else{
               echo "No planet given>\n";
            }
         }
         else{
            echo "No planet given>\n";  
         }
      }


      function getMars(){
         return $this->mars;
      }


   }