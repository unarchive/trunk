 <?php
 function Smoothgallery_SlideShow() {
 
 print' 
 <link rel="stylesheet" href="'.$GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
 <link rel="stylesheet" href="'.$GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/css/ReMooz.css" type="text/css" media="screen" charset="utf-8" />
 <link rel="stylesheet" href="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideshowstyle.css" type="text/css" media="screen" charset="utf-8" />
 
 <!--[if IE]>
	<link rel="stylesheet"href="'.$GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/css/IEbugfixstyle.css"   type="text/css"/>
<![endif]-->
 
		
		<script src="'. $GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/scripts/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
		<script src="'.$GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/scripts/mootools-1.2-more.js" type="text/javascript"></script>
		<script src="'.$GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/scripts/jd.gallery.js" type="text/javascript"></script>
		<script src="'.$GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/scripts/ReMooz.js" type="text/javascript"></script>
		<script src="'.$GLOBALS['base_path'].'sites/archivesdev.un.org.ARMS/modules/smoothgallery/scripts/jd.gallery.transitions.js" type="text/javascript"></script>
		
	
		<script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($(\'myGallery\'), {
					timed: true,
					useReMooz: true,
					embedLinks: false,
					defaultTransition: "fadeslideleft"
					
				});
			}
			window.addEvent(\'domready\',startGallery);
		</script>
		
		
		
		<div class="content">
			<div id="myGallery">
				<div class="imageElement">
				        <h3> SG Visits the UN Records Centre</h3>
					 <p>Secretary-General Ban Ki-moon (centre) browses through archival material as he tours the offices of the United Nations Archives and Records Management Section (ARMS)</p>
					 <a href="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME1.jpg" title="open image" class="open"></a>
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME1.jpg" class="full" />
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME1-thumb.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Archives of the UN Korean Reconstruction Agency (1950-1958)</h3>
					<p>UN Archives Services have been based in New York since 1950</p>
					<a href="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME2.jpg" title="open image" class="open"></a>
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME2.jpg" class="full" />
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME2-thumb.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Records Transfer from Peacekeeping Operations</h3>
					<p>UNMIK (Kosovo) transfer its records to ARMS for storage and preservation</p>
					<a href="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME3.jpg" title="open image" class="open"></a>
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME3.jpg" class="full" />
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME3-thumb.jpg" class="thumbnail" />
				</div>
				
				<div class="imageElement">
					<h3> Archives Reading Room</h3>
					<p>About 10,000 linear meters of UN Archives are available for consultation in Manhattan.</p>
					<a href="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME4.jpg" title="open image" class="open"></a>
						<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME4.jpg" class="full" />
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME4-thumb.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>ARMS in Action in Peacekeeping Operations</h3>
					<p>ARMS Records management training workshop in UNOMIG (Georgia)</p>
					<a href="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME5.jpg" title="open image" class="open"></a>
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME5.jpg" class="full" />
					<img src="'.$GLOBALS['base_path'].$GLOBALS['theme_path'].'/slideimages/HOME5-thumb.jpg" class="thumbnail" />
				</div>
				
			</div>
		</div>';
}
?>
