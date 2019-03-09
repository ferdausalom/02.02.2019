<?php

class MyCalculator{
    
    function calculator($data){
        $btn = $data["btn"];
        switch ($btn){
            case '+':
                $result = $data['firstNumber']+$data['lastNumber'];
                break;
            case '-':
                $result = $data['firstNumber']-$data['lastNumber'];
                break;
            case '*':
                $result = $data['firstNumber']*$data['lastNumber'];
                break;
            case '/':
                $result = $data['firstNumber']/$data['lastNumber'];
                break;
            case '%':
                $result = $data['firstNumber']%$data['lastNumber'];
                break;
        }
        return $result;
    }
    
}