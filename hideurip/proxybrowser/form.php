<link type="text/css" href="../styles/CSS.css" rel="stylesheet" />
<div id="proxy_container" align="justify">
<form method="post" action="./" id="proxy_form">
<!-- Make sure you leave the two input fields the same! -->
<table width="100%" border="0" bgcolor="#CCCCFF"align="center"  cellspacing="0" style="border:groove">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="6%">&nbsp;</td>    
    <td width="3%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="75%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="../index.php"><img src="../styles/images/img07.png" alt="HOME" /></a></td>
    <td>
    <img src="../styles/images/back.jpg"onclick="h_back();" width="50%" align="top" align="left" alt="BACK"/><img  src="../styles/images/forward.jpg"onclick="h_forward();" width="50%" align="top" align="right" alt="FORWARD"/> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    <input type="hidden" name="__proxy_action" value="redirect_browse" />
    <input type="text" name="__proxy_url" value="http://www.google.com/" id="proxy_url" />
    </td>
    <td></td>
    <td>&nbsp;</td>
    <td><img  src="../styles/images/settings.jpg"align="right" width="100%" onclick="set_fn();" /></td> 
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>
<div id="settings" style="display:none">
<table width="100%" border="0" bgcolor="#CCCCFF"align="center"  cellspacing="0" style="border:groove"><tr><td>
	<label for="__no_javascript"><input type="checkbox" name="__no_javascript" id="__no_javascript" />Disable JavaScript</label>
	<label for="__no_images"><input type="checkbox" name="__no_images" id="__no_images" />Disable Images</label>
	<label for="__no_title"><input type="checkbox" name="__no_title" id="__no_title" />Strip Title</label>
	<label for="__no_meta">	<input type="checkbox" name="__no_meta" id="__no_meta" />Strip Meta</label>
<input type="submit" value="OK" id="proxy_button" /></td></tr>
</table>
</div>
</form>
<table width="10%" border="0"align="left" cellspacing="0" id="toggle_button"><tr><td>
<!-- You don't need this, remove it if you like -->
<a href="#" id="proxy_toggle" onclick="toggle_form(); return false;">&nbsp&nbsp&nbsp&nbsp<strong style="color:#0C0">Hide_Me</strong></a></td></tr>
</table></div>

