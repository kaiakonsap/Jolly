<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Tasks extends Controller_Main {
    public function action_delete()
	{
        $id = $this->request->param('id');
        ORM::factory('Task')->where('id', '=',$id)->find()->delete();
        $this->redirect("Dash");
        Notify::msg("Task deleted successfully");

    }
    public function action_create_new()
    {
        $id = $this->request->param('id');
        $name = $this->request->param('name');
        $time = $this->request->param('time');
        $notes = $this->request->param('notes');
        $user_id = $this->request->param('user_id');
        $created = $this->request->param('created');
        DB::insert('tasks', array('id', 'name' ,'time' ,'notes' ,'user_id' ,'created'))
        ->values($id, $name ,$time ,$notes ,$user_id ,$created);
        $this->redirect("Dash");
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