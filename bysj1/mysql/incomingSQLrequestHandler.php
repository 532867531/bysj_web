<?php
$begin = 0;
$limit=100;//默认每次返回100条数据
$animalChineseName= "猪";
$db="server";
if(isset($_POST['limit']))
{
	$limit=$_POST['limit'];	
}
if(isset($_POST['db'])){
	$db=$_POST['db'];	
}
if(isset($_POST['animal']))
{
	$animalChineseName=$_POST['animal'];
}
if(isset($_POST['begin']))
{
	$begin = $_POST['begin'];
}
$result="NULL";
header("Content-Type:text/html;charset=utf-8");
require_once("../print_search_result_before_table.php");
require_once("sqlQueryInAndOut.inc.php");
printSQLresultAsTable();
mysqli_free_result($result);
require_once("../print_search_result_after_table.php");
?>