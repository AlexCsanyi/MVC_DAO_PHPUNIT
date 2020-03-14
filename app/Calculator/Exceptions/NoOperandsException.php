<?php 
    namespace App\Calculator\Exceptions;

    class NoOperandsException extends \Exception
    {
        protected $message = 'Please do not mix the carnivorous and non-carnivorous dinosaurs. It will be a massacre!';
    }
?>