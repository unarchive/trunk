<?php

Function QuoteGen(){

	include "GetQuote.php";
	// get the list of qoutes from XML file
	$XMLPath = $GLOBALS['theme_path']."/Quote.xml";
	GetQuotephp5($XMLPath);

	// TEST print array;
	//print_r($GLOBALS['QuoteArray']);
	
	// Get the total number of quotes 
	$QuoteCount = count  ( $GLOBALS['QuoteArray']['Author'] );
	$QuoteCount --;
	
	// Generate a random value
	// mt is the "better " rand gen
	$RndQuote = mt_rand  ( 0  , $QuoteCount  );
	
	$QuoteMessage = '<span style=" font-size: 16pt;  font-family: \'Arial Black\'; color: #0C5588;  line-height: .6em; " >&ldquo;</span> '. $GLOBALS['QuoteArray']['Message'][$RndQuote]. ' <span style=" font-size: 16pt;  font-family: \'Arial Black\'; color: #0C5588;  line-height: .6em; " >&rdquo;</span>'; 
	$QuoteMessage .= '<div style=" font-size: .8em;  color: Black; font-style:italic; width: 100%; text-align: right  " > ~ '.$GLOBALS['QuoteArray']['Author'][$RndQuote] . '</div>';

	return $QuoteMessage;
}
