<?php


function Module8($Epage){
	if($Epage == "181"){
		print'
		<h1>Archives management</h1>
		<br>
		<center><img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image181.jpg" ></center><br>
		<b>The objectives of this module are as follows:</b><br>
		<ul>
<li>To explain what archives are
<li>To explain the principles of archives management
</ul>
<br>
<b>The module is aimed at the following groups:</b><br>
<ul>
<li>Records Officers/Managers
</ul>
<b>The module covers the following topics:</b><br>
<ul>
<li>What are archives?
<li>Principles of archives management
<li>Test your learning
</ul>
		<h2><u><strong>Archives management</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=182">What are archives?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=183">Principles of archives management</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=184">Test your learning - Archives management </a></strong></li>
		</ul>';
	}else if ($Epage == "182"){
	print'
	<h1>What are archives?</h1>
	<br>
The term of archives has a number of meanings.<br>
<br>
<b>List below the meanings that you know.</b><br>
<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=5>
The term archives is used to refer to 
1.	items of historical interest 
2.	the office within an organization which manages the historical items
3.	the place in which the items are stored.

			</TEXTAREA>
		</div>
		<br>
Archival records are those records, irrespective of format, which are to be permanently preserved for their administrative, legal, historical or informational value as evidence of the official business of the organisation.  Typically they represent less than 10% of the total records of an organisation.<br>
<br>
The archival records of the United Nations are not limited to those of the Headquarters Secretariat and its predecessor bodies but include records of the United Nations Secretariat units away from Headquarters and subsidiary organizations of the United Nations.  They include paper-based and electronic records and records in other formats such as photographs, audio recordings and some artefacts.<br>
<br>
		<h2><u><strong>Managing emails as records</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=183">Principles of archives management</a></strong></li>
		
		</ul>';
		}else if ($Epage == "183"){
	print'
	<h1>Principles of archives management</h1>
	<br>
Archival records normally retained permanently and so need special treatment both in terms of their logical or intellectual organisation as well as their physical management.  We keep archives so that they can be used by current and future generations and so policies and procedures need to be in place so that researchers can consult archives under secure conditions where the records are handled with due care.<br>
<br>
<i>Physical management</i><br>
Let\'s look first at physical management beginning with paper archival records.<br>
<br>
<b>List below the requirements for the storage of archival records</b>
<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=5>
Requirements include:
1.	a special repository
2.	security to ensure safekeeping of the archival records
3.	a controlled environment in terms of temperature and humidity
			</TEXTAREA>
		</div>
		<br>
The archival storage repositories in UN ARMS New York are examples of this type of specialized storage.  Air-conditioning is recommended together with a stable and controlled temperature at a maximum of 21 degree  (but as low as possible - the records in the ARMS UN repositories are kept at 18 degree ), and a stable relative humidity of 45 to 55% (but not fluctuating more than 2 degrees).  Because of the technical difficulties and expenses in maintaining these facilities, archival storage is centralized in ARMS in the UN.  You should contact ARMS to discuss initiating regular transfers of archival records to ARMS\'s facilities.  <br>
<br>
An archival quality repository helps to protect the archival records, but additional preventive measures will serve to extend the life of archives.  These include storing the  records in acid free files and boxes, and removing all metal objects, such as staples and paper clips and plastic covers removed.  <br>
<br>
These preventive measures, or preservation, aim to prevent damage.  If, however, records are damaged or suffer damage, we can take measures, known as conservation, counter existing damage with a view to eliminating evidence of that damage, for example repairing damage to torn pages.<br>
<br>
The greatest challenges in preserving electronic archives are technical, however there are also physical requirements.  For example, storing offline storage media such as magnetic tapes and CDs requires a strictly controlled humidity and temperature environment, ideally dust free.<br>
<br>
But with electronic archival records even good physical management of offline storage media does not ensure preservation as there is no guarantee that the hardware to access the media will be available. There is also the question of the software without which it is impossible to read and present the records in human-readable form.<br>
<br>
So what needs to be done to ensure that electronic archival records are preserved and remain available over time?<br>
<br>
<b>List below the possible solutions</b>
<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(2);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide2" >
			<br>
			<textarea COLS=80 ROWS=10>
There are three possible options:
1.	convert the records to the new version when software is upgraded.  This is called migration.
2.	recreate the hardware and software environment in which the records were captured using newer technology.  This is called emulation
3.	convert the records to an intermediate file format which is not dependent on a specific software package.  For example for text files the current recommended file format is xml.  In addition to the archival records the file must also contain all of the metadata needed to ensure that the records remain authentic, reliable, complete and inviolable.
			</TEXTAREA>
		</div>
		<br>
<i>Logical management</i><br>
For electronic archival records logical management involves the capture of metadata which needs to be bound with the records themselves.<br>
<br>
For paper archival records logical management also relates to the capture of metadata in the form of an archival description or catalogue entry.  There are standards which identify the type of description required and ARMS uses International Standard on Archival Description.  The aim of the archival description is to explain the provenance of the archival records i.e. the administrative context in which they were created. The description also provides additional details to aid retrieval of the informational content of the archival records.<br>
<br>
<i>Access to archives</i><br>
Archives and records management programmes can provide a research room for staff of the organisation and external researchers to consult the archival records.  However there will be some archival records which will not be available because they contain sensitive information.  For more information about access to archival records with a security classification consult the module on Records Access.<br>
<br>
Because archival records are by definition unique and as they age become fragile strict controls over their use are required. <br>
<br>
<b>List below the kinds of rules and controls you might expect to find in an archives reading room.</b>
<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(3);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide3" >
			<br>
			<textarea COLS=80 ROWS=10>
The rules and controls include the following:
1.	proof of identification of the research. This is often required in advance before permission is given to consult the archives.
2.	ban on eating and drinking in the reading room.
3.	requirement to use a pencil (rather than ink) to take notes or portable computers.
4.	ban on bringing bags and brief cases into the research room
5.	ban on removing archival records from the reading room area.  Normally photocopying services are provided or readers are allowed to use digital cameras to take copies.
6.	security cameras and staff monitoring research room
7.	archives staff documents all transactions with researchers

			</TEXTAREA>
		</div>
		<br>
Access to electronic archival records is via workstations in the research room or more and more nowadays by secure web-based systems.<br>
<br>
Finally some key things to remember about archival records and archives management.<br>
<ul>
<li>Archival records are those records, irrespective of format, which are to be permanently preserved for their administrative, legal, historical or informational value as evidence of the official business of the organization
<li>Archival records need to be stored in special repositories
<li>The archival repository needs to make provision for archival records to be consulted in a safe and secure environment.
</ul>
<br>
Now assess your learning by going to the test for this module <br>
<br>
		<h2><u><strong>Managing emails as records</strong></u></h2>
		<ul>
	
			<li><strong><a href="/ARMS/node/29?Epage=184">Test your learning - Archives management </a></strong></li>
		</ul>';
		}else if ($Epage == "184"){
		print'
		<h1>Test your learning - Archives management</h1>
		<br>
		<b>Answer true or false to the following questions</b>
		<br><br>
		<b>1. All old records are archival records.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide1">
			<br>
			<textarea COLS=80 ROWS=5>
False
Archival records are those records, irrespective of format, which are to be permanently preserved for their administrative, legal, historical or informational value as evidence of the official business of the organization
			</TEXTAREA>
		</div>
		<br>
				<b>2. Only paper records can be archival records.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide2">
			<br>
			<textarea COLS=80 ROWS=5>
False
Archival records can be in a variety of formats including paper, electronic, photographs and artifacts.
			</TEXTAREA>
		</div>
		<br>
				<b>3. There is a difference between preservation and conservation.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide3">
			<br>
			<textarea COLS=80 ROWS=5>
True
Preservation aims to prevent damage whereas conservation tries to deal with existing damage with a view to eliminating evidence of that damage, for example. repairing damage to torn pages.
			</TEXTAREA>
		</div>
		<br>
	<b>4. The preservation of electronic archival records over time requires more than simply copying them to magnetic tape and storing them in a specialized repository.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide4">
			<br>
			<textarea COLS=80 ROWS=5>
True 
The preservation of electronic archival records means ensuring that hardware and software are available to read and present them in human-readable form.
			</TEXTAREA>
		</div>
		<br>
		<br>
		<b>5. All archival records are available for consultation.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide5">
			<br>
			<textarea COLS=80 ROWS=5>
False
Some archival records may not be available because they contain sensitive information.
			</TEXTAREA>
		</div>
		<br>
		
		
		<br>
		<br>
		<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayALLAnswerBox(5);" VALUE="Check Response">
		<br>
		<br>';
		
print"
	<br>
	<div class=\"SideIcon\" ><img src=\"".$GLOBALS['base_path'].$GLOBALS['theme_path']."/images/PageIcon.jpg\" >
	</div><h2><a href=\"29?Epage=191\">Next Module - Risk Management</a></h2>
	<br><br>
	<div class=\"SideIcon\" ><img src=\"".$GLOBALS['base_path'].$GLOBALS['theme_path']."/images/PageIcon.jpg\" >
	</div><h2><a href=\"29?Epage=100\">Back to the E-Learning Main Menu</a></h2>
	<br><br>
	<div class=\"SideIcon\" ><img src=\"".$GLOBALS['base_path'].$GLOBALS['theme_path']."/images/PageIcon.jpg\" >
	</div><h2><a href=\"29?Epage=101\">List of Modules</a></h2>Full list of available modules<br>
	<br><br><br>";
}
}

?>
