<?php
class framework {


    public function view($filename,$data = []){
        if(file_exists('../app/views/'.$filename.'.php')){
            require_once '../app/views/'.$filename.'.php';
        }else{
            echo "File not exist!";
        }
        
    }


    public function model($modelname){
        if(file_exists('../app/models/'.$modelname.'.php')){
            require_once '../app/models/'.$modelname. '.php';
            return new $modelname;
        }
    }


    public function input($inputname){
		if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){

			return $_POST[$inputname];

		}else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"){
			return $_GET[$inputname];
	    }

    }
    

    public function helper($helpername){
        if(file_exists("../system/helpers/".$helpername.".php")){
            require_once "../system/helpers/".$helpername. ".php";
        }else{
            echo "Helper not found";
        }
    }
}