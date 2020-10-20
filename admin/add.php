<?php
include_once "../demo/configs/sqlConfig.php";
    
    $db=new DB("eng");
    $data=[];

    $data['en']=$_POST['en'];
    $data['cn']=$_POST['cn'];

    $db->save($data);

    to('../demo/index.php');
?>