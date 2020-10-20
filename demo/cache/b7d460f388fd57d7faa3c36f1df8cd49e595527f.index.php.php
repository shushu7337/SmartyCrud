<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 10:33:27
  from 'D:\data\sites\smarty_crud\demo\templates\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d4f5781a632_54062973',
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
  'cache_lifetime' => 120,
),true)) {
function content_5f8d4f5781a632_54062973 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

        <?php echo '<?php
        ';?>
include_once "../base.php";
        $db = new DB("eng");
        $rows = $db->all();
        foreach ($rows as $row) {
        <?php echo '?>';?>

        <tr>
          <td><input type="text" name="en[]" value="<?php echo '<?=';?>
 $row['en']; <?php echo '?>';?>
"></td>
          <td><input type="text" name="cn[]" value="<?php echo '<?=';?>
 $row['cn']; <?php echo '?>';?>
"></td>
          <td><input type="checkbox" name="del[]" value="<?php echo '<?=';?>
 $row['id']; <?php echo '?>';?>
"></td>
          <input type="hidden" name="id[]" value="<?php echo '<?=';?>
 $row['id']; <?php echo '?>';?>
">
        </tr>

        <?php echo '<?php
        ';?>
}
        <?php echo '?>';?>

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
