<?php 

namespace CarroHibrido;
require 'vendor/autoload.php';

use App\Carro;


// Para criar uma herança, basta usar o extends
class Hibrido extends Carro {

    public function __construct($nome){
        $this->nome = $nome;
    }

}

?>