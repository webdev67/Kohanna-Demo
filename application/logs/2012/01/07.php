<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-07 05:17:44 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:17:44 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 05:17:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:17:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 05:17:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:17:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 05:18:22 --- ERROR: ErrorException [ 8192 ]: Call-time pass-by-reference has been deprecated ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 05:18:22 --- STRACE: ErrorException [ 8192 ]: Call-time pass-by-reference has been deprecated ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\core.php(496): Kohana_Core::error_handler(8192, 'Call-time pass-...', 'C:\Program File...', 15, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('controller_blog')
#3 [internal function]: spl_autoload_call('controller_blog')
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(85): class_exists('controller_blog')
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-07 05:18:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:18:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 05:18:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:18:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 05:18:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:18:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 05:18:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:18:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 05:18:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
2012-01-07 05:18:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\blog.php [ 25 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\views\pages\blog.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-07 07:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [object Object] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-07 07:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [object Object] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-07 07:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [object Object] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-07 07:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [object Object] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-07 07:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL success was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-07 07:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL success was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-07 07:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [object Object] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-07 07:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [object Object] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-07 15:03:27 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:27 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Back in Toronto from a week of boarding = sushi time!!! (@ Ichiban Sushi House) http://t.co/2haggfFC') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Back in Toronto from a week of boarding = sushi time!!! (@ Ichiban Sushi House) http://t.co/2haggfFC') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect string value: '\xE3\x82\xAB\xE3\x83\x8A...' for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('カナダ： Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect string value: '\xE3\x82\xAB\xE3\x83\x8A...' for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('カナダ： Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:29 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:28 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:29 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:29 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:29 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:03:29 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:03:29 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. ') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:05:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-07 15:05:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:05:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-07 15:05:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:05:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-07 15:05:31 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:31 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Back in Toronto from a week of boarding = sushi time!!! (@ Ichiban Sushi House) http://t.co/2haggfFC') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Back in Toronto from a week of boarding = sushi time!!! (@ Ichiban Sushi House) http://t.co/2haggfFC') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('%u30AB%u30CA%u30C0%uFF1A Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('%u30AB%u30CA%u30C0%uFF1A Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine #Toronto #Deals ---- http://t.co/Rna1PTlY') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine #Toronto #Deals ---- http://t.co/Rna1PTlY') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. #andplentyofavocado') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@jroyzee @saraorlesky @NHLJets #mustardstains #enemyterritory Toronto fans throw mustard b/c it doesn\'t go well with their sushi.') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. #andplentyofavocado') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:32 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@jroyzee @saraorlesky @NHLJets #mustardstains #enemyterritory Toronto fans throw mustard b/c it doesn\'t go well with their sushi.') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:33 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:33 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. #HappyBean') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:33 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:33 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. #HappyBean') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('%u30AB%u30CA%u30C0%uFF1A Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. #andplentyofavocado') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('%u30AB%u30CA%u30C0%uFF1A Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. #andplentyofavocado') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine #Toronto #Deals ---- http://t.co/Rna1PTlY') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@jroyzee @saraorlesky @NHLJets #mustardstains #enemyterritory Toronto fans throw mustard b/c it doesn\'t go well with their sushi.') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine #Toronto #Deals ---- http://t.co/Rna1PTlY') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:40 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@jroyzee @saraorlesky @NHLJets #mustardstains #enemyterritory Toronto fans throw mustard b/c it doesn\'t go well with their sushi.') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:41 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@joeljoshuagoh oh! and Sushi 67 was one of the most sublime sushi experiences I\'ve ever had: http://t.co/kbMNACKR') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:41 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:41 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@joeljoshuagoh oh! and Sushi 67 was one of the most sublime sushi experiences I\'ve ever had: http://t.co/kbMNACKR') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:41 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:05:41 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. #HappyBean') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:05:41 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. #HappyBean') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:06:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-07 15:06:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:06:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-07 15:06:22 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:22 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:22 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:22 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('wooooo we won! time for sushi and then my flight to Toronto!') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:22 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('If anyone is interested in going for all you can eat sushi with other anime clubs in Toronto, RSVP today. For the... http://t.co/EcG4ZCSO') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:22 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('I\'m at Sushi-Ya Japan (621 Dixon Rd., Toronto) http://t.co/8pJB9Q8g') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @PinkSheepTO Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Anybody have sushi suggestions around Bloor & Yonge or Bay? #Toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Back in Toronto from a week of boarding = sushi time!!! (@ Ichiban Sushi House) http://t.co/2haggfFC') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. #andplentyofavocado') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Back in Toronto from a week of boarding = sushi time!!! (@ Ichiban Sushi House) http://t.co/2haggfFC') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('%u30AB%u30CA%u30C0%uFF1A Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('RT @apowww Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Attention EVERYONE: never EVER order the shrimp spring rolls from Simon sushi. NEVER. throw up #toronto') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@cndgooner the only answer: Toronto. all you can eat sushi: everywhere. #andplentyofavocado') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('%u30AB%u30CA%u30C0%uFF1A Second cook (Japanese/ Korean Foods) - 2215198 Ontario Inc. o/a Ichiban Sushi Empress Walk -  Toronto, ON http://t.co/Uvcp31OM') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@jroyzee @saraorlesky @NHLJets #mustardstains #enemyterritory Toronto fans throw mustard b/c it doesn\'t go well with their sushi.') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('@jroyzee @saraorlesky @NHLJets #mustardstains #enemyterritory Toronto fans throw mustard b/c it doesn\'t go well with their sushi.') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine #Toronto #Deals ---- http://t.co/Rna1PTlY') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. #HappyBean') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('Ganoe Sushi on St. Clair: Just $15 for $30 Toward Japanese Cuisine #Toronto #Deals ---- http://t.co/Rna1PTlY') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('It\'s been a perfect day of movies, sushi, and a couples massage with my cutie before he leaves me for Toronto. Snuggle time. #HappyBean') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:06:23 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-07 15:06:23 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'test_name' at row 1 [ INSERT INTO `test` (`test_name`) VALUES ('brunch/lunner followed by shopping, then skating in Mississauga, and end the night with sushi in Toronto :D') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `te...', false, Array)
#1 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(36): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Blog->action_populateDb()
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-07 15:07:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:07:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-07 15:07:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:07:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-07 15:26:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
2012-01-07 15:26:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\blog.php [ 15 ]
--
#0 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\application\classes\controller\blog.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Apache Software Foundation\Apache2.2\htdocs\kohanna\index.php(109): Kohana_Request->execute()
#6 {main}