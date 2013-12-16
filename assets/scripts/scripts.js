$(document).ready(function(){

    var updateDiv = function () {
      $('.currently-playing').load('proxy.php', function () {
        Timer = window.setTimeout(updateDiv, 10000);
      });
    }
    var Timer = window.setTimeout(updateDiv, 10000);

});

window.addEventListener("load",function() {
   setTimeout(function(){
    window.scrollTo(0, 0);
    }, 0);
});

$(document).ready(function() {

	$('.currently-playing').load('proxy.php', function () {
		Timer = window.setTimeout(updateDiv, 10000);
	});

	$(".pause").hide();
	$(".currently-playing").hide();

    $(".play").click(function(){
        $(".play").hide();
        $(".pause").show();
        $(".currently-playing").show();
    })
    
    $(".pause").click(function(){
		$(".pause").hide();
		$(".currently-playing").hide();
		$(".play").show();
    })
    
    if (audio.addEventListener){  
      audio.addEventListener("playing", function(){
      	$(".play").hide();
      	$(".pause").show();
      	$(".currently-playing").show();
      });
    } else if (audio.attachEvent){  
      audio.attachEvent("ended", function(){
      	$(".pause").hide();
      	$(".currently-playing").hide();
      	$(".play").show();
      });
    }
    
});


var media_events = new Array();

// was extracted from the spec in January 2013
media_events["loadstart"] = 0;
media_events["progress"] = 0;
media_events["suspend"] = 0;
media_events["abort"] = 0;
media_events["error"] = 0;
media_events["emptied"] = 0;
media_events["stalled"] = 0;
media_events["loadedmetadata"] = 0;
media_events["loadeddata"] = 0;
media_events["canplay"] = 0;
media_events["canplaythrough"] = 0;
media_events["playing"] = 0;
media_events["waiting"] = 0;
media_events["seeking"] = 0;
media_events["seeked"] = 0;
media_events["ended"] = 0;
media_events["durationchange"] = 0;
media_events["timeupdate"] = 0;
media_events["play"] = 0;
media_events["pause"] = 0;
media_events["ratechange"] = 0;
media_events["volumechange"] = 0;

var media_controller_events = new Array();

// was extracted from the spec in January 2013
media_controller_events["emptied"] = 0;
media_controller_events["loadedmetadata"] = 0;
media_controller_events["loadeddata"] = 0;
media_controller_events["canplay"] = 0;
media_controller_events["canplaythrough"] = 0;
media_controller_events["playing"] = 0;
media_controller_events["ended"] = 0;
media_controller_events["waiting"] = 0;
media_controller_events["ended"] = 0;
media_controller_events["durationchange"] = 0;
media_controller_events["timeupdate"] = 0;
media_controller_events["play"] = 0;
media_controller_events["pause"] = 0;
media_controller_events["ratechange"] = 0;
media_controller_events["volumechange"] = 0;

// was extracted from the spec in January 2013
var media_properties = [ "error", "src", "currentSrc", "crossOrigin", "networkState", "preload", "buffered", "readyState", "seeking", "currentTime", "duration", "startDate", "paused", "defaultPlaybackRate", "playbackRate", "played", "seekable", "ended", "autoplay", "loop", "mediaGroup", "controller", "controls", "volume", "muted", "defaultMuted", "audioTracks", "audioTracks", "textTracks", "width", "height", "audioWidth", "audioHeight", "poster" ];

var media_properties_elts = null;

var webm = null;

function init() {
    document._audio = document.getElementById("audio");

    webm = document.getElementById("webm");

    init_events();
    init_properties();
    init_mediatypes();

    // properties are updated even if no event was triggered
    setInterval(update_properties, 500);
}
document.addEventListener("DOMContentLoaded", init, false);

function init_events() {

    for (key in media_events) {	
	document._audio.addEventListener(key, capture, false);
    }

    var tbody = document.getElementById("events");
    var i = 1;
    var tr = null;
    for (key in media_events) {	
	if (tr == null) tr    = document.createElement("tr");
	var th = document.createElement("th");
	th.textContent = key;
	var td = document.createElement("td");
	td.setAttribute("id", "e_" + key);
	td.innerHTML = "0";
	td.className = "false";
	tr.appendChild(th);
	tr.appendChild(td);

	if ((i++ % 5) == 0) {
	    tbody.appendChild(tr);
	    tr = null;
	}


    }
    if (tr != null) tbody.appendChild(tr);
}
function init_properties() {
    var tbody = document.getElementById("properties");
    var i = 0;
    var tr = null;
    media_properties_elts = new Array(media_properties.length);
    do {
	if (tr == null) tr    = document.createElement("tr");
	var th = document.createElement("th");
	th.textContent = media_properties[i];
	var td = document.createElement("td");
	td.setAttribute("id", "p_" + media_properties[i]);
	var r = eval("document._audio." + media_properties[i]);
	td.innerHTML = r;
	if (typeof(r) != "undefined") {
	    td.className = "true";
	} else {
	    td.className = "false";
	}
	tr.appendChild(th);
	tr.appendChild(td);
	media_properties_elts[i] = td;
	if ((++i % 3) == 0) {
	    tbody.appendChild(tr);
	    tr = null;
	}
    } while (i < media_properties.length);
    if (tr != null) tbody.appendChild(tr);
}

function init_mediatypes() {
    var tbody = document.getElementById("m_audio");
    var i = 0;
    var tr = document.createElement("tr");
    var audioTypes = [ "audio/ogg", "audio/mp4", "audio/webm" ];
    i = 0;
    tr = document.createElement("tr");    
    do {
	var td = document.createElement("th");
	td.innerHTML = audioTypes[i];
	tr.appendChild(td);
    } while (++i < audioTypes.length);
    tbody.appendChild(tr);

    i = 0;
    tr = document.createElement("tr");

    if (!!document._audio.canPlayType) {
      do {
	var td = document.createElement("td");
	var support = document._audio.canPlayType(audioTypes[i]);	
	td.innerHTML = '"' + support + '"';
	if (support === "maybe") {
	    td.className = "true";
	} else if (support === "") {
	    td.className = "false";
	}
	tr.appendChild(td);
      } while (++i < audioTypes.length);
      tbody.appendChild(tr);
    }

}
