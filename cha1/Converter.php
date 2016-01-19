<?php

/**
 *
 * Converter
 *
 * Handles conversion of JSON string to array and vice versa
 *
 * @class		Converter
 * @author 		Ore-Ofe Olurin
 * @version     0.0.1
 */
class Converter{ 
    /*
    * Converts a JSON String to an array and returns the array 
    *
    * @param string $string
    * @return Array
    *  
    * 
    */
    public static function toArray($string){
        
        return json_decode($string,true);
        
    }
    
    /*
    * Converts an array into a JSON Object and returns the object
    *
    * @param Array $array
    * @return string
    * 
    */
    public static function toJson($array){
		 return json_encode($array);
    }
}