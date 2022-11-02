<?php

    function connect(){
        $cnx = new mysqli('localhost', 'root', '', 'veillejointure');
        try{
            return $cnx;
        }catch(Exception $e){
            die('error cnx'. getMessage());
    }
}