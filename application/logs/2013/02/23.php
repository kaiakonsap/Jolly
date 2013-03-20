<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-23 14:04:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH/classes/Controller/Employees.php [ 8 ] in :
2013-02-23 14:04:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-23 14:06:25 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/jolly/application/classes/Controller/Employees.php:7
2013-02-23 14:06:25 --- DEBUG: #0 /var/www/jolly/application/classes/Controller/Employees.php(7): Kohana_View->__get('content')
#1 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Employees->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#4 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/jolly/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/jolly/application/classes/Controller/Employees.php:7