<?php

if (!(isset ($_GET['Epage']))){
	$Epage = "100";
}else{
	$Epage = $_GET['Epage'];
}


print'
<link href="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/ELearnStyle.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/ELearnJava.js"></script> 
';



Switch ($Epage){
	case "100":
		ModuleIntro();
	break;
	case "101":
		ModuleList();
	break;
	case "111": case "112": case "113": case "114": case "115": case "116": case "117": case "118":
		include "ELModule1.php";
		Module1($Epage);
	break;
		case "121": case "122": case "123": case "124": case "125": case "126": 
		include "ELModule2.php";
		Module2($Epage);
	break;
	case "131": case "132": case "133": case "134": case "135": case "136": case "137":
		include "ELModule3.php";
		Module3($Epage);
	break;
		case "141": case "142": case "143": case "144": case "145": 
		include "ELModule4.php";
		Module4($Epage);
	break;
	case "151": case "152": case "153": case "154": case "155": 
		include "ELModule5.php";
		Module5($Epage);
	break;
	case "161": case "162": case "163": case "164": case "165": case "166": case "167": case "168": case "169":
		include "ELModule6.php";
		Module6($Epage);
	break;
	case "171": case "172": case "173": case "174": case "175":  case "176":
		include "ELModule7.php";
		Module7($Epage);
	break;
	case "181": case "182": case "183": case "184": 
		include "ELModule8.php";
		Module8($Epage);
	break;
	case "191": case "192": case "193": case "194": case "195": case "196":  case "197": 
		include "ELModule9.php";
		Module9($Epage);
	break;
	
	case "1101": case "1102": case "1103": case "1104": case "1105": case "1106":  case "1107":   case "1108": 
		include "ELModule10.php";
		Module10($Epage);
	break;
	case "1111": case "1112": case "1113": case "1114": case "1115": 
		include "ELModule11.php";
		Module11($Epage);
	break;
	case "1121": case "1122": case "1123": case "1124": case "1125": case "1126":
		include "ELModule12.php";
		Module12($Epage);
	break;
	case "1131": case "1132": case "1133": case "1134": case "1135": case "1136":
		include "ELModule13.php";
		Module13($Epage);
	break;
}

unset($_GET['Epage']);



function ModuleIntro(){
	print'
	<h1>E-Learning</h1>
	<h2>Main Menu</h2>
	<p>Welcome to the ARMS interactive recordkeeping E-learning programme on CDROM. The programme is available in both English and French and aims to provide you, as a member of UN staff, with:</p>
	<UL>
		<li>Information about your roles and responsibilities with regard to recordkeeping</li>
		<li>A series of interactive learning modules to help you fulfill your roles and responsibilities</li>
		<li>Details support, resources and guidance available via ARMS</li>
	</UL>
				<p>The programme is made up of a series of modules which can be studied individually or in programme groups based on your recordkeeping roles and responsibilities.  Once you\'ve completed the modules you can return to the <a href="/ARMS/" >UN ARMS website</a> and test your learning and track your progress either module by module or on a programme basis.</p>';

	print"
	<br>
	<div class=\"SideIcon\" ><img src=\"".$GLOBALS['base_path'].$GLOBALS['theme_path']."/images/PageIcon.jpg\" >
	</div><h2><a href=\"29?Epage=111\">Introductory Module</a></h2>Raising awareness to recordkeeping for all UN staff<br>
	<br><br>
	<div class=\"SideIcon\" ><img src=\"".$GLOBALS['base_path'].$GLOBALS['theme_path']."/images/PageIcon.jpg\" >
	</div><h2><a href=\"29?Epage=101\">List of Modules</a></h2>Full list of available modules<br>";
	print'<br><br><br>';
}


function ModuleList(){
	print'
	<br>
	<h1><u>E-Learning Modules</u></h1>
	<br>
	<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=111">Record and Information Matters in the United Nations</a></h2>
	<br><br>
	<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=121">Managing Emails as Records</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=131">Records Access</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=141">Records Creation</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=151">Records Capture</a></h2>
	<br><br>	
	<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=161">Records Disposal</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=171">Records Transfer</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=181">Archives Management</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=191">Risk Management</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=1101">Retention Schedules</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=1111">Records classification schemes and Taxonomies</a></h2>
	<br><br>
		<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=1121">Records Management Programmes</a></h2>
	<br><br>	
	<div class="SideIcon" ><img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/images/PageIcon.jpg" >
	</div><h2><a href="29?Epage=1131">Information Sensitivity</a></h2>
	<br><br>';
}

?>
