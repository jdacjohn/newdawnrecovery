<?php /* Smarty version 2.6.1, created on 2012-05-09 14:18:26
         compiled from monitor_content.tpl */ ?>
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
/css/monitor.css" rel="stylesheet" type="text/css" />
<?php if ($this->_tpl_vars['javascript'] != ""): ?>
<script type="text/javascript" language="javascript" src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/class/js/include.php?<?php echo $this->_tpl_vars['javascript']; ?>
">
</script>
<?php endif; ?>
</head>
<body<?php echo $this->_tpl_vars['onload']; ?>
 id="content">
<br />
<?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['chats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<table width="90%" align="center" border="0" cellspacing="0" cellpadding="0" class="list">
  <tr class="alt">
    <td class="mini-button"><img src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/images/icons/popup_chatting_alt.gif" alt="" /></td>
    <td><div align="center"><?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['title']; ?>
</div></td>
    <td><div align="center"><?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['name']; ?>
</div></td>
    <td><div align="right">[<a href="javascript:parent.window.Monitor.accept('<?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['id']; ?>
', '<?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['chatid']; ?>
', '<?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['type']; ?>
');"><?php echo $this->_tpl_vars['lang']['accept']; ?>
</a>] [<a href="javascript:parent.window.Monitor.decline('<?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['id']; ?>
', '<?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['chatid']; ?>
', '<?php echo $this->_tpl_vars['chats'][$this->_sections['i']['index']]['type']; ?>
');"><?php echo $this->_tpl_vars['lang']['decline']; ?>
</a>]</div></td>
  </tr>
</table>
<br />
<?php endfor; endif; ?>
<br />
<?php if ($this->_tpl_vars['conf']['monitor_traffic'] == true): ?>
<?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['visitors']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<table width="90%" align="center" border="0" cellspacing="0" cellpadding="0" class="list">
  <tr>
    <td class="mini-button" align="left" width="50"><a href="javascript:parent.window.Monitor.info('<?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['id']; ?>
');"><img src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/images/buttons/mini_info.gif" alt="<?php echo $this->_tpl_vars['lang']['more_info']; ?>
" border="0" /></a><?php if ($this->_tpl_vars['visitors'][$this->_sections['i']['index']]['chatting'] == 'true'): ?><img src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/images/icons/popup_chatting.gif" alt="<?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['status']; ?>
" /><?php else: ?><a href="javascript:parent.window.Monitor.initiate('<?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['id']; ?>
');"><img src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/images/icons/popup_browsing.gif" alt="<?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['status']; ?>
" border="0" /></a><?php endif; ?></td>
    <td align="left"><?php if ($this->_tpl_vars['visitors'][$this->_sections['i']['index']]['chatting'] != 'true'): ?><a href="javascript:parent.window.Monitor.initiate('<?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['id']; ?>
');"><?php endif; ?><b><?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['hostname']; ?>
</b><?php if ($this->_tpl_vars['visitors'][$this->_sections['i']['index']]['chatting'] != 'true'): ?></a><?php endif; ?></td>
    <td align="right"><i><?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['status']; ?>
</i></td>
  </tr>
  <tr class="alt">
    <td colspan="3" align="center"><b><?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['chat_department']; ?>
</b><br/><a href="<?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['visitors'][$this->_sections['i']['index']]['page']; ?>
</a></td>
  </tr>
</table>
<br />
<?php endfor; endif; ?>
<?php endif; ?>
<?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['sounds']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<embed src="<?php echo $this->_tpl_vars['conf']['url']; ?>
/templates/<?php echo $this->_tpl_vars['conf']['template']; ?>
/sounds/<?php echo $this->_tpl_vars['sounds'][$this->_sections['i']['index']]['file']; ?>
.mp3" autostart="true" hidden="true">
<?php if ($this->_tpl_vars['sounds'][$this->_sections['i']['index']]['text'] != ''): ?>
<script type="text/javascript" language="javascript">
<!--
    Misc.alert_mac('<?php echo $this->_tpl_vars['sounds'][$this->_sections['i']['index']]['text']; ?>
');
//-->
</script>
<?php endif; ?>
<?php endfor; endif; ?>
</body>
</html>