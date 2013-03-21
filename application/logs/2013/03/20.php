<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-20 19:47:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/Controller/Tasks.php [ 16 ] in :
2013-03-20 19:47:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 20:12:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/Controller/Tasks.php [ 16 ] in :
2013-03-20 20:12:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 20:40:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function vardump() ~ APPPATH/classes/Controller/Tasks.php [ 7 ] in :
2013-03-20 20:40:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 21:52:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, null given, called in /var/www/jolly/application/classes/Controller/Tasks.php on line 21 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Insert.php [ 80 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:80
2013-03-20 21:52:21 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/jolly/...', 80, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(21): Kohana_Database_Query_Builder_Insert->values(NULL, NULL, NULL, NULL, NULL, NULL)
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:80
2013-03-20 22:12:29 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /var/www/jolly/application/classes/Controller/Tasks.php on line 21 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Insert.php [ 80 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:80
2013-03-20 22:12:29 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/jolly/...', 80, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(21): Kohana_Database_Query_Builder_Insert->values('', '', '', '', '', '')
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:80
2013-03-20 22:13:28 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /var/www/jolly/application/classes/Controller/Tasks.php on line 21 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Insert.php [ 80 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:80
2013-03-20 22:13:28 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/jolly/...', 80, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(21): Kohana_Database_Query_Builder_Insert->values('', '', '', '', '', '')
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:80
2013-03-20 22:30:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 40 ] in /var/www/jolly/application/views/template.php:40
2013-03-20 22:30:39 --- DEBUG: #0 /var/www/jolly/application/views/template.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
#1 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#2 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#3 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#7 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/jolly/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/jolly/application/views/template.php:40
2013-03-20 22:40:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 40 ] in /var/www/jolly/application/views/template.php:40
2013-03-20 22:40:45 --- DEBUG: #0 /var/www/jolly/application/views/template.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
#1 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#2 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#3 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#7 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/jolly/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/jolly/application/views/template.php:40
2013-03-20 22:45:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 40 ] in /var/www/jolly/application/views/template.php:40
2013-03-20 22:45:41 --- DEBUG: #0 /var/www/jolly/application/views/template.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
#1 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#2 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#3 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#7 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/jolly/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/jolly/application/views/template.php:40
2013-03-20 22:49:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 40 ] in /var/www/jolly/application/views/template.php:40
2013-03-20 22:49:31 --- DEBUG: #0 /var/www/jolly/application/views/template.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
#1 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#2 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#3 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#7 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/jolly/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/jolly/application/views/template.php:40
2013-03-20 23:17:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/employees/view.php [ 40 ] in /var/www/jolly/application/views/employees/view.php:40
2013-03-20 23:17:54 --- DEBUG: #0 /var/www/jolly/application/views/employees/view.php(40): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/jolly/...', 40, Array)
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
#14 {main} in /var/www/jolly/application/views/employees/view.php:40
2013-03-20 23:37:59 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/employees/view.php [ 40 ] in /var/www/jolly/application/views/employees/view.php:40
2013-03-20 23:37:59 --- DEBUG: #0 /var/www/jolly/application/views/employees/view.php(40): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/jolly/...', 40, Array)
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
#14 {main} in /var/www/jolly/application/views/employees/view.php:40
2013-03-20 23:38:08 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/employees/view.php [ 40 ] in /var/www/jolly/application/views/employees/view.php:40
2013-03-20 23:38:08 --- DEBUG: #0 /var/www/jolly/application/views/employees/view.php(40): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/jolly/...', 40, Array)
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
#14 {main} in /var/www/jolly/application/views/employees/view.php:40