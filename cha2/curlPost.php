<?php

if(isset($_POST['register'])){
        
    // lets prepare post data
    $post = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'fullname'   => $_POST['fullname']
    ];
        

    // lets int curl with url
    // maybe http://api.moore.com/v1/users/register/ someday (:
    $ch = curl_init('http://localhost/challenge/Moore/cha2/register.php'); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $response = curl_exec($ch);
    curl_close($ch);

    // get response 
    var_dump($response);

}