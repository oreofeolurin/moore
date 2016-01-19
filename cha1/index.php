<?php   

include_once 'Converter.php';


//Create a json test string 
$testString = '{"name":"oreofeolurin","sex":"male","country":"nigeria","origin":"Ilaro"}';

//Call our toArray function on it
$array = Converter::toArray($testString);


//Header for array section
echo "<h4>Array</h4>";


//Lets make sure the right format was used
if($array == NULL)
    echo "Bad JSON";
else 
    var_dump($array);
    
 echo "<br/>";
    
    
   
   
//Header for json object section
echo "<h4>JSON</h4>";

//lets get our decoded array as test array
$testArray = $array;

//Call our toJson function on it
$json = Converter::toJson($testArray);


//Lets Handle success/failure
if($json)
    var_dump($json);
    
else 
    echo "Error ecoding json";
    
