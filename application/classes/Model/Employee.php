    <?php defined('SYSPATH') or die('No direct script access.');

class Model_Employee extends ORM
{

    public static function tasks_summary($year)
        {

            $sum2=DB::select(array('users.username',"username"),array(DB::expr("MONTH(tasks.created)"),"created"), array(DB::expr('SEC_TO_TIME(SUM(TIME_TO_SEC(time)  ) )'),'totaltime'))
                ->from('tasks')
                ->join('users')->on('users.id','=','tasks.user_id')
            ->group_by("users.id",DB::expr("MONTH('tasks.created')"))
                //->where(DB::expr("YEAR('tasks.created')"),"=",$year)
                ->execute();
                $summary_array=Model_Employee::unite_rows($sum2);
            return $summary_array;

        }
    public static function unite_rows($my_array)
    {
        $united_array=array();
        foreach ($my_array as $member):
            $united_array[  $member['username']  ][]=$member;

            endforeach;
        return $united_array;
    }
    public static function salary($totaltime)
    {
        $money=18;

        $sum_money=(int)substr($totaltime, 0,2)*$money;

            return $sum_money;
    }

}

/**
 * Created by JetBrains PhpStorm.
 * User: kaia
 * Date: 3/27/13
 * Time: 5:03 PM
 * To change this template use File | Settings | File Templates.
 */