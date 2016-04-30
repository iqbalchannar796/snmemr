<?php
/**
 * Created by PhpStorm.
 * User: Iqbal
 * Date: 4/4/2016
 * Time: 9:39 AM
 */

namespace App\Http\Library;


class PricesClass
{
    function getPrices() {
        return 'Class';
    }
  public static function availability($availability){
           if($availability==1)
           {
             echo 'In Stock';
           }elseif($availability==1)
           {
             echo 'Out of Stock';
           }
  }

    public static function availabilityclass($availability){
        if($availability==1)
        {
            echo 'instock';
        }elseif($availability==1)
        {
            echo 'outofStock';
        }
    }

}