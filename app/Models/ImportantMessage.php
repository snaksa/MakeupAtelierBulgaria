<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImportantMessage
 *
 * @author sinan
 */

namespace App\Models;

use \DB;

class ImportantMessage {
    public static function UpdateMessage($message, $show){
        $update = DB::update("UPDATE important_message SET message = ?, showMessage = ?", [$message, $show]);
    }  
    
    public static function GetMessageProperties(){
        $message = DB::select("SELECT * FROM important_message");
        return $message;
    }
}
