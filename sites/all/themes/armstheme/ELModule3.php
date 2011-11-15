<?php

function Module3($Epage){
	if($Epage == "131"){
		print'
		<h1>Records access</h1>
		<br>
		<center><img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image131.jpg" ></center><br>
		<br>
		<b>The objectives of this module are as follows:</b>
		<ul>
		<li>To explain records access
		<li>To explain the process of access and declassification
		</ul>

		<b>The module is aimed at the following groups:</b>
		<ul>
		<li>All UN staff (who may need to request access to records already transferred to ARMS storage)
		<li>Records Clerks (who may need to facilitate a declassification request)
		<li>Records Officers/Managers (who may need to initiate and manage a declassification request)
		</ul>

		<b>The module covers the following topics:</b>
		<ul>
		<li>What is records access?
		<li>Who might request access?
		<li>What records are accessible?
		<li>What happens if records are not accessible?
		<li>Making a declassification request
		<li>Test your learning
		</ul>
	
		<h2><u><strong>Records access</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=132">What is records access?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=133">Who might request access?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=134">Which records are accessible?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=135">What happens if records are not accessible?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=136">Making a declassification request</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=137">Test your learning - Records access</a></strong></li>
		</ul>';
	}else if ($Epage == "132"){
			print'
			<h1>What is records access?</h1>
<br>
Records access can apply both to records which are no longer in the creating office or to those records which have become part of the archives.  Within the UN this means both semi-active records stored in the UN ARMS records centre and archival records stored in the UN ARMS archival repositories.<br>
<br>
But not everyone has the same rights of access and not everything is accessible.<br>
<br>
</b>List below the factors that you think might determine access</b><br>
<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=5>
Access is determined by:
	1. who is requesting access AND
	2. what items they want to access
			</TEXTAREA>
		</div>
<br>
		<h2><u><strong>Records access</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=133">Who might request access?</a></strong></li>
			
		</ul>';
	}else if ($Epage == "133"){
			print'
		<h1>Who might request access?</h1>
		<br>
		Within the context of the UN there are basically four groups of people who might request access<br>
		<br>
		<b>List below the groups you can identify</b>
		<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=6>
The four groups are:
	1. current staff
	2. former staff
	3. national governments/member states and investigators
	4. the public.

			</TEXTAREA>
		</div>
		<br>
	Let\'s look at each of these groups in turn and consider which records they might wish to access.<br>
<br>
Current staff are most likely to want to consult records which have been transferred from their office to semi-active storage.  And they are able to request and will have returned to them the records from their own office on loan for a designated period unless they are subject to security restrictions i.e. strictly confidential.  Items designated strictly confidential are called classified records. If however they want to consult records from other offices the access controls explained below will apply.<br>
<br>
Former staff typically want to consult personal data perhaps to do with a pension claim.  To get access they need to go to the responsible department who will either grant or deny the request.  Individuals can however only get access to their own personal information in order to protect the privacy of all staff.<br>
<br>
National governments may request access to records relating to UN business.  Again they are only eligible to access records relating to their own government unless the records are readily accessible as archives.  Again rules of access to archival records are controlled by rules and controls which are outlined below.<br>
<br>
Investigators carrying out official investigations are able to consult any records relevant to the case.<br>
<br>
Finally the public seek access to the archival records of the organisation.  They may be from a variety of backgrounds and there are no exclusions.  However access requests usually come from academic researchers.<br>
<br>
		
		<h2><u><strong>Records access</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=134">Which records are accessible?</a></strong></li>
			
		</ul>';
	}else if ($Epage == "134"){
			print'
		<h1>Which records are accessible?</h1>
We have seen above the rules of access which apply to semi-active records for current staff, for former staff and for national governments.  Now let\'s focus on rules of access for archival records.<br>
<br>
<b>List below the factors you would expect to be considered for access to archival records.</b>
		<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=5>
The three key factors are:
	1. their nature
	2. their age
	3. their security classification
			</TEXTAREA>
		</div>
		<br>
		So, in terms of the UN archives, members of the public may have access to:<br>
		<OL>
		<li>archives and records that were available at the time of their creation e.g. press releases, official UN documents
		<li>archives which are 20 years old and not classified records
		<li>archives and records less than 20 years old and which are not classified records on condition that the originating office has given written consent for access.
		</OL>

		<h2><u><strong>Records access</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=135">What happens if records are not accessible?</a></strong></li>
			
		</ul>';
	}else if ($Epage == "135"){
			print'
		<h1>What happens if records are not accessible?</h1>
		<br>
So it is not just the records which are 20 years old and unrestricted which are freely accessible.  But if archives or records fall into the third category above (i.e. less than 20 years old and which are not classified records) members of the public must complete a request for access to archives request.  If access is granted the public can view the approved restricted records and take notes but cannot make copies.  If they subsequently request copies this will initiate a declassification request.  <br>
	<br>			
		<h2><u><strong>Records access</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=136">Making a declassification request</a></strong></li>
		</ul>';
	}else if ($Epage == "136"){
			print'
			<h1>Making a declassification request</h1>
			<br>
A declassification request involves getting permission from the office of origin or other interested offices to release the previously classified archives and records to the public.<br>
<br>
It is important to note that the declassification decision relates to the archives and records so once the declassification permission is granted the status of the archives and records concerned changes from classified to declassified for all users.<br>
<br>
The declassification request must be made in writing either to the office of origin or the Chief of ARMS.  There is no guarantee that the access will be granted.<br>
<br>
<b>List below the things to consider before agreeing to a declassification request.</b><br>
<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=12>
The key thing is to assess the current level of sensitivity of the information by considering the following questions:
- Does the information pertain to the safety and security of staff and facilities?
- Does the information have the potential to risk or endanger a third party?
- Does the information pertain to international security or the conduct of international relations?
- Does the information contain privileged political, social or economic data?
- Does the information pertain to the integrity of mission operations?
- Does the information pertain to the business processes of the organization?
- Does the information pertain to the privacy of staff members and associates?
- Does the Information pertain to criticality and require immediate availability. 
			</TEXTAREA>
		</div>
	<br>
	Finally some key things to remember about records access:<br>
	<ul>
<li>Access is required for different purposes
<li>Some archives and records are freely available
<li>Access can be requested to archives and records where not currently available
<li>Once a declassification request is granted the status of the archives and records concerned is changed to declassified for any future access request.
</ul>
<br>
 Now assess your learning by going to the test for this module<br>
<br>			
		<h2><u><strong>Records access</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=137">Test your learning - Records access</a></strong></li>
		</ul>';
	}else if ($Epage == "137"){
	
	print'
	<h1>Test your learning - Records access</h1>
	<br>
		<b>Answer true or false to the following questions</b><br>
	<br><br>
		<b>1. Records access relates only to archives. </b>
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
Records access can also relate to semi-active records
			</TEXTAREA>
		</div>
		<br>
				<b>2. There are many different types of access requests.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide2">
			<br>
			<textarea COLS=80 ROWS=5>
True
Requests are made by current and former staff, national governments, investigators and members of the public.
			</TEXTAREA>
		</div>
		<br>
				<b>3. All archives which are 20 years old are accessible.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide3">
			<br>
			<textarea COLS=80 ROWS=5>
False
Some of these archives will be classified and will need to be declassified before becoming accessible.
			</TEXTAREA>
		</div>
		<br>
				<b>4. It\'s possible to request access to classified records.</b>
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
The request must be made in writing and the decision is made by the office of origin and/or other interested offices.
			</TEXTAREA>
		</div>
		<br>
				<b>5. A declassification request only grants access to the<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;person who made the request.</b>
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
Once the declassification request is granted the status of the archives and records concerned changes to declassified.
			</TEXTAREA>
		</div>
		<br>
		<br>
		<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayALLAnswerBox(5);" VALUE="Check Response">
		<br>
		<br>';
	
	
	print"
	<br>
	<div class=\"SideIcon\" ><img src=\"".$GLOBALS['base_path'].$GLOBALS['theme_path']."/images/PageIcon.jpg\" >
	</div><h2><a href=\"29?Epage=141\">Next Module - Records Creation</a></h2>
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