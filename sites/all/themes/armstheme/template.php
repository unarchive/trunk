<?php
// $Id: template.php Exp $


/**
* Return a themed breadcrumb trail.
*
* @param $breadcrumb
*   An array containing the breadcrumb links.
* @return a string containing the breadcrumb output.
*/
function armstheme_breadcrumb($breadcrumb) {

	$breadcrumbString = "";
	if (!empty($breadcrumb)) {
		$title = drupal_get_title();
		
		if ( arg(0) == "node" ){
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
				// only build bread crumbs for Archives & RM
				if (($TaxonomyName == "UN Archives") || ($TaxonomyName == "Records Management")){
				  
					$breadcrumbString = implode(' &raquo; ', $breadcrumb) ;
					$breadcrumbString = preg_replace("/>Home</", ">Welcome<",  $breadcrumbString) ;
					$breadcrumbString ='<div class="breadcrumb">'. $breadcrumbString;
					$breadcrumbString .= " &raquo; <a href=\"".$GLOBALS['channel']['link']."\">$title</a></div>";
					return $breadcrumbString ;
				}
			}
		}
	}
	return;
}

function armstheme_taxonomy() {
	$TaxonomyName = "";
  
	if ( arg(0) == "node" ){
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
			
			
		}
	}
	
	if (($TaxonomyName == "UN Archives")){
		$TaxonomyHeader ='ID="BannerArchive"'; ;
	}elseif (($TaxonomyName == "Records Management")){
		$TaxonomyHeader ='ID="BannerRecord"'; ;
	}else{
		$TaxonomyHeader = 'ID="Banner"';
	}
return $TaxonomyHeader;
}

//FUNCTION : POSTLIST 
//This function returns a list of blog posts to be printed on the home page
function armstheme_postlist() {
 
	// this is the number of posts to be displayed 
	$nlimit = 3;
	$result = db_query("SELECT   n.title, n.nid FROM node AS n WHERE n.type = 'post' AND n.status =1 ORDER BY n.created DESC limit $nlimit");

	while($row = db_fetch_array($result)){
		$output .= '<ul><li class="postlist"><b><a href="'.$GLOBALS['base_url'].'/node/'.$row['nid'].'" >'. $row['title'].'</a></b>';
		
		$node = node_load($row['nid']);
		foreach($node->field_description as $des){
		
			if ($des['value'] !=""){
				$DescriptionString = $des['value'];
			}else{
				$DescriptionString = $node->teaser;
			}
		}
		
		$output .= '<br>'.$DescriptionString.'</li></ul>';
	}
	return  $output;
} // END postlist FUNCTION

