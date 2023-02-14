<?php

namespace Analistics\Customers\Commom;
class Functions{

    public function Equals($base,$value){
        return strpos(basename($base),$value);
    }
}


?>