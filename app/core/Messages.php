<?php

class Messages {
    
    public const SUCCESS = 'success';
    public const INFO = 'info';
    public const WARNING = 'warning';
    public const DANGER = 'danger';

    public static function setMsg($msg, $type = self::INFO){

        self::init();

        $_SESSION['msg'][] = array('msg' => $msg, 'type'=>$type);

    }

    public static function getMsg(){
        self::init();

        if(isset($_SESSION['msg'])){
            
            return $_SESSION['msg'];

        } else {

            return false;

        }

    }

    public static function clearMsg(){

        self::init();

        unset($_SESSION['msg']);

    }

    private function init(){
        
        if(!isset($_SESSION)){
        
            session_start();
        
        }

    }
    
}


?>