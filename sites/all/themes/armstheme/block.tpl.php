<?php
// $Id: block.tpl.php,v 1.3 2007/08/07 08:39:36 goba Exp $
?>


 <?php 
// set up sidebar icon on the right hand side
	switch ($block->delta){
	case "menu-usingthearchives":
		print "<div class=\"SideIcon\" ><img src=\"$directory/images/SideIcon2.jpg\"></div>";
	break;
	case "menu-quicklinks":
		print "<div class=\"SideIcon\" ><img src=\"$directory/images/SideIcon3.jpg\"></div>";
	break;
	}

// sidebard block box
print '<div class="block block-'.$block->module.'" id="block-'.$block->module.'-'.$block->delta.'">';


// create web links in sidebar headers if needed
	switch ($block->delta){
	case "menu-unarchives":
		print '<h2 class="title"><a href="'.$GLOBALS['base_path'].'node/17">'.$block->subject.'</a></h2>';
	break;
	
	case"menu-recordsmanagement":
		print '<h2 class="title"><a href="'.$GLOBALS['base_path'].'node/18">'.$block->subject.'</a></h2>';
	break;
		case"1":
		// 1 this is the block Delta for ADMIN
		print '<h2 class="title"><a href="'.$GLOBALS['base_path'].'admin">'.$block->subject.'</a></h2>';
	break;
	default:
		print '<h2 class="title">'.$block->subject.'</h2>';
	break;
	}



// check node taxonomy. if it is in 'Archives' or 'Record M' then don't display the opposing side bars tree. 
// get URL arguments

// print sidebar block box if set
$SidebarFlag= false;

// Get component of the current Drupal path. Similar to the path un the URL
// NOTE: that on the index page it still works the same as on the node page. 
if ( arg(0) == "node" ) {
	//make a node object using the URL argument node number
	$node = node_load(arg(1));
	
	// check to see if the taxonomy array is empty 
	if (!empty ($node->taxonomy)){
	
		foreach ($node->taxonomy as $tid) {
			// the vocabulary id of the "UN Tags" = 1
			if ($tid->vid == 1) {
				$TaxonomyName = $tid->name;
			}
		}
		
			
		if (($TaxonomyName == "UN Archives") && ($block->subject != "Records Management" )){
			$SidebarFlag= true;
		}else if (($TaxonomyName == "Records Management") && ($block->subject != "Archives" )){
			$SidebarFlag= true;
		// if it's just not a archive or RM taxonomy then print 
		}else if (($block->subject != "Records Management") && ($block->subject != "Archives")){
			$SidebarFlag= true;
		}
	}else{
		$SidebarFlag= true;
	}
}

//If the block is the admin block then print unconditionally 
if  ($block->subject == "Admin" ){
	$SidebarFlag= true;
}

// NOTE: that only the admin block will print when not on a NODE screen 
if ($SidebarFlag== true){
	print '<div class="content">'.$block->content.'</div>';
}

/*  // Helpful debugging info.
$x=arg(0);
$y=arg(1);
$z=arg(2);
print "<p>x=$x<br />y=$y<br />z=$z</p>";
// ==End Debug==  */

?>
 </div>
