<?php
class userController extends framework{
    public function index(){
        $this->helper("link");
        $this->view("userView");
    }

    public function usersingup(){
        $mymodel = $this->model("userModel");
        


        $author = $this->input("author");
        $title = $this->input("title");
        $content = $this->input("content");

        if($mymodel->signup($author, $title, $content)){
            echo "Successfully Inserted!";
        }else{
            echo "Error Occured!";
        }

        
    }
}

