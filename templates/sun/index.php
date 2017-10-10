<?php
/* Stop include file being called directly */
$tmp=$_SERVER['SCRIPT_FILENAME'];
if (!preg_match("/\bindex.php\b/i", "$tmp") && !preg_match("/\bupgrade.php\b/i", "$tmp")) {
die("Hacking Attempt");
}

include("lang_eng.php");

function htmltop(){
global $lang;
echo("
<!DOCTYPE html>
<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title>Bitfield</title>
<link rel=\"stylesheet\" type=\"text/css\" media=\"all\"href=\"./templates/sun/style.css\">
<link rel=\"stylesheet\" id=\"all-css-0-1\" href=\"./templates/sun/saved_resource\" type=\"text/css\" media=\"all\">
</head>
<body class=\"home blog mp6 customizer-styles-applied single-author highlander-enabled highlander-light infinite-scroll neverending\">
<div id=\"wrapper\" class=\"hfeed\">
	<div id=\"header\">
		<div id=\"masthead\">
			<div id=\"branding\" role=\"banner\">
								<h1 id=\"site-title\">
					<span>
						<a href=\"\"title=\"Bitfield\" rel=\"home\">Bitfield</a>
					</span>
				</h1>
<form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\"
action=\"./?searchq\">
				<div>
					<label class=\"screen-reader-text\" for=\"s\">Search for:</label>
					<input type=\"text\" value=\"\"
name=\"searchq\" id=\"s\">
					<input type=\"submit\" id=\"searchsubmit\" value=\"Search\">
				</div>
			</form>
							<img src=\"./templates/sun/sunset.jpg\" width=\"940\" height=\"198\" alt=\"\"></img>
								</div>
			<div id=\"access\" role=\"navigation\">
								<div class=\"menu\"><ul>
<li class=\"current_page_item\"><a href=\"./?latest\">Home</a></li>
<li class=\"current_page_item\"><a href=\"./?add\">Post</a></li>
<li class=\"current_page_item\"><a href=\"./?search\">Search</a></li>
</div>
			</div>
		</div>
	</div>
	<div id=\"main\">
		<div id=\"container\">
			<div id=\"content\" role=\"main\">
");
}

function htmlbottom(){
echo("
			<div class=\"entry-utility\">
											</div>
		</div>
				<div id=\"nav-below\" class=\"navigation\">
					<div class=\"nav-next\"></div>
				</div>
			</div>
		</div>
		<div id=\"primary\" class=\"widget-area\" role=\"complementary\">
						<ul class=\"xoxo\">
		</div>
	</div>
</div>
</body></html>
");
}
