<?php
require '../vendor/autoload.php';
include_once "../demo/configs/sqlConfig.php";
$smarty = new Smarty;
$searchData = $db->q($_POST['en']);
$smarty->assign( "searchData", $searchData);
$smarty->display('search.html');