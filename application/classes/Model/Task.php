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
        $money=substr($time,0,5)*60*$rate+substr($time,0,2)*$rate.'  €';
        return $money;
    }
    public static function get_total_hours( $tasks)
    {
        $timesum=0;
        foreach ($tasks as $time):

            $mytime=$time->time;//take the time out of task
        $conv=(int)substr($mytime,-7,2)*60;
        $timesum+=$conv;
            endforeach;

        return $timesum;
    }

    public static function get_total_pay( $tasks)
    {
        $timesum=0;
        foreach ($tasks as $time):

            $mytime=$time->time;//take the time out of task
            $conv=(int)substr($mytime,-7,2)*60;
            $timesum+=$conv;
        endforeach;

        return $timesum*0.2.' €';
    }

    public static function create_new($form_data)
    {

       // $user = ORM::factory('User')->where("username", "=", $form_data["id"])->find();
        $tasks = ORM::factory('Task');
        $tasks->name=$form_data['name'];
        $tasks->time=$form_data['time'];
        $tasks->notes=$form_data['notes'];
        $tasks->user_id='2';
        //$tasks->user_id=$user->id;
        $tasks->created=date("Y-m-d H-i-s", time());
        $tasks->save();
    }
    public static function update_me($formdata){


        $tasks = ORM::factory('Task',$formdata['task_id']);
       $tasks->name=$formdata['name'];
        $tasks->time=$formdata['time'];
       $tasks->notes=$formdata['notes'];
        $tasks->user_id=$formdata['id'];
        $tasks->created=$formdata['created'];
        $tasks->save();

    }
}