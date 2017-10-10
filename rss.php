<?php

$osqdb_path = './';
include_once ($osqdb_path . 'config.php');
include_once ($osqdb_path . 'includes/view.inc.php');
?>

<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
	<channel>
		<title><![CDATA[Bitfield]]></title>
		<description><![CDATA[Bitfield]]></description>
		<link></link>
		<lastBuildDate><?php echo date("D, d M Y H:i:s e"); ?>
</lastBuildDate>
		<ttl>15<ttl>
		<?php latest_rss(); ?>
	</channel>
</rss>
