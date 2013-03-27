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

        $form_data = $this->request->post('tasks');
        Notify::success(count($form_data));
       Model_Task::create_new($form_data);

       $this->redirect("Dash");
       Notify::msg("Task saved successfully");

    }

    public function action_edit()
    {
        $this->template->content = View::factory('tasks/view');
        $this->template->content->tasks_edit = ORM::factory('Task')->where('id', '=', $this->request->param('id'))->find();
    }
    public function action_update()
    {
        $form_data = $this->request->post('task');
        Notify::msg($form_data["id"]);
        Model_Task::update_me($form_data);
          $this->redirect("Dash");

     }

}
/**
 * Created by JetBrains PhpStorm.
 * User: kaia
 * Date: 3/19/13
 * Time: 10:20 PM
 * To change this template use File | Settings | File Templates.
 */