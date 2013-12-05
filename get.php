<?php
$addons = array(
    "bc" => "bitChe-1.3.nvda-addon",
    "cua" => "controlUsageAssistant-2.1.nvda-addon",
    "dx" => "dropbox-3.1.nvda-addon",
    "dx-dev" => "dropbox-4.0-dev.nvda-addon",
    "em" => "eMule-1.0.nvda-addon",
	"em-dev" => "eMule-1.1-dev.nvda-addon",
	"emo" => "emoticons-1.0.nvda-addon",
    "emo-dev" => "emoticons-1.1-dev.nvda-addon",
    "ets" => "enhancedTouchGestures-0.1.nvda-addon",
    "ew" => "extendedWinamp-1.1.nvda-addon",
    "fh" => "focusHighlight-1.0.nvda-addon",
    "fh-dev" => "focusHighlight-1.0.nvda-addon",
    "gl" => "https://bitbucket.org/nvdaaddonteam/todo/raw/master/guideLines.txt",
	"gsr" => "googleSpeechRecognition-1.0.nvda-addon",
    "gsr-dev" => "googleSpeechRecognition-1.1-dev.nvda-addon",
    "gwv" => "goldwave-1.0.nvda-addon",
    "gwv-dev" => "goldwave-1.1-dev.nvda-addon",
    "it" => "instantTranslate-2.2beta2.nvda-addon",
    "it-dev" => "instantTranslate-3.0-dev.nvda-addon",
    "nb" => "NoBeepsSpeechMode-1.4.nvda-addon",
    "ocr" => "http://files.nvaccess.org/nvda-addons/ocr_0.20120529.01.nvda-addon",
    "pm" => "placeMarkers-2.0.nvda-addon",
    "pm-dev" => "placeMarkers-3.0-dev.nvda-addon",
    "rf-dev" => "readFeeds-1.0-dev.nvda-addon",
    "rm" => "resourceMonitor-3.0.nvda-addon",
    "rm-dev" => "resourceMonitor-3.0.nvda-addon",
    "st" => "systrayList-2.0-dev.nvda-addon",
    "spl-dev" => "StationPlaylist-0.1-dev.nvda-addon",
    "ubi" => "unicodeBrailleInput-1.01.nvda-addon",
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
