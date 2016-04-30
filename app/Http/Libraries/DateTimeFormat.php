<?php
/**
 * Created by PhpStorm.
 * User: Iqbal
 * Date: 4/16/2016
 * Time: 11:24 AM
 */

namespace App\Http\Libraries;


class DateTimeFormat
{
    public static function convertDateForDB($date){
        return date('Y-m-d',strtotime($date));
    }
   public static function convertDateForView($date){
    return date('d/m/Y',strtotime($date));
   }
    public static function convertTimeForView($time){
        return date('h:i A',strtotime($time));
    }
}