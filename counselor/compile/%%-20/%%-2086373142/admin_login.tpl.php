<?php /* Smarty version 2.6.1, created on 2012-05-09 13:54:10
         compiled from admin_login.tpl */ ?>
<div align="center">
<b><?php echo $this->_tpl_vars['login_text']; ?>
</b><br />
<form method="post" action="<?php echo $this->_tpl_vars['_SERVER']['PHP_SELF']; ?>
">
<div id="small">
<table cellpadding="0" cellspacing="0" class="list">
  <tr class="alt">
    <td><?php echo $this->_tpl_vars['lang']['username']; ?>
:</td>
    <td><input type="text" name="username" id="username" /></td>
  </tr>
  <tr>
    <td><?php echo $this->_tpl_vars['lang']['password']; ?>
:</td>
    <td><input type="password" name="password" /></td>
  </tr>
</table>
</div>
<br /><input type="submit" value="<?php echo $this->_tpl_vars['lang']['login']; ?>
" />
</form>
</div>
<?php echo '
<script language="Javascript" type="text/javascript">
focusElement(\'username\');
</script>
'; ?>