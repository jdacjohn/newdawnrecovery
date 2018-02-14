<?php /* Smarty version 2.6.1, created on 2012-05-09 13:54:10
         compiled from admin.tpl */ ?>
<?php echo '<?'?>
xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_tpl_vars['conf']['company']; ?>
 - Live Support Solution (Powered By Help Center Live)</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['lang']['charset']; ?>
" />
<link href="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/css/admin.css" rel="stylesheet" type="text/css" />
<script language="Javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/js/admin.js"></script>
<?php if ($this->_tpl_vars['javascript'] != ""): ?>
<script type="text/javascript" language="javascript" src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/class/js/include.php?<?php echo $this->_tpl_vars['javascript']; ?>
">
</script>
<?php endif; ?>
</head>
<body<?php echo $this->_tpl_vars['onload']; ?>
>
<div id="wrapper">
<div id="header"><a href="<?php echo $this->_tpl_vars['conf']['url']; ?>
/admin/index.php"><img src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/images/logo/main.gif" width="130" height="54" /></a></div>
<div id="nav">
  <table border="0" cellpadding="0" cellspacing="0" class="nav">
    <tr>
      <td align="left"><?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['links_bottom']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 if ($this->_tpl_vars['links_bottom'][$this->_sections['i']['index']]['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['links_bottom'][$this->_sections['i']['index']]['url']; ?>
" onMouseOver="swapImage('<?php echo $this->_tpl_vars['links_bottom'][$this->_sections['i']['index']]['name']; ?>
', 'on');" onMouseOut="swapImage('<?php echo $this->_tpl_vars['links_bottom'][$this->_sections['i']['index']]['name']; ?>
', 'off');"><img id="<?php echo $this->_tpl_vars['links_bottom'][$this->_sections['i']['index']]['name']; ?>
" src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/images/nav/<?php echo $this->_tpl_vars['links_bottom'][$this->_sections['i']['index']]['name']; ?>
_off.jpg" width="60" height="61" alt="<?php echo $this->_tpl_vars['links_bottom'][$this->_sections['i']['index']]['title']; ?>
" /></a><?php endif;  endfor; endif; ?></td>
      <td align="right"><?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['links_top']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 if ($this->_tpl_vars['links_top'][$this->_sections['i']['index']]['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['links_top'][$this->_sections['i']['index']]['url']; ?>
" onMouseOver="swapImage('<?php echo $this->_tpl_vars['links_top'][$this->_sections['i']['index']]['name']; ?>
', 'on');" onMouseOut="swapImage('<?php echo $this->_tpl_vars['links_top'][$this->_sections['i']['index']]['name']; ?>
', 'off');"><img id="<?php echo $this->_tpl_vars['links_top'][$this->_sections['i']['index']]['name']; ?>
" src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/images/nav/<?php echo $this->_tpl_vars['links_top'][$this->_sections['i']['index']]['name']; ?>
_off.jpg" width="60" height="61" alt="<?php echo $this->_tpl_vars['links_top'][$this->_sections['i']['index']]['title']; ?>
" /></a><?php endif;  endfor; endif; ?></td>
    </tr>
  </table>
</div>
<div id="page">
<h2><?php echo $this->_tpl_vars['title']; ?>
</h2>
<?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['links_main']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<a href="<?php echo $this->_tpl_vars['links_main'][$this->_sections['i']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['links_main'][$this->_sections['i']['index']]['title']; ?>
</a>
<?php endfor; endif; ?>
<br /><br />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['content'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>
<div id="footer">
  <?php echo $this->_tpl_vars['lang']['powered_by']; ?>
 <a href="http://www.helpcenterlive.com" target="_blank">Help Center Live</a> <?php echo $this->_tpl_vars['conf']['version']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; <a href="http://www.helpcenterlive.com">Help Center Live</a>. All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['conf']['url']; ?>
/admin/update.php"><i><?php echo $this->_tpl_vars['lang']['updates']; ?>
</i></a>
</div>
</body>
</html>