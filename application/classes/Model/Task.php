<?php defined('SYSPATH') or die('No direct script access.');
class Model_Task extends ORM
{

       public function getformatedtime($time)
       {
           return substr($time,0,5);
       }

    public function salary($time)
    {
        $rate=0.2;
        $money=substr($time,0,5)*60*$rate+substr($time,0,2)*$rate.' E';
        return $money;
    }


}