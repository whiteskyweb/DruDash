<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-26 16:08:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:08:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:14:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:17:24 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'xavier' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('my@email.com', 'xavier', 'xnmm1128') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php:251
2013-05-26 16:17:24 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(80): Kohana_ORM->save()
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php:251
2013-05-26 16:17:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_user::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 76 ] in :
2013-05-26 16:17:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:18:14 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php:67
2013-05-26 16:18:14 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php:67
2013-05-26 16:18:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 16:18:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:19:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:19:03 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:19:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:19:16 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:12 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:13 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:14 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:15 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:16 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1537 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:22:16 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1537): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1537, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/Auth/ORM.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('xavier', 'xnmm1128', false)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(67): Kohana_Auth->login('xavier', 'xnmm1128')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1537
2013-05-26 16:24:29 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/login-view.php [ 66 ] in :
2013-05-26 16:24:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:31:21 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/login-view.php [ 66 ] in :
2013-05-26 16:31:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:31:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$username' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Login.php [ 15 ] in :
2013-05-26 16:31:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:31:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$username' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Login.php [ 15 ] in :
2013-05-26 16:31:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 16:32:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Login.php [ 17 ] in :
2013-05-26 16:32:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 17:46:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config_load() ~ APPPATH/bootstrap.php [ 131 ] in :
2013-05-26 17:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 18:24:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH/views/register-view.php [ 70 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:70
2013-05-26 18:24:11 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xavier/L...', 70, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:70
2013-05-26 18:27:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH/views/register-view.php [ 70 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:70
2013-05-26 18:27:33 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xavier/L...', 70, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:70
2013-05-26 19:05:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function hash_password() ~ APPPATH/views/register-view.php [ 90 ] in :
2013-05-26 19:05:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:14:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$new_user' (T_VARIABLE) ~ APPPATH/views/register-view.php [ 97 ] in :
2013-05-26 19:14:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:16:34 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Auth::hash_password() should not be called statically ~ APPPATH/views/register-view.php [ 91 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:91
2013-05-26 19:16:34 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(91): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/xavier/L...', 91, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(91): Kohana_Auth::hash_password()
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:91
2013-05-26 19:18:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:18:26 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:19:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles_users ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:19:47 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles_users', Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:20:53 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php on line 95 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1560 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1560
2013-05-26 19:20:53 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1560): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/xavier/L...', 1560, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add(Object(Model_Role))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1560
2013-05-26 19:24:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_name' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:25:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:25:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:25:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:25:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:27:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:27:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:27:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:27:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:29:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:29:21 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:29:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:29:39 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:29:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_name' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:33:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_name' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-26 19:33:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:34:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:22 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:24 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:25 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:25 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:34:26 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/xavier/L...', 1564, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1564
2013-05-26 19:35:02 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant test - assumed 'test' ~ APPPATH/views/register-view.php [ 97 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:97
2013-05-26 19:35:02 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/xavier/L...', 97, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:97
2013-05-26 19:35:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_user::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 76 ] in :
2013-05-26 19:35:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:36:12 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'test' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`, `company_name`) VALUES ('my@email.com', 'test', 'test', 'test') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php:251
2013-05-26 19:36:12 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->save()
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php:251
2013-05-26 19:36:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_user::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 76 ] in :
2013-05-26 19:36:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:37:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_user::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 76 ] in :
2013-05-26 19:37:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:39:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH/views/register-view.php [ 99 ] in :
2013-05-26 19:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 19:44:54 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 2) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php:251
2013-05-26 19:44:54 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(95): Kohana_ORM->add('roles', 2)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/database/classes/Kohana/Database/Query.php:251
2013-05-26 19:50:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/register-view.php [ 101 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:101
2013-05-26 19:50:12 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xavier/L...', 101, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php:101
2013-05-26 19:54:25 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-05-26 19:54:25 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('test')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', 'test')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'test')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(91): Kohana_ORM->__set('password', 'test')
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in :
2013-05-26 20:05:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php:67
2013-05-26 20:05:03 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php:67
2013-05-26 20:07:42 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php:67
2013-05-26 20:07:42 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Cookie.php:67
2013-05-26 20:14:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: UH ~ APPPATH/bootstrap.php [ 132 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/bootstrap.php:132
2013-05-26 20:14:52 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/bootstrap.php(132): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xavier/L...', 132, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(102): require('/Users/xavier/L...')
#2 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/bootstrap.php:132
2013-05-26 20:17:03 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php:125
2013-05-26 20:17:03 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/dashboard-view.php(3): Kohana_Auth::instance()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php:125
2013-05-26 20:26:06 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php:125
2013-05-26 20:26:06 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/dashboard-view.php(3): Kohana_Auth::instance()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Session.php:125
2013-05-26 20:43:24 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/dashboard-view.php [ 58 ] in :
2013-05-26 20:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 20:47:49 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:47:49 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:48:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{', expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Register.php [ 13 ] in :
2013-05-26 20:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 20:49:17 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:17 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:18 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:18 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:19 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:20 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:49:20 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 20:55:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'echoForm' not found ~ APPPATH/views/login-view.php [ 68 ] in :
2013-05-26 20:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 20:56:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: remember ~ APPPATH/views/login-view.php [ 68 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php:68
2013-05-26 20:56:11 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/xavier/L...', 68, Array)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/login-view.php:68
2013-05-26 21:11:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Login.php [ 16 ] in :
2013-05-26 21:11:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 21:27:40 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 21:27:40 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/application/views/register-view.php(97): Kohana_ORM->save()
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(61): include('/Users/xavier/L...')
#4 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/xavier/L...', Array)
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/modules/orm/classes/Kohana/ORM.php:1299
2013-05-26 21:40:45 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Request::$method ~ APPPATH/classes/Controller/Login.php [ 11 ] in :
2013-05-26 21:40:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 22:10:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:10:46 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:19:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function check_if_logged_in() ~ APPPATH/classes/Controller/Dashboard.php [ 36 ] in :
2013-05-26 22:19:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 22:19:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:19:49 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:24:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:24:49 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:24:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:24:59 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:15 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:16 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:16 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:16 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:17 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 22:25:17 --- DEBUG: #0 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Logout))
#6 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/xavier/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/current_state/system/classes/Kohana/View.php:137
2013-05-26 23:11:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Dashboard' not found ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:11:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:12:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_company_name() ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:12:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:12:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_company_name() ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:12:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_company_name() ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:12:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_company_name() ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:12:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_company_name() ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:12:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:12:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_company_name() ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:12:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:16:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_company_name() ~ APPPATH/views/dashboard-view.php [ 55 ] in :
2013-05-26 23:16:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:22:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:23:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_dashboard' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-05-26 23:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:28:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database::SELECT() ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:28:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-26 23:29:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/dashboard.php [ 14 ] in :
2013-05-26 23:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :