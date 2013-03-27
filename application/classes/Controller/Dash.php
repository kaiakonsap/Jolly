<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dash extends Controller_Main {

	public function action_index()
	{
        $this->template->content = View::factory('Dash/index');
        $year = $this->request->query("year");
        $this->template->content->tasks_summary;
    }
        }

} // End Welcome
