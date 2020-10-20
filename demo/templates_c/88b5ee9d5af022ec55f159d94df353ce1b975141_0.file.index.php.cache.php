<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 10:33:27
  from 'D:\data\sites\smarty_crud\demo\templates\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d4f5780ac37_05499646',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '88b5ee9d5af022ec55f159d94df353ce1b975141' => 
    array (
      0 => 'D:\\data\\sites\\smarty_crud\\demo\\templates\\index.php',
      1 => 1603096211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8d4f5780ac37_05499646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16609602645f8d4f577c85b4_14592868';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>文字轉換</title>
</head>

<body>
  <fieldset style="border:1px solid black">
    <legend>
      list
    </legend>
    <form action="api/edit.php" method="post">
      <table>
        <tr>
          <td>英</td>
          <td>中</td>
          <td>操作</td>
        </tr>

        <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'<?php
        \';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
include_once "../base.php";
        $db = new DB("eng");
        $rows = $db->all();
        foreach ($rows as $row) {
        <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>

        <tr>
          <td><input type="text" name="en[]" value="<?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'<?=\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
 $row['en']; <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
"></td>
          <td><input type="text" name="cn[]" value="<?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'<?=\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
 $row['cn']; <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
"></td>
          <td><input type="checkbox" name="del[]" value="<?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'<?=\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
 $row['id']; <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
"></td>
          <input type="hidden" name="id[]" value="<?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'<?=\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
 $row['id']; <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
">
        </tr>

        <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'<?php
        \';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>
}
        <?php echo '/*%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:16609602645f8d4f577c85b4_14592868%%*/';?>

      </table>
      <div>
        <input type="submit" value="確定修改">
      </div>
    </form>
  </fieldset>
  <a href="add.php">新增</a>
  <br>
  Search Here!
  <form action="search.php" method="post">
    <table>
      <tr>
        <td><input type="text" name="en"></td>
        <td><input type="button" value="send"></td>
      </tr>
    </table>
  </form>
</body>

</html><?php }
}
