<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dash extends Controller_Main {

	public function action_index()
	{
        $this->template->content = View::factory('Dash/index');
        $year = $this->request->query("year");
        $this->template->content->year=$year;
        $this->template->content->summary = Model_Employee::tasks_summary($year);
        }
    public function action_employee()
    {
        $form_data = $this->request->post('person');
        Model_Employee::employee($form_data);
        $this->redirect('Dash?year='.date("Y"));
        Notify::msg("Person saved successfully");
    }
} // End Welcome
