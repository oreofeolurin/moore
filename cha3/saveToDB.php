<?php
include_once "DBObject.php";


$DBObject = new DBObject();
$DBH = $DBObject->DBH;

    if(isset($_POST["acknowledge"])){
        
        $STH = $DBH->prepare("INSERT INTO acknowledgment (name,created_date) VALUES(?,NOW()) ");
        $STH->execute(array($_POST["acknowledge"]));
        
        $updated = $STH->rowCount();
		

        if($updated == 1)
            echo json_encode(array("success"=>true));
        else
            echo json_encode(array("success"=>false));
           
           		
        
    }


	