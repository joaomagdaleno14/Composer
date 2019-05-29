<?php
namespace Classes;

use Classes;
use Outras;
Class ClassTeste extends ClassIntegracao{

    private $Outras;

    public function __construct(){
        $this->Outras=new Outras\ClassFinal();
        echo "Class Teste funcionando!";
        echo "<br><hr><br>";
        echo $this->Integrar();
        echo "<br><hr><br>";
        $this->Outras->TesteFinal();
    }

}