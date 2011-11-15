<?php

function Module7($Epage){
	if($Epage == "171"){
	
	print '
		<h1>Records transfer</h1>
		<br>
		<center><img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image171.jpg" ></center><br>
		<b>The objectives of this module are as follows:</b><br>
		<ul>
		<li>To explain records transfer
		<li>To explain the process of records transfer
		</ul>
		<br>
		<b>The module is aimed at the following groups:</b><br>
		<ul>
		<li>Records Clerks (who will prepare records for transfer)
		<li>Records Officers/Managers (who will develop procedures for records transfer and manage transferred records)
		</ul>
		<br>
		<b>The module covers the following topics:</b><br>
		<ul>
		<li>What is records transfer?
		<li>Why do you need to transfer records?
		<li>When does records transfer happen?
		<li>The process of records transfer
		<li>Test your learning
		</ul>
		<br>
		
	<h2><u><strong>Records transfer</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=172">What is records transfer?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=173">Why do you need to transfer records?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=174">When does records transfer happen?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=175">The process of records transfer</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=176">Test your learning - Records transfer </a></strong></li>
		</ul>';
	}else if ($Epage == "172"){
	print '
<h1>What is records transfer?</h1><br>
<br>
Records created by staff members, irrespective of format, need to be stored appropriately for as long as they are needed and no longer.  The key word in this statement is appropriately and it means that records will not necessarily stay in one place for the whole of their life.  Within the UN context this applies to records at HQ and to records in missions.<br>
<br>
The purpose of records transfer is to ensure that the records are safely and securely stored for the period that they need to be retained and that they can be made available under applicable rules, as necessary.  It usually implies specialist facilities which are specifically designed to store records and which are often called secondary storage.   This might be the Records Centre managed by ARMS in New York, a departmental filing room, storage space in a cupboard etc.  The idea is that by bringing together the records into one place they can be managed more efficiently and better protected.<br>
<br>
<b>List the requirements you think are needed to store records</b>
		<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=13>
The ideal requirements
- Be racked out with shelving that has a top shelf acting as a roof and a bottom shelf at least 6" off the ground
- Maintain environmental conditions that meet applicable standards i.e. temperatures at or below 18 degree centigrade and relative humidity of 40-45% for paper records and in addition for digital media a dust-free environment
- Protect records from fire, flood and other damage
- Allow retrieval of stored records 
- Restrict access to appropriate individuals and provide adequate security to prevent unauthorised access
- Not have any water, gas or electricity supply going through it

			</TEXTAREA>
		</div>
		<br>

<center><img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image172.jpg" ></center><br>
<br>
Records transfer also means setting up procedures which we\'ll come back to in the section on the records transfer process.<br>
<br>
But now let\'s consider why records transfer is necessary.<br>
<br>
<br>
	<h2><u><strong>Records transfer</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=173">Why do you need to transfer records?</a></strong></li>

		</ul>';
	}else if ($Epage == "173"){
	print '
	<h1>Why do you need to transfer records?</h1>
	<br>
So if records do not stay in one place what are the reasons for moving them?<br>
<br>
<b>List below the reasons you can think of for moving records</b>
		<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=10>
Records need to be transferred for one or more of the following reasons: 
1.	Because you don\'t need to refer to them any more but they still need to be kept as specified in the retention schedule
2.	Because of space problems in staff offices
3.	Because the mission is being liquidated
4.	Because they would be more safely looked after by the UN ARMS staff
5.	Because other people, including colleagues and external researchers need access to them.

			</TEXTAREA>
		</div>
		<br>

	
	<h2><u><strong>Records transfer</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=174">When does records transfer happen?</a></strong></li>

		</ul>';
	}else if ($Epage == "174"){
	print '
	<h1>When does records transfer happen?</h1>
	<br>
From these examples we can see that records transfer happens principally when the records are no longer needed on a day to day basis in the office of origin.  Another way of expressing this is to say that the records have become semi-active.  But there will be a further transfer process for those records which become archives.  This involves additional physical protection for the archival records and enhanced description to present their provenance and to facilitate research.  For more information on archives management consult the Archives Management module.<br>
<br>
	<h2><u><strong>Records transfer</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=175">The process of records transfer</a></strong></li>
	
		</ul>';
	}else if ($Epage == "175"){
	print '
	<h1>The process of records transfer</h1>
	<br>
Records transfer should ideally happen on a regular basis as part of the recordkeeping activities within your office.  For example it is often convenient to do the transfer at the end of a calendar or fiscal year.  It involves a number of procedures both in the office transferring the records and in the storage facility taking in the records. <br>
<br>
The better organised your recordkeeping the easier the process of records transfer will be.  For example it\'s a good idea to close files and label files accordingly when they are no longer active which might be triggered by the end of a project, the end of the financial year or when it has become to big to be manageable.  This process would then be the beginning of identifying those records which are ready for transfer.<br>
<br>
<br>
<i>Procedures in the office</i><br>
So the first step is to identify the records to be transferred based on the retention schedule.  Because the transferred records will normally be stored in standard racking it is usual to use boxes which fit to shelves to get maximum capacity in the storage facility.  HQ Secretariat offices can request boxes from UN ARMS while missions are advised to obtain boxes which match the same specifications.<br>
<br>
The next step is to pack the boxes, having removed any extraneous file fittings, and list the contents on records transfer forms box by box.  It is important to place records from the same series into the same boxes and clearly label the boxes in terms of their contents.  The transfer forms and the box numbers become essential documentation in locating and retrieving records once they are received in the storage facility.<br>
<br>
It is crucial to have procedures in place to ensure security of transport of the records from the office of origin to the storage facility, irrespective of the distances involved.  If external contractors or agents are used they must guarantee secure and safe collection and delivery as well as providing documentation of which items they have handled.<br>
<br>
<i>Procedures in the storage facility</i><br>
The first step for the storage facility is to make the office of origin aware of the requirements for taking in records and also to explain the procedures for requesting the records on loan once they have been taken in.<br>
<br>
The information on the transfer lists is used by the storage facility to manage the records in their custody.  At UN ARMS the information is entered into an electronic records management system which is used to record the transfer, locate the boxes on shelves, track any requests and identify records for destruction when the time comes.<br>
<br>
It is sometimes not possible to provide all of the storage capacity needed for an organisation\'s records.  In this case one option is to use a third party data storage company.  In this scenario it is essential that the same principles of security and management are guaranteed within the contract arrangements.<br>
<br>
<br>
Finally some key things to remember about records transfer:<br>
<ul>
<li>Records will be unlikely to stay in the same location for all of their life
<li>Records are principally transferred to a specialist storage facility when they are no longer required on a day to day basis
<li>The office transferring the records needs to prepare the records for transfer by placing the records is boxes and preparing lists of the items being transferred
<li>The storage facility taking in the records will use the information on the transfer lists to record the transfer, locate the boxes, track any requests and identify records for destruction
</ul>
<h2><u><strong>Records transfer</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=176">Test your learning - Records transfer </a></strong></li>
		</ul>';
	}else if ($Epage == "176"){
	
	print'<h1>Test your learning - Managing emails as records</h1>
		<br>
		<b>Answer true or false to the following questions</b>
		<br><br>
		<b>1. Records are likely to stay in one place throughout their life.</b>
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
When records become semi-active i.e. they are not required on a day to day basis it is good practice to remove them to specialist storage facilities.
			</TEXTAREA>
		</div>
		<br>
				<b>2. The only reason for transferring records is when you run out of space in your office.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide2">
			<br>
			<textarea COLS=80 ROWS=10>
False
Running out of space is one valid reason for transferring records but there are many others as follows:
a.	because you don\'t need to refer to them any more but they still need to be kept as specified in the retention schedule
b.	because the mission is being liquidated
c.	because they would be more safely looked after by the UN ARMS staff
d.	because other people, including colleagues and external researchers need access to them.

			</TEXTAREA>
		</div>
		<br>
				<b>3. Closing files can help with the records transfer process. </b>
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
Closing files helps the records transfer process by identifying those records which are ready for transfer.
			</TEXTAREA>
		</div>
		<br>
				<b>4. All the office transferring records needs to do is pack the records into boxes. </b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide4">
			<br>
			<textarea COLS=80 ROWS=5>
False
The transferring office must also list the contents on records transfer forms box by box.
			</TEXTAREA>
		</div>
		<br>
				<b>5. There is no other option than storing transferred records on the organisation\'s premises.</b>
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
It\'s possible to use a third party data storage company provided that the same principles of security and management are guaranteed within the contract arrangements.
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
	</div><h2><a href=\"29?Epage=181\">Next Module - 
Archives Management</a></h2>
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
