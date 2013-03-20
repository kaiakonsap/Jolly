<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 07:27:47 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant rate - assumed 'rate' ~ APPPATH/classes/Model/Task.php [ 13 ] in /var/www/jolly/application/classes/Model/Task.php:13
2013-03-19 07:27:47 --- DEBUG: #0 /var/www/jolly/application/classes/Model/Task.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/jolly/...', 13, Array)
#1 /var/www/jolly/application/views/employees/view.php(87): Model_Task->salary('12:12:12')
#2 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#3 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#4 /var/www/jolly/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/jolly/application/views/template.php(40): Kohana_View->__toString()
#6 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#7 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#8 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#12 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/jolly/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/jolly/application/classes/Model/Task.php:13
2013-03-19 17:09:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: month ~ APPPATH/classes/Model/User.php [ 10 ] in /var/www/jolly/application/classes/Model/User.php:10
2013-03-19 17:09:26 --- DEBUG: #0 /var/www/jolly/application/classes/Model/User.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 10, Array)
#1 /var/www/jolly/application/views/employees/view.php(17): Model_User::year('2013')
#2 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#3 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#4 /var/www/jolly/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/jolly/application/views/template.php(40): Kohana_View->__toString()
#6 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#7 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#8 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#12 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/jolly/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/jolly/application/classes/Model/User.php:10
2013-03-19 17:37:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: employee ~ APPPATH/views/employees/view.php [ 16 ] in /var/www/jolly/application/views/employees/view.php:16
2013-03-19 17:37:49 --- DEBUG: #0 /var/www/jolly/application/views/employees/view.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 16, Array)
#1 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#2 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#3 /var/www/jolly/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/jolly/application/views/template.php(40): Kohana_View->__toString()
#5 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#6 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#7 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#11 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/jolly/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/jolly/application/views/employees/view.php:16
2013-03-19 17:44:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function word() ~ APPPATH/classes/Model/User.php [ 5 ] in :
2013-03-19 17:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 17:45:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::employee() ~ APPPATH/views/employees/view.php [ 16 ] in :
2013-03-19 17:45:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 17:45:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::employee() ~ APPPATH/views/employees/view.php [ 16 ] in :
2013-03-19 17:45:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :