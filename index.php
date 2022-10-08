<?php
$arr = [
	"word" => "Hello" ,
	"num" => 5 ,
	"bol1" => true ,
	"bol2" => false ,
	"pi" => 3.14 ,
	[ "name" => "Aalaa" ,
	  "level" => 400
	],
	[ "name" => "Sherehan" ,
	  "level" => 400
	],  
];

if (gettype($arr) == "array") {
	 array_map ( function ($arry) use ($arr){
	 	if ( gettype($arry) == "array" ) {
	 		if (array_key_exists("name", $arry) == true) {
	 			if (in_array("Aalaa", $arry) == true) {
	 			 print_r($arry);
	 		 }
	 		}
	 	 } 
	 } , $arr);
}