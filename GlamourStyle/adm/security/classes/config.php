<?php

class config {

    public $Cnf = array();

    function __construct() {
        $curpageURL = $_SERVER["SERVER_NAME"];
        $db = explode('.', $curpageURL);
        $this->Cnf['Host'] = '127.0.0.1';
        
        if ($db[0] == 'localhost') {
            $this->Cnf['DbName'] = 'style';
        } else {
            $this->Cnf['DbName'] = $db[0];
        }
        $this->Cnf['User'] = 'root';
        $this->Cnf['Pass'] = '4875372G';
    }
}
