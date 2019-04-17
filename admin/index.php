<?php
$HEVA_CMS = "3.1.5.20130222";
if (ini_get('register_globals') == '1' || strtolower(ini_get('register_globals')) == 'on')
	die('Отключите register_globals в php.ini/.htaccess (угроза безопасности)');
session_start();
if (strpos($_SERVER['REQUEST_URI'], '_small.') > 0 && !file_exists("..".$_SERVER['REQUEST_URI'])){
	include("_small.php");
	die;
}
if(isset($_SESSION['user']))
	$user = $_SESSION['user'];
else{
	if (isset($_COOKIE['user']))
		$_SESSION['user'] = $user = $_COOKIE['user'];
	else{
		$_SESSION['user'] = $user = round(rand(10000000000,99999999999),0);
		setcookie("user", $user, time()+3600*24*30);
	}
}
ini_set('display_errors', 0);
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
include("_mysql.php");
include("_additional.php");
include("_url.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("_head.php"); ?>
</head>
<body>
    <?php include("_header.php"); ?>

		<?php include("_".$url['target_type'].".php"); ?>

	<?php include("_footer.php"); ?>
</body>
</html>