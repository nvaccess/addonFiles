<?php
$addons = array(
	"bc" => "bitChe-2.5.nvda-addon",
	"bc-dev" => "bitChe-2.5.nvda-addon",
	"ccd" => "clipContentsDesigner-3.5.nvda-addon",
	"ccd-dev" => "clipContentsDesigner-4.2-dev.nvda-addon",
	"cr-dev" => "columnsReview-2.0.nvda-addon",
	"cua" => "controlUsageAssistant-2.2.nvda-addon",
	"dw" => "dayOfTheWeek-1.3.nvda-addon",
	"dw-dev" => "dayOfTheWeek-1.3.nvda-addon",
	"dx" => "dropbox-4.2.nvda-addon",
	"dx-dev" => "dropbox-4.0-dev.nvda-addon",
	"em" => "eMule-3.1.nvda-addon",
	"em-dev" => "eMule-3.1-dev.nvda-addon",
	"emo" => "emoticons-4.5.nvda-addon",
	"emo-dev" => "emoticons-4.5-dev.nvda-addon",
	"etn" => "easyTableNavigator-1.1.nvda-addon",
	"etn-dev" => "easyTableNavigator-1.0-dev.nvda-addon",
	"ets" => "enhancedTouchGestures-0.7.nvda-addon",
	"ew" => "extendedWinamp-1.1.nvda-addon",
	"fh" => "https://www.nvda.jp/addons/focusHighlight-3.0.nvda-addon",
	"fh-dev" => "https://www.nvda.jp/addons/focusHighlight-4.0-dev-151022.nvda-addon",
	"gc" => "goldenCursor-1.1.nvda-addon",
	"gc-dev" => "goldenCursor-1.0-dev.nvda-addon",
	"gl" => "https://bitbucket.org/nvdaaddonteam/todo/raw/master/guideLines.txt",
	"gwv" => "goldwave-3.4.nvda-addon",
	"gwv-dev" => "goldwave-3.0-dev.nvda-addon",
	"it" => "instantTranslate-4.0-dev.nvda-addon",
	"it-dev" => "instantTranslate-4.0-dev.nvda-addon",
	"nb" => "noBeepsSpeechMode-2.2.nvda-addon",
	"nb-dev" => "noBeepsSpeechMode-2.2.nvda-addon",
	"ocr" => "http://files.nvaccess.org/nvda-addons/ocr_0.20120529.01.nvda-addon",
	"pckbbrl" => "http://files.nvaccess.org/nvda-addons/pcKbBrl-2014.1.nvda-addon",
	"pm" => "placeMarkers-6.3.nvda-addon",
	"pm-dev" => "placeMarkers-6.3-dev.nvda-addon",
	"qb-dev" => "http://files.nvaccess.org/nvda-addons/quickBooks2014-2014.4.7.nvda-addon",
	"rf" => "readFeeds-2.7.nvda-addon",
	"rf-dev" => "readFeeds-2.7-dev.nvda-addon",
	"rm" => "resourceMonitor-4.4.nvda-addon",
	"rm-dev" => "resourceMonitor-4.0-dev.nvda-addon",
	"rs-dev" => "rapidSettings-2.0dev.nvda-addon",
	"st" => "systrayList-1.7.nvda-addon",
	"st-dev" => "systrayList-2.0-dev.nvda-addon",
	"spl" => "stationPlaylist-7.2.nvda-addon",
	"spl-dev" => "stationPlaylist-8.0-dev20160616.nvda-addon",
	"tod-dev" => "tipOfTheDay-1.0-dev.nvda-addon",
	"tv" => "teamViewer-2.3.nvda-addon",
	"tv-dev" => "teamViewer-3.0-dev.nvda-addon",
	"ubi" => "unicodeBrailleInput-2.5.nvda-addon",
	"ubi-dev" => "unicodeBrailleInput-2.5.nvda-addon",
	"VR" => "virtualRevision-2.0-dev.nvda-addon",
	"vlc" => "vlc-1.2.nvda-addon",
	"vent" => "Ventrilo-1.0-dev.nvda-addon",
	"w10" => "wintenApps-16.06.nvda-addon",
	"w10-dev" => "wintenApps-20160615-dev.nvda-addon",
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
