<?php
$addons = array(
	"bc" => "bitChe-1.5.nvda-addon",
	"bc-dev" => "bitChe-1.5-dev.nvda-addon",
	"cua" => "controlUsageAssistant-2.1.nvda-addon",
	"dx" => "dropbox-3.1.nvda-addon",
	"dx-dev" => "dropbox-4.0-dev.nvda-addon",
	"em" => "eMule-1.1.nvda-addon",
	"em-dev" => "eMule-1.2-dev.nvda-addon",
	"emo" => "emoticons-1.0.nvda-addon",
	"emo-dev" => "emoticons-1.1-dev.nvda-addon",
	"ets" => "enhancedTouchGestures-0.2.nvda-addon",
	"ew" => "extendedWinamp-1.1.nvda-addon",
	"fh" => "focusHighlight-1.0.nvda-addon",
	"fh-dev" => "focusHighlight-1.1-dev.nvda-addon",
	"gl" => "https://bitbucket.org/nvdaaddonteam/todo/raw/master/guideLines.txt",
	"gsr" => "googleSpeechRecognition-1.0.nvda-addon",
	"gsr-dev" => "googleSpeechRecognition-1.1-dev.nvda-addon",
	"gwv" => "goldwave-1.2.nvda-addon",
	"gwv-dev" => "goldwave-2.0-dev.nvda-addon",
	"it" => "instantTranslate-2.2beta2.nvda-addon",
	"it-dev" => "instantTranslate-3.0-dev.nvda-addon",
	"nb" => "noBeepsSpeechMode-1.5.nvda-addon",
	"ocr" => "http://files.nvaccess.org/nvda-addons/ocr_0.20120529.01.nvda-addon",
	"pckbbrl" => "http://files.nvaccess.org/nvda-addons/pcKbBrl-2014.1.nvda-addon",
	"pm" => "placeMarkers-3.0.nvda-addon",
	"pm-dev" => "placeMarkers-3.1-dev.nvda-addon",
	"qb-dev" => "http://files.nvaccess.org/nvda-addons/quickBooks2014-2014.4.7.nvda-addon",
	"rf" => "readFeeds-1.0.nvda-addon",
	"rf-dev" => "readFeeds-1.1-dev.nvda-addon",
	"rm" => "resourceMonitor-3.1.nvda-addon",
	"rm-dev" => "resourceMonitor-3.1.nvda-addon",
	"rs-dev" => "rapidSettings-2.0dev.nvda-addon",
	"st" => "systrayList-1.4.nvda-addon",
	"st-dev" => "systrayList-2.0-dev.nvda-addon",
	"spl" => "stationPlaylist-2.0.nvda-addon",
	"spl-dev" => "stationPlaylist-2.1-dev.nvda-addon",
	"tv" => "teamViewer-1.0.nvda-addon",
	"tv-dev" => "teamViewer-1.1-dev.nvda-addon",
	"ubi" => "unicodeBrailleInput-1.01.nvda-addon",
	"ubi-dev" => "unicodeBrailleInput-1.1-dev.nvda-addon",
	"VR" => "virtualRevision-1.3-dev.nvda-addon",
	"wrd" => "word-0.2-dev.nvda-addon"
);

If (isset($_GET['file'])) {
	$file = $_GET['file'];
	$fullname = $addons[$file];

	if ($fullname != "") {
		Header('Location:'.$fullname);
	} else {
		print "<h1>File not found</h1>";
		print "<p>The file you requested could not be found on this server.</p>";
		print "<p>Please check that the link that brought you here is correct and try again.</p>";
		print "<p>Thanks</p>";
	}
} else {
	print "<h1>Error:</h1>";
	print "<p>Please check that the link that brought you here is correct and try again.</p>";
	print "<p>If you continue to see this message report this error to the nvda addon list.</p>";
	print "<p>Thanks</p>";
}
?>
