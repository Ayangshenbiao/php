<?php
echo phpinfo();
session_start();
//print_r($_SESSION);
//销毁session
//unset($_SESSION['username']);  //销毁掉指定的session


//$res = session_destroy();  //销毁掉所有的session
session_unset();  //销毁掉所有



?>