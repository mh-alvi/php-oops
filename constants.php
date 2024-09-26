<?php

class CarX{
    public const NO_OF_WHEELS = "no of car wheels is 4";
    public function noOfWheel(){
        return self::NO_OF_WHEELS;
    }
}
// echo Cars::NO_OF_WHEELS;
$wheels = new CarX();
echo $wheels->noOfWheel();

//for math
class Math{
    const PI = 3.14159;
    const EULER = 2.71828;
    public function calculateArea($radius){
        return self::PI *pow($radius, 2);
    }
}

//defining HTTP status code
class HttpStatus{
    const OK = 200;
    const CREATED = 201;
    const BAD_REQUEST = 400;
    const NOT_FOUND = 404;
    const INTERNET_SERVER_ERROR = 500;
}

//Definig Configuration values
class Config{
    const MAX_FILE_SIZE = 1024*1024;
    const CACHE_TIMEOUT = 3600;
    const LOG_LEVEL = "info";
}