<?php

function Module5($Epage){
	if($Epage == "151"){
	print'
		<h1>Records capture</h1>
		<br>
		<center><img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image151.jpg" ></center><br>
		<br>
		<b>The objectives of this module are as follows:</b><br>
		<ul>
		<li>To explain records capture
		<li>To explain how records can be captured
		</ul>
		<br>
		<b>The module is aimed at the following groups:</b><br>
		<ul>
		<li>Records Clerks (who all file records)
		<li>Records Officers/Managers (who design systems to capture records)
		<li>ICT staff (who design and manage automated systems which capture UN records)
		</ul>
		<br>
		<b>The module covers the following topics:</b><br>
		<br>		
			<h2><u><strong>Records capture</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=152">What does it mean to capture records and how is it different from creating records?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=153">Records Capture and Information Systems</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=154">Records Capture and Business Process</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=155">Test your learning - Records capture </a></strong></li>
		</ul>';
	
}else if ($Epage == "152"){

Print'
<h1>What does it mean to capture records and how is it different from creating records?</h1>
<br>
Capturing is the process of incorporating a record within an organisational records systems and is a vital part of the records lifecycle. And facilitating records capture is an essential part of a records management programme. As we have seen, records creation is the act of making a record (evidence) of business transactions. To function as good evidence over time, records should be managed in official records systems. Such systems maintain and demonstrate the connection between a record and the business it documents.<br>
<br>
Records capture helps to ensure that records are:<br>
<ul>
<LI>Accessible to all who require them, subject to any restrictions that may apply
<LI>Controlled and managed in accordance with policy and procedures
<LI>Secured against tampering, unauthorized access or unlawful deletion
<LI>Disposed of promptly in accordance with legal authority.
</ul>
<br>
<b>List below three common ways of capturing UN records into official records systems.</b>
<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=5>
1. Registering paper documents and attaching them to appropriate files. 
2. Registering electronic documents and linking them to virtual files.
3. Using business systems to records transactions.

			</TEXTAREA>
		</div>
		<br>
		<br>
Examples of official records systems include paper-based filing systems, electronic records management systems and business systems that manage records. Where possible, records capture should be a routine part of doing business and integrated into standard business processes. The failure to capture records in official systems leads to personal stores of records that often remain uncontrolled, unmanaged and inaccessible to others who may need them.<br>
<br>
			<h2><u><strong>Records capture</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=153">Records Capture and Information Systems</a></strong></li>
		
		</ul>';
}else if ($Epage == "153"){

Print'
<h1>Records Capture and Information Systems</h1>
<br>
Information systems must be designed to create and capture essential records of the business supported by the system. This is a requirement of the United Nations\' Functional Requirements for Recordkeeping Systems (unavailable under the Standards Section of the e-learning programme)<br>
<br>
Increasingly, business information systems are being automated. The processes of designing, building or acquiring new and updated information systems provides an opportunity to ensure those systems make and keep appropriate records as a part of their standard operation. To achieve this, it is essential to collaborate with IT managers and professionals, including contractors and consultants.<br>
<br>
The United Nations Manual for the Design and Implementation of Recordkeeping Systems (unavailable under the Standards section of the e-learning programme) provides more guidance about how business information systems can be designed or redesigned to better meet recordkeeping requirements.<br>
<br>
			<h2><u><strong>Records capture</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=154">Records Capture and Business Process</a></strong></li>
			
		</ul>';

}else if ($Epage == "154"){

Print'
<h1>Records Capture and Business Process</h1>
<br>
Business processes can be highly structured, comprising a number of discrete steps and actions, or quite unstructured and unpredictable. Nevertheless, records creation and capture is ideally an integral part of any business process. Creating and capturing records should become second nature, and a part of the process, rather than an additional, burdensome activity.<br>
<br>
Structured business processes tend to be controlled by rules and procedures. If such rules and procedures are documented, such as in procedure manuals or instructions, it may be possible to include specific references to the need to create and capture records during the process. In cases where workflow systems are being introduced, you should aim to ensure that requirements to make and capture records re included at relevant points in the workflow process.<br>
<br>
Unstructured business processes are those with less predictable tasks and outcomes and they are often not as tightly controlled by standard operating rules. Using compliant electronic document management and recordkeeping systems will facilitate capture of electronic records.<br>
<br>
Now assess your learning by going to the test for this module<br>
<br>
			<h2><u><strong>Records capture</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=155">Test your learning - Records capture </a></strong></li>
		</ul>';

}else if ($Epage == "155"){

print'<h1>Test your learning - Records capture</h1>
		<br>
		<b>Answer true or false to the following questions</b>
		<br><br>
		<b>1. All records should be captured into official record systems.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide1">
			<br>
			<textarea COLS=80 ROWS=5>
True.
A record by definition is evidence of a business transaction, and, once created, must be captured in order to be managed effectively.
			</TEXTAREA>
		</div>
		<br>
				<b>2. The best information systems link records creation and capture to the business process the system supports. </b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide2">
			<br>
			<textarea COLS=80 ROWS=5>
True. 
Records creation and capture is ideally an integral part of any business process, with minimal burden of the records creator.
			</TEXTAREA>
		</div>
		<br>
				<b>3. Capturing records promotes information sharing.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide3">
			<br>
			<textarea COLS=80 ROWS=5>
True. 
Capturing records into official filing systems (whether paper or electronic) makes them available as a resource for all staff as needed.
			</TEXTAREA>
		</div>
		<br>
				<b>4. ICT staff needs to understand records management requirements. </b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide4">
			<br>
			<textarea COLS=80 ROWS=5>
True. 
ICT staff that design and/or manage information systems that create, capture, or store UN records need to incorporate recordkeeping requirements into business process analysis and information system design.
			</TEXTAREA>
		</div>
		<br>
				<b>5. Records created by unstructured business processes are less complicated and so are easier to manage.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide5">
			<br>
			<textarea COLS=80 ROWS=5>
False. 
Unstructured business processes tend to be less predictable and less controlled and records are not capture automatically, therefore it is likely that the records creator will have to take action to ensure that the record is capture.
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
	</div><h2><a href=\"29?Epage=161\">Next Module - Records Disposal</a></h2>
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
