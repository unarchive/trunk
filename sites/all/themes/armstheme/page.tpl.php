<?php
// $Id: page.tpl.php,v 1.28.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="800" height="145" align="center" >
<tr>
<td  <?php print armstheme_taxonomy() ?> valign="Top">
<div ID="LangButton">
<a href="http://www.un.org/arabic/archives/">&#1593;&#1585;&#1576;&#1610;</a>&nbsp;&nbsp;&nbsp;
<a href="http://www.un.org/chinese/archives/ ">&#20013;&#25991;</a>&nbsp;&nbsp;&nbsp;
<a href="http://archives.un.org/">English&nbsp;</a>&nbsp;&nbsp;
<a href="http://archives.un.org/unarms/fr/">Fran&ccedil;ais</a>&nbsp;&nbsp;&nbsp;
<a href="http://www.un.org/russian/archives/"> Русский</a>&nbsp;&nbsp;&nbsp;
<a href="http://www.un.org/spanish/archives/">Espa&ntilde;ol</a></div>
   
<div id="HeaderLowerBar"> 

</div>
</td>
</tr>
</table>
<!-- the table brake  space is caused by #HeaderLowerBar CSS-->
<table border="0" cellpadding="0" cellspacing="0" width=800  align="center"  id="MainContent">
  <tr>
    <?php if ($left) { ?><td id="sidebar-left" width=170>
    <div class="block block-menu" >
    <h2 class="title"><a href="/ARMS/">Home</a></h2>
  </div>
      <?php print $left ?>
  <div class="block block-menu" >
    <h2 class="title"><a href="/ARMS/node/40">FAQ</a></h2>
  </div>
  
<?php print $lowleft ?>

<div ID="QuoteBox">
<?php  
	include "QuoteGen.php"; 
	$QuoteMessage = QuoteGen();
	print $QuoteMessage;
?>
</div> 
 

     
    </td><?php } ?>
    <td valign="top">
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div id="main">
      
        <div class="tabs"><?php print $tabs ?></div>
        <?php if ($show_messages) { print $messages; } ?>
        <?php print $help ?>
	
	<?php print $breadcrumb ?>
	<?php print  $content  ?>
	
<?php
	if ($is_front){
		$node = node_load(34);
	  
	    // remove node title
   $node -> title = NULL;
  $nodeout = node_view($node);
	print $nodeout;
	}
?>

	      </div><!--- END main --->
    </td>
    <?php if ($right) { ?><td id="sidebar-right" width=170>
      <?php print $right ?>
       <div class="block block-menu" >
    <h2 class="title"><a href="/ARMS/node/41">Contact Us</a></h2>
  </div>
      <a href="<?php print $base_path;?>/node/39"><img src="<?php print $base_path.$directory; ?>/images/vid_intro.jpg"></a>
    </td><?php } ?>
  </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="800" height="30" align="center" >
<tr>
<td ID="footer">
  <?php print $footer_message ?>
  <?php print $footer ?>
<?php print $closure ?>
  </td> 
  </tr>
</table>



</body>
</html>
