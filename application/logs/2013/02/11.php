<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-11 14:30:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view dash/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/jolly/system/classes/Kohana/View.php:137
2013-02-11 14:30:17 --- DEBUG: #0 /var/www/jolly/system/classes/Kohana/View.php(137): Kohana_View->set_filename('dash/index')
#1 /var/www/jolly/system/classes/Kohana/View.php(30): Kohana_View->__construct('dash/index', NULL)
#2 /var/www/jolly/application/classes/Controller/Dash.php(7): Kohana_View::factory('dash/index')
#3 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Dash->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dash))
#6 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/jolly/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/jolly/system/classes/Kohana/View.php:137
2013-02-11 19:50:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notify' not found ~ APPPATH/views/template.php [ 40 ] in :
2013-02-11 19:50:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 23:33:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'auth' not found ~ APPPATH/views/template.php [ 27 ] in :
2013-02-11 23:33:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :