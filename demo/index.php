<?php
require '../libs/Smarty.class.php';
include_once '../admin/allList.php';
$smarty = new Smarty;
$smarty->assign("title", "SMARTY_CrudTry");
$smarty->assign("AllList", "所有資料");
// $searchData from allList.php

$smarty->assign("allList", $allList);
$smarty->display('index.html');
?>