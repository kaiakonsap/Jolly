<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-27 11:28:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Employees.php [ 8 ] in :
2013-02-27 11:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-27 11:33:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'each' (T_STRING), expecting '(' ~ APPPATH/classes/Controller/Employees.php [ 10 ] in :
2013-02-27 11:33:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-27 11:39:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/Controller/Employees.php [ 10 ] in :
2013-02-27 11:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-27 12:39:39 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/jolly/application/classes/Controller/Employees.php:7
2013-02-27 12:39:39 --- DEBUG: #0 /var/www/jolly/application/classes/Controller/Employees.php(7): Kohana_View->__get('content')
#1 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Employees->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#4 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/jolly/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/jolly/application/classes/Controller/Employees.php:7
2013-02-27 13:31:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 40 ] in /var/www/jolly/application/views/template.php:40
2013-02-27 13:31:39 --- DEBUG: #0 /var/www/jolly/application/views/template.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
#1 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#2 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#3 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#7 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/jolly/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/jolly/application/views/template.php:40
2013-02-27 13:44:29 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/jolly/application/classes/Controller/Employees.php:7
2013-02-27 13:44:29 --- DEBUG: #0 /var/www/jolly/application/classes/Controller/Employees.php(7): Kohana_View->__get('content')
#1 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Employees->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#4 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/jolly/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/jolly/application/classes/Controller/Employees.php:7
2013-02-27 13:44:37 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/jolly/application/classes/Controller/Employees.php:7
2013-02-27 13:44:37 --- DEBUG: #0 /var/www/jolly/application/classes/Controller/Employees.php(7): Kohana_View->__get('content')
#1 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Employees->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#4 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/jolly/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/jolly/application/classes/Controller/Employees.php:7
2013-02-27 20:29:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tasks ~ APPPATH/views/employees/view.php [ 84 ] in /var/www/jolly/application/views/employees/view.php:84
2013-02-27 20:29:24 --- DEBUG: #0 /var/www/jolly/application/views/employees/view.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 84, Array)
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
#14 {main} in /var/www/jolly/application/views/employees/view.php:84
2013-02-27 20:37:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Task.name' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-02-27 20:37:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :