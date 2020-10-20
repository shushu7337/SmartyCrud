<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 17:27:57
  from 'D:\data\sites\smarty_crud\demo\templates\search.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8ead9d08b114_62464990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '076397129fc758645a89cbd385fde6732d7f8784' => 
    array (
      0 => 'D:\\data\\sites\\smarty_crud\\demo\\templates\\search.html',
      1 => 1603186070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ead9d08b114_62464990 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Result</title>
</head>

<body>
    <fieldset>
      <legend>Result</legend>
      <table>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['searchData']->value['en'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['searchData']->value['cn'];?>
</td>
        </tr>
      </table>
      <a href="index.php">返回</a>
    </fieldset>
</body>

</html><?php }
}
