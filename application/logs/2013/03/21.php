<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-21 00:03:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: task ~ APPPATH/views/employees/view.php [ 40 ] in /var/www/jolly/application/views/employees/view.php:40
2013-03-21 00:03:00 --- DEBUG: #0 /var/www/jolly/application/views/employees/view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
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
2013-03-21 00:20:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/employees/view.php [ 40 ] in /var/www/jolly/application/views/employees/view.php:40
2013-03-21 00:20:09 --- DEBUG: #0 /var/www/jolly/application/views/employees/view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
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
2013-03-21 01:04:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 40 ] in /var/www/jolly/application/views/template.php:40
2013-03-21 01:04:32 --- DEBUG: #0 /var/www/jolly/application/views/template.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
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
2013-03-21 02:53:51 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Model_Task::create_new() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Tasks.php [ 17 ] in /var/www/jolly/application/classes/Controller/Tasks.php:17
2013-03-21 02:53:51 --- DEBUG: #0 /var/www/jolly/application/classes/Controller/Tasks.php(17): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/jolly/...', 17, Array)
#1 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#4 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/jolly/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/jolly/application/classes/Controller/Tasks.php:17
2013-03-21 02:58:20 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant username - assumed 'username' ~ APPPATH/classes/Model/Task.php [ 21 ] in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 02:58:20 --- DEBUG: #0 /var/www/jolly/application/classes/Model/Task.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/jolly/...', 21, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 03:01:29 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant username - assumed 'username' ~ APPPATH/classes/Model/Task.php [ 21 ] in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 03:01:29 --- DEBUG: #0 /var/www/jolly/application/classes/Model/Task.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/jolly/...', 21, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 03:05:23 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant username - assumed 'username' ~ APPPATH/classes/Model/Task.php [ 21 ] in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 03:05:23 --- DEBUG: #0 /var/www/jolly/application/classes/Model/Task.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/jolly/...', 21, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 03:09:49 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH/classes/Model/Task.php [ 21 ] in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 03:09:49 --- DEBUG: #0 /var/www/jolly/application/classes/Model/Task.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/jolly/...', 21, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/application/classes/Model/Task.php:21
2013-03-21 03:12:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function save() ~ APPPATH/classes/Model/Task.php [ 24 ] in :
2013-03-21 03:12:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 03:15:17 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`jolly`.`tasks`, CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)) [ INSERT INTO `tasks` (`name`, `time`) VALUES ('hgbyuuvyu', 'gyvyvtycv') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 03:15:17 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/jolly/application/classes/Model/Task.php(24): Kohana_ORM->save()
#4 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#5 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#8 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/jolly/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 03:23:49 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`jolly`.`tasks`, CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)) [ INSERT INTO `tasks` (`name`, `time`, `user_id`, `created`) VALUES ('uefeurfyeu', 'ugru', 'ugru', '2013-03-21 03-23-49') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 03:23:49 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/jolly/application/classes/Model/Task.php(26): Kohana_ORM->save()
#4 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#5 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#8 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/jolly/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 03:27:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Model/Task.php [ 24 ] in /var/www/jolly/application/classes/Model/Task.php:24
2013-03-21 03:27:36 --- DEBUG: #0 /var/www/jolly/application/classes/Model/Task.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/jolly/...', 24, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/application/classes/Model/Task.php:24
2013-03-21 03:54:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: times ~ APPPATH/views/Dash/index.php [ 16 ] in /var/www/jolly/application/views/Dash/index.php:16
2013-03-21 03:54:12 --- DEBUG: #0 /var/www/jolly/application/views/Dash/index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 16, Array)
#1 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#2 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#3 /var/www/jolly/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/jolly/application/views/template.php(40): Kohana_View->__toString()
#5 /var/www/jolly/system/classes/Kohana/View.php(61): include('/var/www/jolly/...')
#6 /var/www/jolly/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/jolly/...', Array)
#7 /var/www/jolly/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/jolly/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dash))
#11 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/jolly/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/jolly/application/views/Dash/index.php:16
2013-03-21 04:10:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/Task.php [ 21 ] in :
2013-03-21 04:10:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 04:10:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/Task.php [ 21 ] in :
2013-03-21 04:10:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 04:12:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/Model/Task.php [ 21 ] in :
2013-03-21 04:12:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 04:16:10 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`jolly`.`tasks`, CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)) [ INSERT INTO `tasks` (`name`, `time`, `notes`, `created`) VALUES ('vvgv', '05:03:03', 'bhbu', '2013-03-21 04-16-10') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 04:16:10 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/jolly/application/classes/Model/Task.php(28): Kohana_ORM->save()
#4 /var/www/jolly/application/classes/Controller/Tasks.php(17): Model_Task::create_new(Array)
#5 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#8 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/jolly/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 04:28:59 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`jolly`.`tasks`, CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)) [ INSERT INTO `tasks` (`name`, `time`, `notes`, `created`) VALUES ('dhudc', '', '', '2013-03-21 04-28-59') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 04:28:59 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/jolly/application/classes/Model/Task.php(28): Kohana_ORM->save()
#4 /var/www/jolly/application/classes/Controller/Tasks.php(18): Model_Task::create_new(Array)
#5 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#8 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/jolly/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 04:30:02 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`jolly`.`tasks`, CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)) [ INSERT INTO `tasks` (`name`, `time`, `notes`, `created`) VALUES ('dhudc', '05:03:03', 'hudud', '2013-03-21 04-30-02') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 04:30:02 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/jolly/application/classes/Model/Task.php(28): Kohana_ORM->save()
#4 /var/www/jolly/application/classes/Controller/Tasks.php(18): Model_Task::create_new(Array)
#5 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#8 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/jolly/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 04:39:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Model/Task.php [ 26 ] in /var/www/jolly/application/classes/Model/Task.php:26
2013-03-21 04:39:20 --- DEBUG: #0 /var/www/jolly/application/classes/Model/Task.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 26, Array)
#1 /var/www/jolly/application/classes/Controller/Tasks.php(18): Model_Task::create_new(Array)
#2 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#5 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/jolly/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/jolly/application/classes/Model/Task.php:26
2013-03-21 21:48:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 40 ] in /var/www/jolly/application/views/template.php:40
2013-03-21 21:48:56 --- DEBUG: #0 /var/www/jolly/application/views/template.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 40, Array)
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
2013-03-21 22:40:14 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`jolly`.`tasks`, CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)) [ INSERT INTO `tasks` (`name`, `time`, `notes`, `created`) VALUES ('hhug', '05:03:03', 'jih', '2013-03-21 22-40-14') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 22:40:14 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/jolly/application/classes/Model/Task.php(28): Kohana_ORM->save()
#4 /var/www/jolly/application/classes/Controller/Tasks.php(18): Model_Task::create_new(Array)
#5 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_create_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#8 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/jolly/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 22:44:00 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`jolly`.`tasks`, CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)) [ INSERT INTO `tasks` (`created`) VALUES ('2013-03-21 22-44-00') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 22:44:00 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/jolly/application/classes/Model/Task.php(39): Kohana_ORM->save()
#4 /var/www/jolly/application/classes/Controller/Tasks.php(30): Model_Task::edit(Object(Model_Task), NULL)
#5 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#8 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/jolly/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/Query.php:251
2013-03-21 23:18:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: employee ~ APPPATH/classes/Controller/Tasks.php [ 29 ] in /var/www/jolly/application/classes/Controller/Tasks.php:29
2013-03-21 23:18:37 --- DEBUG: #0 /var/www/jolly/application/classes/Controller/Tasks.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/jolly/...', 29, Array)
#1 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Tasks->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tasks))
#4 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/jolly/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/jolly/application/classes/Controller/Tasks.php:29