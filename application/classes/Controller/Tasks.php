<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Tasks extends Controller_Main {
    public function action_delete()
	{
        $id = $this->request->param('id');
        ORM::factory('Task')->where('id', '=',$id)->find()->delete();
        Notify::msg("Task deleted successfully");
        $this->redirect("Dash");


    }
    public function action_create_new()
    {

        $form_data = $this->request->post('task');
        Notify::success(count($form_data));
       Model_Task::create_new($form_data);

       $this->redirect("Dash");
       Notify::msg("Task saved successfully");

    }

    public function action_edit()
    {
        $id = $this->request->param('id');
        ORM::factory('Task')->where('id', '=',$id)->find()->update();





        $this->redirect("Dash");
        Notify::msg("Task edited successfully");

    }
}
/**
 * Created by JetBrains PhpStorm.
 * User: kaia
 * Date: 3/19/13
 * Time: 10:20 PM
 * To change this template use File | Settings | File Templates.
 */