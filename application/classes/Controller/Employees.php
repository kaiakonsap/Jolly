<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Employees extends Controller_Main {

	public function action_view()
	{
        $this->template->content = View::factory('employees/view');
        $this->template->content->tasks = ORM::factory('Task')->find_all();
	}

} // End Welcome
