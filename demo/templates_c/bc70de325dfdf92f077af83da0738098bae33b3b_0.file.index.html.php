<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 17:42:33
  from 'D:\data\sites\smarty_crud\demo\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8eb109a1d948_34886286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc70de325dfdf92f077af83da0738098bae33b3b' => 
    array (
      0 => 'D:\\data\\sites\\smarty_crud\\demo\\templates\\index.html',
      1 => 1603186952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8eb109a1d948_34886286 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<style>
  .tb1 {
    border: 1px solid lightgray;
    width: 80%;
    margin: 0 auto;
  }

  .ttr1 {
    border-bottom: block 1px solid;
  }

  .ttr2 {
    text-align: center;
  }
</style>

<body>
  <fieldset width="80%">
    <legend><?php echo $_smarty_tpl->tpl_vars['AllList']->value;?>
</legend>
    <form action="../admin/edit.php" method="post">
      <table class="tb1" style="text-align: center;">
        <tr>
          <th class="ttr1">英</th>
          <th class="ttr1">中</th>
          <th class="ttr1">刪除</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allList']->value, 'all', false, 'id');
$_smarty_tpl->tpl_vars['all']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['all']->value) {
$_smarty_tpl->tpl_vars['all']->do_else = false;
?>
        <tr>
          <td class="ttr2"><input type="text" name="en[]" value="<?php echo $_smarty_tpl->tpl_vars['all']->value['en'];?>
"></td>
          <td class="ttr2"><input type="text" name="cn[]" value="<?php echo $_smarty_tpl->tpl_vars['all']->value['cn'];?>
"></td>
          <td class="ttr2"><input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['all']->value['id'];?>
"></td>
          <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['all']->value['id'];?>
">
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>
      <input type="submit" value="確定修改">
    </form>
    <a href="./templates/add.html">新增</a>
  </fieldset>
  <fieldset>
    <legend>Search Here!!</legend>
    <form action="../demo/search.php" method="post">
      <table>
        <tr>
          <td><input type="text" name="en"></td>
          <td><input type="submit" value="search"></td>
        </tr>
      </table>
    </form>
    <?php if ((isset($_smarty_tpl->tpl_vars['searchData']->value))) {?>
    <legend>Result</legend>
    <table>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['searchData']->value['en'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['searchData']->value['cn'];?>
</td>
      </tr>
    </table>
    <?php }?>
  </fieldset>
</body>

</html><?php }
}
