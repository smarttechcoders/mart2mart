<?php

class ModelCheckSession{

    function __construct()
    {
        
    }
    function populate(){

        if($_SESSION['usersId'] ||  $_SESSION['usersName'] || $_SESSION['usersEmail']){
            return true;
        }
        else{
            return false;   
        }
    }
}