<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($type == 'post') { ?><br><div id="SmallSiteTitle" class="Post"><?php print $title?></div><br><?php }; ?>


    <div class="content"><?php print  preg_replace("/<\/p>$/", "", preg_replace("/^<p>/", "", $content) ) ?></div><!--- END content --->
    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div><!--- END node --->
