    <?php defined('SYSPATH') or die('No direct script access.');

class Model_Employee extends ORM
{

    public static function tasks_summary($year)
        {

            $sum2=DB::select(array('users.username',"username"),array(DB::expr("MONTH(tasks.created)"),"created"), array(DB::expr('SEC_TO_TIME(SUM(TIME_TO_SEC(time)  ) )'),'totaltime'))
                ->from('tasks')
                ->join('users')->on('users.id','=','tasks.user_id')
            ->where(db::expr('YEAR(tasks.created)'),'=',$year )
            ->group_by("users.id",DB::expr('MONTH(tasks.created)' ))
                ->execute();
            $my_summary=$sum2->as_array();
            $my_summary=Model_Employee::format_array($my_summary);
            return $my_summary;

        }
    public static function format_array($my_summary)
    {
        $formatted_array=array();
        foreach ($my_summary as $my_element):

            $formatted_array[$my_element['username']] []=$my_element;



        endforeach;
            return $formatted_array;
    }
    public static function name_id($username)
    {
        $username=ORM::factory('User')->where('username','=',$username)->find();
        return $username->id;
    }

    public static function salary($totaltime)
    {
        $money=18;

        $sum_money=(int)substr($totaltime, 0,2)*$money;

            return $sum_money;
    }

    public static function timesum($totaltime)
    {


        return ((int)substr($totaltime,0,2));
    }

    public static function employee($form_data)
    {

        $person = ORM::factory('User');
        $person->username=$form_data['username'];
        $person->email=$form_data['email'];
        $person->google_id='Null';
        $person->logins='0';
        $person->last_login='0';
        $person->save();
    }



}

/**
 * Created by JetBrains PhpStorm.
 * User: kaia
 * Date: 3/27/13
 * Time: 5:03 PM
 * To change this template use File | Settings | File Templates.
 */