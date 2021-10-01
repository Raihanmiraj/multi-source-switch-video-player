<!DOCTYPE html>
<html>
<head>
<title>Video Source</title>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="robots" content="noindex">
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="assets/css/uikit.ace.min.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<script type="text/javascript" src="assets/js/uikit.min.js"></script>
<script type="text/javascript" src="assets/js/uikit-icons.min.js"></script>
<script type="text/javascript" src="assets/js/clipboard.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
 
<style type="text/css" media="screen">html,body{padding:0;margin:0;height:100%}#ancok-streaming{width:100%!important;height:100%!important;overflow:hidden;background-color:#000}.jw-menu,.jw-time-tip{padding:.5em!important}</style>
<style>	#video-container {position: relative;height: 0;overflow: hidden;}#video-container iframe,#video-container object,#video-container embed {position: absolute;top: 0;left:0;width: 100%;height: 100%;}.play-video:hover{background-color:#424b51;}.play-video.selected{background-color:#424b51;}</style>
<style> .list-servers{position: absolute; right: 10px; top: 20px; z-index: 9999;}.list-servers img{display: block; cursor: pointer;}.list-servers ul{padding-left:5px !important; list-style-type: none; padding: 0rem; position: absolute; right: 100%; top: -100%; border-radius: 5px; width: 10em;}.list-servers ul li{font-size:14px; padding: 1px; border-top: 1px solid #20201f; padding-right: 1rem; cursor: pointer; transition: all 0.3s; color: #ccc; background: rgba(0, 0, 0, .8); text-align: left; display: none;}.list-servers ul li:hover{background: white; color: black;}.list-servers ul li.active{background: white; color: black;}</style>
<style>
    .pframe {
	    background: url('assets/images/svg-loaders/puff.svg') center center no-repeat !important;
    }
    </style>

</head>
<body>
<script type="text/javascript"></script>
<div id="player" class="uk-card uk-card-default">
<div id="video-container">
<img id="loader1" src="assets/images/svg-loaders/puff.svg" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);" width="36" height="36" alt="loading gif" />
 

	<iframe width="560" height="315" id="video-container-iframe" src="https://www.youtube-nocookie.com/embed/sXS5FKsW860?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<div id="player-loader"  style="display:none" class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center" style="background-color: rgba(38, 42, 46, 0.7)">
<div class="uk-text-center">
<i class="uk-icon-circle-o-notch uk-icon-spin" style="font-size: 500%;"></i>
<p>Loading Player...</p>
</div>
</div>
</div>

<div class="list-servers" onclick="ClickServers()">
<img src="assets/images/servers.png" alt="List Servers" title="List Servers">
<ul id="listofsource" style="display: none;">

<li class="btn-sv" id="s1" onclick="GetVideoSource('https:\/\/www.youtube-nocookie.com/embed/sXS5FKsW860?controls=0', 's1');" style="display: list-item  ;">Taalpatar Sepai</li>

    
 
<li class="btn-sv" id="s2" onclick="GetVideoSource('https:\/\/www.youtube-nocookie.com/embed/RBumgq5yVrA', 's2');" style="display: list-item;">Passenger</li>

<li class="btn-sv" id="s3" onclick="GetVideoSource('https:\/\/www.youtube-nocookie.com/embed/r00ikilDxW4', 's3');" style="display: list-item;">Greem Day</li>
<li class="btn-sv" id="s4" onclick="GetVideoSource('https:\/\/www.youtube-nocookie.com/embed/r00ikilDxW4', 's4');" style="display: list-item;">External Link</li>
 
