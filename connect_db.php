<?php

$Setup_Server = ‘us-cdbr-iron-east-02.cleardb.net’;

$Setup_User = ‘b74c4bffb458c3’;

$Setup_Pwd = ‘8b03842b’;

$Setup_Database = ‘heroku_f850805f664a721’;

mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);

mysql_query(“use $Setup_Database”);

mysql_query(“SET NAMES UTF8”);

?>
