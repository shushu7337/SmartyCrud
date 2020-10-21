<?php
/* Smarty version 3.1.36, created on 2020-10-21 12:06:34
  from 'D:\data\sites\smarty_crud\demo\templates\search.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8fb3cac2f135_54004478',
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
function content_5f8fb3cac2f135_54004478 (Smarty_Internal_Template $_smarty_tpl) {
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
