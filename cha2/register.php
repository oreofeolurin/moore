<?php
include_once "DBObject.php";


$DBObject = new DBObject();
$DBH = $DBObject->DBH;

    if(isset($_POST["fullname"])){
        
        $STH = $DBH->prepare("INSERT INTO users (fullname,email,password,created_date) VALUES(?,?,?,NOW()) ");
        $STH->execute(array($_POST["fullname"],$_POST["email"],$_POST["password"]));
        
        $updated = $STH->rowCount();
		

        if($updated == 1)
            echo json_encode(array("success"=>true));
        else
            echo json_encode(array("success"=>false));
           
           		
        
    }


	