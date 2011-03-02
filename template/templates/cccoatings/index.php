<!DOCTYPE html>

<html>

<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="/templates/cccoatings/css/template.css" />
	<script src="/templates/cccoatings/js/rollovers.js"></script>
	
</head>

<body>
	<div id="wrapper">
		<div id="top">
			<div id="left">
				<jdoc:include type="modules" name="left" style="xhtml"/>
			</div><!-- end left -->
			
			<div id="right">
				<jdoc:include type="modules" name="right" style="xhtml"/>
			</div><!-- end right -->
			
			<div class="clear"></div>
		</div><!-- end top -->
		
		<div id="component">
				<jdoc:include type="component" />
			<div id="contact-info">
				<jdoc:include type="modules" name="contact-info" style="xhtml"/>
			</div>		
		</div><!-- End Component -->
		
		<div id="bottom">
			<jdoc:include type="modules" name="bottom" style="xhtml"/>
		</div>
		
		<div id="footer">
			<div class="footer">
				Site By
				<a href="http://www.ccistudios.com" target="_blank">CCI Studios</a>
			</div>
		</div>
	</div><!-- end wrapper -->
</body>
</html>


