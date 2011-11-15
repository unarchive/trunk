<?php

function Module2($Epage){
	if($Epage == "121"){
		print'
		<h1>Managing emails as records</h1>
		<br>
		<center><img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image121.jpg" ></center><br>
		<b>The objectives of this module are as follows:</b>
		<ul>
			<li>To explain what email is
			<li>To explain which emails are official records and which are not
			<li>To provide guidance on how to manage record and non-record email messages
		</ul>

		<b>The module is aimed at the following groups:</b>
		<ul>
			<li>All UN staff members
			<li>Records clerks
			<li>Records Officers/Managers
			<li>Head of Missions/Directors of Administration
			<li>ICT staff
		</ul>

		<b>The module covers the following topics:</b>
		<ul>
			<li>What is email?
			<li>Which emails are official records?
			<li>Best practice for creating email messages
			<li>Best practice for managing email records
			<ul>
				<li>Responsibility for keeping emails
				<li>Capturing and maintaining email records in a recordkeeping system
				<li>Hardcopy of emails
				<li>Email records of departing staff members
			</ul>
			<li>Test your learning
		</ul>

		<br>	
		<h2><u><strong>Managing emails as records</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=122">What is email?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=123">Which email records are official records?</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=124">Best practice for creating email records</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=125">Best practice for managing email records</a></strong></li>
			<li><strong><a href="/ARMS/node/29?Epage=126">Test your learning - Managing emails as records </a></strong></li>
		</ul>';
	
	}else if ($Epage == "122"){

		print'
		<h1>What is email?</h1>
		Today email has become an important business and personal communication tool within the UN.  It is estimated that on the one hand between 85% and 90% of email messages are either transitory records or personal communications but that on the other two thirds of business decisions are now recorded within email.  This means that the email messages recording these business decisions are official records and that you need to manage them as such.  But many of the other email messages are not official records and can be managed differently. <br> 
		<br>
		<center><img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image122.gif" ></center><br>
		<br>
		But before we go on to explore emails as records it is important to begin by confirming what exactly email is.<br>
		<br>
		The term \'email\' or electronic mail is often used to refer both to the system and an item produced by the system.<br>
		<br>
		Let\'s consider the system first.<br>
		<br>
		<b>Imagine that someone with no experience of email asks you what email is.  How would you explain it?</b>
		<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=5>
The simplest way to explain email is that it is an electronic postal system.  This means that just like the traditional postal system it is used to send a communication to one or more persons and it is used to send all kinds of communications
			</TEXTAREA>
		</div>
		<br>
		So the email system is first and foremost a postal system.  It would therefore be as inappropriate to manage all email messages in the same way as it would be to treat all items received through the traditional mail system as if they had equal importance.<br>
		<br>
		We therefore need to identify the different types of email messages to be able to manage them appropriately.<br>
		<br>
		<h2><u><strong>Managing emails as records</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=123">Which email records are official records?</a></strong></li>
		</ul>';
	
	}else if ($Epage == "123"){

		print'
		<h1>Which email records are official records?</h1>
		<br>
		Email records can be classified as follows:<br>
		<ul>
			<li>Personal records
			<li>Business records
		</ul>
		
		Let\'s take a look at some groups of emails and put them into the categories listed above.<br>
		<br>
		<p>For each of the email messages below indicate those which are personal records & business records</p><br>
		<br>
		<Table Border=1 cellspacing=1 cellpadding=1  width=550>
			<tr>
				<td>
					<b>1. messages that reflect the position or business of the Organisation</b>
				</td>	
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide1">
						<br>
						<textarea ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>2. miscellaneous notices of employee meetings, holidays, etc. </b>
				</td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide2">
						<br>
						<textarea ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>3. messages related to work schedules and assignments </b>
				</td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide3">
						<br>
						<textarea  ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>4. emails that result from personal use of the official electronic messaging system</b>
				</td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide4">
						<br>
						<textarea ROWS=2>
personal
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
						<b>5. messages that initiate, authorize or complete a business transaction</b>
				</td>
				<td> 
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide5">
						<br>
						<textarea  ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>6. agenda and minutes of meetings </b>
				</td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide6">
						<br>
						<textarea ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>7. messages received as part of a distribution list or received from listservs and other Internet sources, solely for convenience of reference</b>
				 </td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide7">
						<br>
						<textarea  ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>8. briefing notes </b>
		 		 </td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide8">
						<br>
						<textarea  ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>9. copies containing more information than the original record </b>
		 		 </td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide9">
						<br>
						<textarea  ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>10. messages resulting from casual communication.</b>
		 		 </td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide10">
						<br>
						<textarea  ROWS=2>
personal
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>11. messages received from external sources that relate to the official business of the Organisation </b>
		 		 </td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide11">
						<br>
						<textarea  ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>12. original messages of policies or directives where the information does not exist in another form:</b>
		 		 </td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide12">
						<br>
						<textarea  ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<b>13. final reports and recommendations </b>
		 		 </td>
				<td>
					<SELECT class="RightButt"  >
						<OPTION VALUE="0"  SELECTED>    </OPTION>
						<OPTION VALUE="1"  >1. personal records</OPTION>
						<OPTION VALUE="2"  >2. business records</OPTION>
					</SELECT>
					<div CLASS="AnswerBox" ID="Hide13">
						<br>
						<textarea   ROWS=2>
business
						</TEXTAREA>
					</div>
				</td>
			</tr>
		</TABLE>
		<br>
		<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayALLAnswerBox(13);" VALUE="Check Response">
		<br>
		<br>	
		<br>Personal records are relatively easy to spot and they are clearly not official records.  They cover messages which do not relate to the work operations of the individual staff member. They are the responsibility of the individual staff member and should be regularly deleted once they are no longer needed to free up space in the individual staff member\'s mailbox.<br>
		<br>
		However from this list it is clear that a lot of email messages relate to business but these email records can be further subdivided into:<br>
		<ul>
			<li>records to be retained as evidence of business transactions i.e. official records
			<li>drafts
			<li>temporary/transitory records.
		</ul>
		Business email records are any messages created, sent or received within an email system that are required by the Organization to control, support, or document the delivery of programs, to carry out operations, to make decisions, or to account for activities.  So from the list above these would be:
		<ul>
			<li>messages that reflect the position or business of the Organisation 
			<li>messages that initiate, authorize or complete a business transaction 
			<li>agenda and minutes of meetings 
			<li>briefing notes 
			<li>copies containing more or less information than the original record 
			<li>messages received from external sources that relate to the official business of the Organisation 
			<li>original messages of policies or directives where the information does not exist in another form
			<li>final reports and recommendations. 
		</ul>
		Drafts in the form of email messages fall into two categories.  First there are those created that are evidence of the evolution of a document as it goes through the approval processes, are considered official records.  This is because each stage of the approval process is a separate business transaction and needs to be officially recorded as such.  Secondly there are drafts you create, send or receive within an email system which are: 
		<ul>
			<li>copies used for information or reference purposes only 
			<li>additional information which is incorporated into subsequent versions 
			<li>rough or working drafts that are not required to document the steps in the evolution of a document i.e. they do not represent separate transactions.
		</ul>
		This second group of drafts are not official records

		Temporary/transitory email records do not control, support or document the delivery of programs, carry out operations, make decisions or account for activities of the organization and are typically required only for a limited time to ensure the completion of a routine action or the preparation of a subsequent record, for example the invitation to a meeting.

		Finally there are some emails which constitute non-record copies.  There are two groups:
		<ol>
			<li>email messages sent internally through distribution lists, for administrative or organizational requirements
			<li>email messages that contain information from sources external to the Organisation, distributed solely for information or reference purposes. 
		</ol>
		<br>
				<h2><u><strong>Managing emails as records</strong></u></h2>
		<ul>
			
			<li><strong><a href="/ARMS/node/29?Epage=124">Best practice for creating email records</a></strong></li>

		</ul>';
	}else if ($Epage == "124"){

		print'
		<h1>Best practice for creating email records</h1>
		<br>
		From this range of examples it\'s clear that an email message can be almost any kind of personal or business record.  And in addition to the categorization above, business email records may also have a security classification (as identified in ST/SGB/2006/XX Information Sensitivity, Classification and Handling) whose purpose is to determine levels of access during the lifecycle of the records.<br>
		<br>
		Good practice in managing emails begins with their creation and addressing.  The recommended guidelines are as follows:<br>
		<ul>
			<li>Email messages which are official records need to have all of the characteristics required for good records i.e. they need to be authentic, reliable, inviolate, complete, and useable and need to have metadata which describes their content, context and structure.  For more information on records creation consult the Records Creation module.
			<li>Only identify as main recipients those who need to act or take decisions on message content
			<li>Use "Reply to All" sparingly
			<li>Use cc for information only
			<li>Cover one topic only per email 
			<li>Include the message of the email in the text rather than as an attachment
			<li>Use clear and explicit subject lines
			<li>Categorise emails with prefixes in the "Subject lines" line to help users to decide whether to delete the email, open immediately or file it and open later.  See examples below: 
			<ul>
				<li>SOCIAL: evening out next Wednesday 
				<li>FOR INFO: transit strike latest news 
				<li>FOR ALL MANAGERS: new appraiser course 
				<li>!URGENT!: Fire drill at 12.00 
			</ul>
		</ul>
		<br>
		<h2><u><strong>Managing emails as records</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=125">Best practice for managing email records</a></strong></li>
		</ul>';
		
	}else if ($Epage == "125"){
		
		print'
		<h1>Best practice for managing email records</h1>
		<br>
You need to retain, organise and manage email records, so that you can easily access, retrieve and keep them for as long as they are needed. This includes retaining, organizing and managing email records of staff members who have left the Organization.<br>
<br>
Just as with other official records email records need to be covered by a retention schedule and have a designated office of record.  The fact that they are the output of a business process is what determines their life cycle rather than the fact that they are emails.  Equally the principle of identifying the office of record also applies.  <br>
<br>
We\'ll explore further the office of record below. For more information on retention schedules consult the module <b>Records Retention Schedules.</b><br>
<br>
Responsibility for keeping emails<br>
<br>
The first thing to decide is who is responsible for keeping the official copy of email records i.e. establishing the office of record.<br>
<br>
<b>Consider the following two scenarios then answer the questions posed.</b><br>
<br>
<b>1. If an email is created internally is it the responsibility of the originator or the recipient to ensure that the official business email record is retained and filed?</b><br>
		<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(1);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide1" >
			<br>
			<textarea COLS=80 ROWS=5>
If an email is created internally it is the responsibility of the originator to ensure that the official business email record is retained and filed. 
			</TEXTAREA>
		</div>
		<br>
<b>2. Where the email is received from an external source and forms part of the official business record, is it the responsibility of the originator or recipient of the email message to ensure that the official business email record is retained and filed.</b><br>
		<div CLASS="TextareaBox">
			<textarea COLS=80 ROWS=5> </TEXTAREA><br>
			<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayAnswerBox(2);" VALUE="Check Response">
		</div>
		<br>
		<div CLASS="AnswerBox" ID="Hide2" >
			<br>
			<textarea COLS=80 ROWS=5>
Where the email is received from an external source and forms part of the official business record, it is the responsibility of the recipient of the email message to ensure that the official business email record is retained and filed.
			</TEXTAREA>
		</div>
		<br>
		If there are multiple recipients of an external email record, each recipient who acts on the record would need to retain and file it.<br>
		<br>
		In addition to these standard scenarios there are other rules as follows:<br>
		<ul>
			<li>In the instance where you are the originator and you have created an email message for response from one or several recipients, you must ensure that the original text and all responses that form the complete email record are retained.
			<li>In the situation where there is an ongoing email exchange you should use your own judgement to determine at what stages in the discussion a copy of the email should be captured as an official record. This judgement needs to be based on the significance of new information in an email response to a previous message.
			<li>If you add information to an email record you receive, it is considered as a new original.  You then become the originator and so you must keep and manage it.
		</ul>
		Capturing and maintaining email records in a recordkeeping system<br>
		<br>
		As with other official records email records need to be captured and maintained in a recordkeeping system.  The recordkeeping system must be able to identify, retrieve, share, and retain the records for as long as they are needed.  Identification means linking the record to the business activity from which it results and to related records.  An electronic records management system [ERMS] provides the required functionality.  An electronic document management system [EDMS] does not provide recordkeeping functionality unless the email records are linked to a file classification system.<br>
		<br>
		If you retain your email records in electronic format, it is essential that you can reproduce and view them in their original electronic format.  This can be the actual email message along with its transmission and receipt data, or an attachment such as a Word or Excel document.  They should be filed and stored based on your file classification structure in order to maintain a link between messages and attachments, and any other related records.  The preferred method for doing this is by using an ERMS.<br>
		<br>
		It is unnecessary to keep more than one format of your email record.  If you have filed your email record in an ERMS, you can delete the copy in your email system.  If you have printed and filed your email record in hard copy you can delete the copy in your email system.  <br>
		<br>
		<img src="'.$GLOBALS['base_url'].'/'.$GLOBALS['theme_path'].'/images/ELearn/Image125.jpg" ALIGN=LEFT > 
		It is not recommended that you file and store email messages in your personal computer and directory work spaces. Doing so limits accessibility to the records and creates a major problem when a staff member leaves the Organization, or when an office or mission closes and staff move on.<br>
		<br>
		<i>Hardcopy of email records</i><br>
		If no option is available to retain and file email records in electronic formats in an appropriate electronic records management system, you may print email records for filing within the applicable records office or in any other applicable filing area for your hard copy records. <br>
		<br>
		The loss of transmission and receipt data (metadata) is a concern for the evidential value of printed copies of email messages. If not sure, you should consult your information technology personnel to assure that all metadata are printed with the messages.<br>
		<br>
		<i>Email records of departing staff members</i><br>
		It is essential that prior to leaving the Department or transferring to another organizational area within the Department, you make arrangements to ensure that any email records in your mailbox are appropriately filed and that your mailbox is cleaned up.  Before conducting the clean-up of your email messages, you are advised to consult the Archives and Records Management Section (ARMS) to determine and agree upon the filing method for your email records.<br>
		<br>
		You must retain and file within the pertinent operational area all those messages you determine to be official records of your department. You can accomplish this by using one or more of the following options:<br>
		<ul>
			<li>Filing them in an ERMS;
			<li>Assigning responsibility for your email account to another responsible person (in situations of a temporary departure such as maternity leave, secondment, etc. and given the understanding that this person will not delete your email records); or
			<li>Printing and filing your email records in the applicable records office or in any other applicable filing area for your hard copy records.
		</ul>
		You may delete all those messages you determine to be transitory records and other types of information not related to the Organization\'s business.  If you are transferring within the Organisation or departing for a temporary period of time and retaining your current United Nations email account, you may wish to keep some of these electronic messages.<br>
		<br>
		And finally some key points to remember when managing emails as records:<br>
		<ul>
			<li>Email messages can be of a variety of different types ranging from personal communications to official records
			<li>Email messages which are official records need have all of the characteristics of good records
			<li>Email records need to be managed in a recordkeeping system which stores, organises and maintains them for as long as they are required
			<li>If you are not able to store email records in an electronic records management system it is permissible to print email records for filing within the applicable records office or in any other applicable filing area for your hard copy records.
		</ul>
		Now assess your learning by going to the test for this module<br>
		<br>
		<h2><u><strong>Managing emails as records</strong></u></h2>
		<ul>
			<li><strong><a href="/ARMS/node/29?Epage=126">Test your learning - Managing emails as records </a></strong></li>
		</ul>';
		
		
	}else if ($Epage == "126"){
	
		print'<h1>Test your learning - Managing emails as records</h1>
		<br>
		<b>Answer true or false to the following questions</b>
		<br><br>
		<b>1. Email is the equivalent of an electronic postal system.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide1">
			<br>
			<textarea COLS=80 ROWS=5>
True
And like the traditional postal system the messages sent via email can vary in importance and focus.
			</TEXTAREA>
		</div>
		<br>
		<b>2. Retention of email records is best managed on the basis of how old they are. </b>
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
The retention of official email records should be determined by the nature and importance of the business transaction to which they relate.
			</TEXTAREA>
		</div>
		<br>
		<b>3. The great majority of email messages are either personal communications or transitory records.</b>
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
It is estimated that between 85% and 90% of email messages are either transitory records or personal communications
			</TEXTAREA>
		</div>
		<br>
		<b>4. It\'s the responsibility of the recipient of a business email record to capture, file and manage the official copy</b>
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
The responsibility for capturing, maintaining and managing the official email record copy rests with the originator for internal emails but with the recipient for emails for external sources where the emails relate to the organization\'s business operations.
			</TEXTAREA>
		</div>
		<br>
		<b>5. It is best practice to include the message of the email in the text rather than as an attachment</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide5">
			<br>
			<textarea COLS=80 ROWS=5>
True
This approach facilitates management over time as you are dealing with a single object.
			</TEXTAREA>
		</div>
		<br>
		<b>6. Any email message on which you are cc’ed is by definition not the official copy and therefore you need not retain it.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide6">
			<br>
			<textarea COLS=80 ROWS=5>
True
Being cc\'ed means that the email message is for information only.
			</TEXTAREA>
		</div>
		<br>
		<b>7. When you make an addition to an email record creates a new official record  </b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide7">
			<br>
			<textarea COLS=80 ROWS=5>
True
Any change makes a new record.
			</TEXTAREA>
		</div>
		<br>
		<b>8. Because an email record is created electronically the only option is to manage it electronically</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide8">
			<br>
			<textarea COLS=80 ROWS=8>
False
If the email record can be managed in an electronic records management system then this is the best solution.  If no option is available to retain and file email records in electronic formats in an appropriate electronic records management system, you may print email records for filing within the applicable records office or in any other applicable filing area for your hard copy records
			</TEXTAREA>
		</div>
		<br>
		<b>9. All drafts, in the form of emails, can be considered as transitory records.</b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide9">
			<br>
			<textarea COLS=80 ROWS=10>
False
There are two categories of drafts; those created in an email system that are evidence of the evolution of a document as it goes through the approval processes, are considered official records.  However, drafts you create, send or receive in an email system are not official records :
	o if they are copies used for information or reference purposes only 
	o if any additional information has been incorporated into subsequent versions 
	o if they are rough or working drafts that are not required to document the steps in the evolution of a document

			</TEXTAREA>
		</div>
		<br>
		<b>10.If you print and file an email record into an office filing system you are not required to keep the electronic copy. </b>
		<SELECT class="RightButt"  >
			<OPTION VALUE="0"  SELECTED> </OPTION>
			<OPTION VALUE="1"  >True</OPTION>
			<OPTION VALUE="2"  >False </OPTION>
		</SELECT>
		<br>
		<div CLASS="AnswerBox" ID="Hide10">
			<br>
			<textarea COLS=80 ROWS=5>
True
It is unnecessary to keep more than one format of your email record.  If you have filed your email record in an ERMS, you can delete the copy in your email system.  If you have printed and filed your email record in hard copy you can delete the copy in your email system.
			</TEXTAREA>
		</div>
		<br>
		<br>
		<INPUT TYPE=BUTTON class="RightButt" OnClick="DisplayALLAnswerBox(10);" VALUE="Check Response">
		<br>
		<br>';
		
print"
	<br>
	<div class=\"SideIcon\" ><img src=\"".$GLOBALS['base_path'].$GLOBALS['theme_path']."/images/PageIcon.jpg\" >
	</div><h2><a href=\"29?Epage=131\">Next Module - Records Access</a></h2>
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
