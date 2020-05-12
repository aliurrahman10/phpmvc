<?php
class userModel extends database{



    public function signup($author, $title, $content){

        if($this->Query("INSERT INTO posts(author,title,content)VALUES(?,?,?)",[$author, $title, $content])){
            return true;
        }else{
            return false;
        }


    }


}