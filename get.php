<?php
$addons = array(
	"ath" => "https://github.com/mush42/Audio-Themes-NVDA-Add-on/releases/download/v5.1/AudioThemes3D-5.1.nvda-addon",
	"ath-dev" => "AudioThemes3D-5.1-beta.nvda-addon",
	"bc" => "bitChe-2.5.nvda-addon",
	"bc-dev" => "bitChe-2.5.nvda-addon",
	"ccd" => "https://github.com/nvdaaddons/clipContentsDesigner/releases/download/v4.0/clipContentsDesigner-4.0.nvda-addon",
	"ccd-dev" => "https://github.com/nvdaaddons/clipContentsDesigner/releases/download/v4.0/clipContentsDesigner-4.0.nvda-addon",
	"cr-dev" => "columnsReview-2.0.nvda-addon",
	"crh-dev" => "https://files.derekriemer.com/crashHero-dev.nvda-addon",
	"cua" => "controlUsageAssistant-2.2.nvda-addon",
	"dw" => "dayOfTheWeek-1.4.nvda-addon",
	"dw-dev" => "dayOfTheWeek-1.3.nvda-addon",
	"dx" => "dropbox-4.2.nvda-addon",
	"dx-dev" => "dropbox-4.0-dev.nvda-addon",
	"em" => "eMule-3.1.nvda-addon",
	"em-dev" => "eMule-3.1-dev.nvda-addon",
	"emo" => "emoticons-4.5.nvda-addon",
	"emo-dev" => "emoticons-4.5-dev.nvda-addon",
	"etn" => "easyTableNavigator-1.1.nvda-addon",
	"etn-dev" => "easyTableNavigator-1.0-dev.nvda-addon",
	"ets" => "https://github.com/josephsl/enhancedTouchGestures/releases/download/16.06/enhancedTouchGestures-16.06.nvda-addon",
	"ew" => "extendedWinamp-1.1.nvda-addon",
	"fh" => "https://www.nvda.jp/addons/focusHighlight-3.0.nvda-addon",
	"fh-dev" => "https://www.nvda.jp/addons/focusHighlight-4.0-dev-151022.nvda-addon",
	"gc" => "goldenCursor-1.1.nvda-addon",
	"gc-dev" => "goldenCursor-1.0-dev.nvda-addon",
	"gl" => "https://bitbucket.org/nvdaaddonteam/todo/raw/master/guideLines.txt",
	"gwv" => "goldwave-4.0.nvda-addon",
	"gwv-dev" => "goldwave-3.0-dev.nvda-addon",
	"it" => "instantTranslate-4.1-dev.nvda-addon",
	"it-dev" => "instantTranslate-4.1-dev.nvda-addon",
	"mp3dc-dev" => "https://github.com/nvdaaddons/mp3DirectCut/releases/download/v2.2/mp3DirectCut-2.2.nvda-addon",
	"nb" => "noBeepsSpeechMode-2.2.nvda-addon",
	"nb-dev" => "noBeepsSpeechMode-2.2.nvda-addon",
	"ocr" => "http://files.nvaccess.org/nvda-addons/ocr_0.20120529.01.nvda-addon",
	"pckbbrl" => "http://files.nvaccess.org/nvda-addons/pcKbBrl-2014.1.nvda-addon",
	"pm" => "placeMarkers-6.3.nvda-addon",
	"pm-dev" => "placeMarkers-6.3-dev.nvda-addon",
	"qb-dev" => "http://files.nvaccess.org/nvda-addons/quickBooks2014-2014.4.7.nvda-addon",
	"rf" => "https://github.com/nvdaaddons/readFeeds/releases/download/2.8/readFeeds-2.8.nvda-addon",
	"rf-dev" => "https://github.com/nvdaaddons/readFeeds/releases/download/2.8/readFeeds-2.8.nvda-addon",
	"rm" => "resourceMonitor-4.5.nvda-addon",
	"rm-dev" => "resourceMonitor-4.0-dev.nvda-addon",
	"rs-dev" => "rapidSettings-2.0dev.nvda-addon",
	"rsy" => "https://github.com/nvdaaddons/reportSymbols/releases/download/1.1-dev/reportSymbols-1.1-dev.nvda-addon",
	"rsy-dev" => "https://github.com/nvdaaddons/reportSymbols/releases/download/1.1-dev/reportSymbols-1.1-dev.nvda-addon",
	"st" => "systrayList-1.7.nvda-addon",
	"st-dev" => "systrayList-2.0-dev.nvda-addon",
	"spl" => "stationPlaylist-7.3.nvda-addon",
	"spl-dev" => "stationPlaylist-8.0-dev20160722.nvda-addon",
	"sws" => "https://github.com/tspivey/switchSynth/releases/download/v1.02-dev/switchSynth-1.02-dev.nvda-addon",
	"tmast" => "https://github.com/nvdaaddons/toneMaster/releases/download/v1.2/toneMaster-1.2.nvda-addon",
	"tod-dev" => "https://files.derekriemer.com/tipOfTheDay-dev.nvda-addon",
	"tod" => "https://files.derekriemer.com/tipOfTheDay.nvda-addon",
	"tv" => "teamViewer-2.3.nvda-addon",
	"tv-dev" => "teamViewer-3.0-dev.nvda-addon",
	"ubi" => "unicodeBrailleInput-2.5.nvda-addon",
	"ubi-dev" => "unicodeBrailleInput-2.5.nvda-addon",
	"VR" => "virtualRevision-2.0-dev.nvda-addon",
	"vlc" => "vlc-1.2.nvda-addon",
	"vent" => "Ventrilo-1.0-dev.nvda-addon",
	"w10" => "https://github.com/josephsl/wintenApps/releases/download/16.07/wintenApps-16.07.nvda-addon",
	"w10-dev" => "wintenApps-20160722-dev.nvda-addon",
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
