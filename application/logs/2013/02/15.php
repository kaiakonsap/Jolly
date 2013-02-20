<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-15 14:31:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'auth' not found ~ APPPATH/views/template.php [ 27 ] in :
2013-02-15 14:31:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 14:37:23 --- EMERGENCY: Database_Exception [ 2 ]: mysql_pconnect(): Unknown MySQL server host 'mysql' (2) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/jolly/modules/database/classes/Kohana/Database/MySQL.php:171
2013-02-15 14:37:23 --- DEBUG: #0 /var/www/jolly/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/jolly/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#4 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#5 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/jolly/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#7 /var/www/jolly/application/classes/Controller/Login.php(85): Kohana_ORM::factory('User', Array)
#8 /var/www/jolly/system/classes/Kohana/Controller.php(84): Controller_Login->action_finish()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/jolly/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/jolly/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/jolly/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/jolly/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/jolly/modules/database/classes/Kohana/Database/MySQL.php:171