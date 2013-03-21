<?php
class Model_User extends Model_Auth_User
{
    public static function month($month){
        $month = date("F", mktime(0, 0, 0, $month, 10));

        return __($month);
    }
    public static function year($year){
        return $year;
    }
    public static function employee($user){
        return $user;
    }

public function rules()
{
return [
'google_id' => [
['not_empty']
]
];
}
}