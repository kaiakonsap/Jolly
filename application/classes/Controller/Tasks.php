<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Tasks extends Controller_Main {
    public function action_delete()
	{
        $id = $this->request->param('id');
        vardump($id);
        ORM::factory('Task')->where('id', '=',$id)->find()->delete();
        $this->redirect("employees");
        Notify::msg("Task deleted successfully");

    }
    public function action_create_new()
    {

        ORM::factory('Task')->DB::insert('tasks', array('id', 'name' ,'time' ,'notes' ,'user_id' ,'created'));
        $this->redirect("employees");
        Notify::msg("Task saved successfully");

    }

}
/**
 * Created by JetBrains PhpStorm.
 * User: kaia
 * Date: 3/19/13
 * Time: 10:20 PM
 * To change this template use File | Settings | File Templates.
 */