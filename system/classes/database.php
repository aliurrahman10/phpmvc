<?php

class database{

    public $host = HOST;
    public $user = USER;
    public $pass = PASSWORD;
    public $db   = DATABASE;
    public $con;
    public $result;


    public function __construct(){


        try {
            
            $this->con = new PDO("mysql:host=" . $this->host . ";dbname=". $this->db,$this->user,$this->pass);
            return $this->con;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }


    public function Query($qry, $params = []){
        if(empty($params)){
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();
        }else{
            $this->result = $this->con->prepare($qry);
            return $this->result->execute($params);
        }
    }


    public function fetchall(){
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }






}