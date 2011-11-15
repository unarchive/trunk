<?php

// DOM XML functions for PHP version 5 
// reads the Config.xml file and creates GLOBAL variables of the Config options
function GetQuotephp5($XMLPath){


	// Declaring global varryables withing a function. 
	//declare empty 2D array containing the  Message and Author
	global $QuoteArray;
	$QuoteArray = array("Author" =>array(),"Message" =>array());
	// array counter 
	$QuoteCount = 0; 
	
	// new XML DOM Document class
	//serves as the root of the document tree
	$ConfigXML = new DOMDocument(); 
	
	// Load XML from a file
	// LIBXML_NOBLANKS   = Remove blank nodes 
	if(!$ConfigXML->load($XMLPath, LIBXML_NOBLANKS  ))
		{print "Couldn't load xml."; }
	
	// get the list of config nodes
	// all the value elements are inside config elements
	$ConfigList = $ConfigXML->getElementsByTagName("Quote"); 
	
	// for each config item 
	foreach ($ConfigList as $Config){
	
	
		// the child nodes inside config are the 'name' 'value' and 'description'
		$childnodes = $Config->childNodes;
		
		// each indavidule node, one at a time 
		foreach ($childnodes as $child) {
			
				
			//check the TYPE of node for type "name" 
			if  ($child->nodeName =="Author") {
			
			$QuoteArray['Author'][$QuoteCount] = $child->nodeValue;
			// the node after a NAME will always be a Message
			$MessageNode = $child->nextSibling;
			// content of type Message will be the  quote's Message
			$QuoteArray['Message'][$QuoteCount]= $MessageNode->nodeValue;
			
			//incrament array counter
			$QuoteCount++;
			
			}
		}
	}	
	
} // end function Get Quote php5


?>