</ul>
</div>
</div>
<script type="text/javascript">
var _0xae04=["\x6E\x6F\x77","\x73\x68\x6F\x77","\x23\x70\x6C\x61\x79\x65\x72\x2D\x6C\x6F\x61\x64\x65\x72","\x73\x72\x63","\x61\x74\x74\x72","\x23\x76\x69\x64\x65\x6F\x2D\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72\x2D\x69\x66\x72\x61\x6D\x65","\x68\x69\x64\x65","\x6C\x6F\x61\x64","\x23\x72\x65\x63\x61\x70\x74\x63\x68\x61\x2D\x6D\x6F\x64\x61\x6C","\x6D\x6F\x64\x61\x6C","\x66\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E\x45\x6E\x61\x62\x6C\x65\x64","\x6D\x6F\x7A\x46\x75\x6C\x6C\x53\x63\x72\x65\x65\x6E\x45\x6E\x61\x62\x6C\x65\x64","\x77\x65\x62\x6B\x69\x74\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E\x45\x6E\x61\x62\x6C\x65\x64","\x72\x65\x73\x69\x7A\x65","\x69\x6E\x6E\x65\x72\x57\x69\x64\x74\x68","\x69\x6E\x6E\x65\x72\x48\x65\x69\x67\x68\x74","\x23\x68\x65\x61\x64\x65\x72\x2D\x62\x61\x72","\x77\x69\x64\x74\x68","\x68\x65\x69\x67\x68\x74","\x70\x61\x64\x64\x69\x6E\x67\x2D\x62\x6F\x74\x74\x6F\x6D","\x25","\x63\x73\x73","\x23\x76\x69\x64\x65\x6F\x2D\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72","\x64\x6F\x63\x75\x6D\x65\x6E\x74\x45\x6C\x65\x6D\x65\x6E\x74","\x66\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E\x45\x6C\x65\x6D\x65\x6E\x74","\x6D\x6F\x7A\x46\x75\x6C\x6C\x53\x63\x72\x65\x65\x6E\x45\x6C\x65\x6D\x65\x6E\x74","\x77\x65\x62\x6B\x69\x74\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E\x45\x6C\x65\x6D\x65\x6E\x74","\x6D\x73\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E\x45\x6C\x65\x6D\x65\x6E\x74","\x72\x65\x71\x75\x65\x73\x74\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E","\x6D\x6F\x7A\x52\x65\x71\x75\x65\x73\x74\x46\x75\x6C\x6C\x53\x63\x72\x65\x65\x6E","\x77\x65\x62\x6B\x69\x74\x52\x65\x71\x75\x65\x73\x74\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E","\x6D\x73\x52\x65\x71\x75\x65\x73\x74\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E","\x65\x78\x69\x74\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E","\x6D\x6F\x7A\x43\x61\x6E\x63\x65\x6C\x46\x75\x6C\x6C\x53\x63\x72\x65\x65\x6E","\x77\x65\x62\x6B\x69\x74\x45\x78\x69\x74\x46\x75\x6C\x6C\x73\x63\x72\x65\x65\x6E"];function frame(_0x7ce0x2){var _0x7ce0x3=Date[_0xae04[0]]();var _0x7ce0x4=_0x7ce0x2;$(_0xae04[2])[_0xae04[1]]();$(_0xae04[5])[_0xae04[4]](_0xae04[3],_0x7ce0x4);$(_0xae04[5])[_0xae04[7]](function(){$(_0xae04[2])[_0xae04[6]]()})}var recaptcha_modal=UIkit[_0xae04[9]](_0xae04[8],{center:true,bgclose:false});var player=$(_0xae04[5]);var fullscreenEnabled=document[_0xae04[10]]|| document[_0xae04[11]]|| document[_0xae04[12]];setupIframe();$(window)[_0xae04[13]](function(){setupIframe()});function setupIframe(){window_width= window[_0xae04[14]];window_height= window[_0xae04[15]];header_height= $(_0xae04[16])[_0xae04[15]]();player_width= window_width;player_height= window_height- header_height;player_ratio= player_height/ (player_width/ 100);player[_0xae04[4]](_0xae04[17],player_width);player[_0xae04[4]](_0xae04[18],player_height);$(_0xae04[22])[_0xae04[21]](_0xae04[19],player_ratio+ _0xae04[20])}function toggleFullscreen(_0x7ce0xa){_0x7ce0xa= _0x7ce0xa|| document[_0xae04[23]];if(!document[_0xae04[24]]&&  !document[_0xae04[25]] &&  !document[_0xae04[26]] &&  !document[_0xae04[27]]){launchIntoFullscreen(_0x7ce0xa)}else {exitFullscreen()}}function launchIntoFullscreen(_0x7ce0xa){if(_0x7ce0xa[_0xae04[28]]){_0x7ce0xa[_0xae04[28]]()}else {if(_0x7ce0xa[_0xae04[29]]){_0x7ce0xa[_0xae04[29]]()}else {if(_0x7ce0xa[_0xae04[30]]){_0x7ce0xa[_0xae04[30]]()}else {if(_0x7ce0xa[_0xae04[31]]){_0x7ce0xa[_0xae04[31]]()}}}}}function exitFullscreen(){if(document[_0xae04[32]]){document[_0xae04[32]]()}else {if(document[_0xae04[33]]){document[_0xae04[33]]()}else {if(document[_0xae04[34]]){document[_0xae04[34]]()}}}}
</script>
<script type="text/javascript">
    var $loading = $('#video-container-iframe').hide();
    $('#video-container-iframe').on('load', function () {
        $("#video-container-iframe").show();
    });
    
	function ClickServers() {
	    if ($('#listofsource').css('display') == 'block') {
	        $('#listofsource').css({'display':'none'});
	    } else {
	        $('#listofsource').css({'display':'block'});
	    }
	}
	function GetVideoSource(source, id) {
	    $('#video-container-iframe').hide();

	    if (document.getElementById('s1') != null) {
	        document.getElementById('s1').style = 'display:list-item;';
	    }
	 
	    if (document.getElementById('s2') != null) {
	        document.getElementById('s2').style = 'display:list-item;';
	    }
	 
	    if (document.getElementById('s3') != null) {
	        document.getElementById('s3').style = 'display:list-item;';
	  
	    }
	    if (document.getElementById('s4') != null) {
	        document.getElementById('s4').style = 'display:list-item;';
	        if (id == "s4" && "Download Video" == 'Download Video') {
	            window.open('https://youtu.be/r00ikilDxW4');
	            return;
	        }
	    }
frame(source);
	    document.getElementById(id).style = 'display: list-item;color: black;background: white;';
	    ClickServers();
	    $('#listofsource').css({'display':'block'});
	}
</script>
</body>
</html>
