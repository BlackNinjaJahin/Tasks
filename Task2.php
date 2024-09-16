<?php

interface Logger {
    public function log($message);
}

class FileLogger implements Logger{

       private $filepath;

       public function __construct($filepath) {

          $this->filepath = $filepath;
       }

       public function log($message) {

         file_put_contents($this->filepath,$message.PHP_EOL,FILE_APPEND);

       }
}

class ConsoleLogger implements Logger{


    public function log($message) {

           function log($message){


               echo $message . PHP_EOL;
           }
   
    }


}
$FileLogger = new FileLogger('log.txt');