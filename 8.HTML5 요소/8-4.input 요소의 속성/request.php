
<!DOCTYPE html>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-86934860-1', 'auto');ga('send', 'pageview');</script>
<html lang="ko">
<head>
    <meta content="IE=11.0000" http-equiv="X-UA-Compatible" />
    <title>&copy;TCP-tryWWW</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="jquery-1.12.0.min.js"></script>
    <script src="script/tcpscript_common.js"></script>
    <link href="try.css" rel="stylesheet" />
    <!--[if lt IE 8]>
    <style>
    .textareacontainer, .iframecontainer {width:48%;}
    .textarea, .iframe {height:800px;}
    #textareaCode, #iframeResult {height:700px;}
    .menu img {display:none;}
    </style>
    <![endif]-->

    <link rel="stylesheet" href="codemirror/lib/codemirror.css" />
    <link rel="stylesheet" href="codemirror/theme/3024-day.css" />
    <link rel="stylesheet" href="codemirror/theme/3024-night.css" />
    <link rel="stylesheet" href="codemirror/theme/abcdef.css" />
    <link rel="stylesheet" href="codemirror/theme/ambiance.css" />
    <link rel="stylesheet" href="codemirror/theme/base16-dark.css" />
    <link rel="stylesheet" href="codemirror/theme/bespin.css" />
    <link rel="stylesheet" href="codemirror/theme/base16-light.css" />
    <link rel="stylesheet" href="codemirror/theme/blackboard.css" />
    <link rel="stylesheet" href="codemirror/theme/cobalt.css" />
    <link rel="stylesheet" href="codemirror/theme/colorforth.css" />
    <link rel="stylesheet" href="codemirror/theme/dracula.css" />
    <link rel="stylesheet" href="codemirror/theme/duotone-dark.css" />
    <link rel="stylesheet" href="codemirror/theme/duotone-light.css" />
    <link rel="stylesheet" href="codemirror/theme/eclipse.css" />
    <link rel="stylesheet" href="codemirror/theme/elegant.css" />
    <link rel="stylesheet" href="codemirror/theme/erlang-dark.css" />
    <link rel="stylesheet" href="codemirror/theme/hopscotch.css" />
    <link rel="stylesheet" href="codemirror/theme/icecoder.css" />
    <link rel="stylesheet" href="codemirror/theme/isotope.css" />
    <link rel="stylesheet" href="codemirror/theme/lesser-dark.css" />
    <link rel="stylesheet" href="codemirror/theme/liquibyte.css" />
    <link rel="stylesheet" href="codemirror/theme/material.css" />
    <link rel="stylesheet" href="codemirror/theme/mbo.css" />
    <link rel="stylesheet" href="codemirror/theme/mdn-like.css" />
    <link rel="stylesheet" href="codemirror/theme/midnight.css" />
    <link rel="stylesheet" href="codemirror/theme/monokai.css" />
    <link rel="stylesheet" href="codemirror/theme/neat.css" />
    <link rel="stylesheet" href="codemirror/theme/neo.css" />
    <link rel="stylesheet" href="codemirror/theme/night.css" />
    <link rel="stylesheet" href="codemirror/theme/panda-syntax.css" />
    <link rel="stylesheet" href="codemirror/theme/paraiso-dark.css" />
    <link rel="stylesheet" href="codemirror/theme/paraiso-light.css" />
    <link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css" />
    <link rel="stylesheet" href="codemirror/theme/railscasts.css" />
    <link rel="stylesheet" href="codemirror/theme/rubyblue.css" />
    <link rel="stylesheet" href="codemirror/theme/seti.css" />
    <link rel="stylesheet" href="codemirror/theme/solarized.css" />
    <link rel="stylesheet" href="codemirror/theme/the-matrix.css" />
    <link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css" />
    <link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css" />
    <link rel="stylesheet" href="codemirror/theme/ttcn.css" />
    <link rel="stylesheet" href="codemirror/theme/twilight.css" />
    <link rel="stylesheet" href="codemirror/theme/vibrant-ink.css" />
    <link rel="stylesheet" href="codemirror/theme/xq-dark.css" />
    <link rel="stylesheet" href="codemirror/theme/xq-light.css" />
    <link rel="stylesheet" href="codemirror/theme/yeti.css" />
    <link rel="stylesheet" href="codemirror/theme/zenburn.css" />

    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="codemirror/mode/xml/xml.js"></script>
    <script src="codemirror/mode/javascript/javascript.js"></script>
    <script src="codemirror/mode/css/css.js"></script>
    <script src="codemirror/mode/vbscript/vbscript.js"></script>

    <script src="codemirror/addon/selection/active-line.js"></script>
    <script src="codemirror/addon/edit/matchbrackets.js"></script>

    <script type="text/javascript">
	    var curorientationMode = undefined;
		var prevOrientationMode = undefined;

        function submitTryit() {
            document.getElementById("iframewrapper").innerHTML = "";

            var text = editor.getDoc().getValue();
            if(text === undefined || text === null) { return; }
        
            text = text.trim();

            if(typeof(text) == "string" && text.length > 0) {
                var ifr = document.createElement("iframe");
                ifr.setAttribute("frameborder", "0");
                ifr.setAttribute("id", "iframeResult");                
                document.getElementById("iframewrapper").appendChild(ifr);
                var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
                ifrw.document.open();
                ifrw.document.write(text);
                ifrw.document.close();
            }
        }

		var mode_automatic = 1, mode_horizontal = 2, mode_vertical = 3, mode_null = 0;
		var modeOrientation = mode_automatic;
		var curOrientation = mode_null;

		function setOrientation(mode) {
			var width, height;
			modeOrientation = mode;

			if(modeOrientation == mode_horizontal){
				curOrientation = mode;
				document.getElementById("stackA").style.background = "transparent";
				document.getElementById("stackH").style.background = "#999999";
				document.getElementById("stackV").style.background = "transparent";
			}else if(modeOrientation == mode_vertical){
				curOrientation = mode;
				document.getElementById("stackA").style.background = "transparent";
				document.getElementById("stackH").style.background = "transparent";
				document.getElementById("stackV").style.background = "#999999";
			}else{
				document.getElementById("stackA").style.background = "#999999";
				document.getElementById("stackH").style.background = "transparent";
				document.getElementById("stackV").style.background = "transparent";

				width = $(window).width();
				height = $(window).height();

				if(width >= height){
					curOrientation = mode_vertical;
				}else{
					curOrientation = mode_horizontal;
				}
			}

			if (curOrientation == mode_horizontal) {
				document.getElementById("textareacontainer").style.height = "50%";
				document.getElementById("iframecontainer").style.height = "50%";
				document.getElementById("textareacontainer").style.width = "100%";
				document.getElementById("iframecontainer").style.width = "100%";
			} else if(curOrientation == mode_vertical){
				document.getElementById("textareacontainer").style.height = "100%";
				document.getElementById("iframecontainer").style.height = "100%";
				document.getElementById("textareacontainer").style.width = "50%";
				document.getElementById("iframecontainer").style.width = "50%";
			}
		}

		function restack(mode){
			setOrientation(mode);
			resizeEditor();
		}

    </script>

    <meta name="GENERATOR" content="MSHTML 11.00.9600.18161" />
</head>
<body>
    <!-- TryitLeaderboard -->
    <img src="img/img_TCP_logo.png" id="logo" />
    <div id="tryitLeaderboard">
        <div id=""></div>
    </div>
    <!-- TryitLeaderboard -->

    <!-- topnav -->
    <div class="trytopnav">
        <ul class="w3-navbar w3-light-grey" style="border-top:1px solid #f1f1f1;">
            <li style="width:auto !important;float:left;">
                <span style="padding:8px 10px 8px 10px;display:block" id="navtxt">코드:</span>
            </li>

            <li class="stack" style="width:auto !important;float:left;">
                <button title="Automatic" onclick="restack(mode_automatic)" id="stackA" class=" ">
                    <img src="./img/stack_automatic.png" />
                </button>
            </li>

            <li class="stack" style="width:auto !important;float:left;">
                <button title="Vertically" onclick="restack(mode_vertical)" id="stackV" class=" ">
                    <img src="./img/stack_vertically.png" />
                </button>
            </li>

            <li class="stack" style="width:auto !important;float:left;">
                <button title="Horizontally" onclick="restack(mode_horizontal)" id="stackH" class=" ">
                    <img src="./img/stack_horizontally.png" />
                </button>
            </li>

            <li style="width:auto !important;float:left; text-align:">
                <!-- <button class="w3-green w3-hover-white w3-hover-text-green" onclick="submitTryit()">See Result &#187;</button> -->
                <button class="seeResult" onclick="submitTryit()" type="button">결과보기 &raquo;</button>
            </li>

            <!--
			<li class="w3-right w3-hide-small">
				<span style="padding:8px 16px;display:block">
					Try it Yourself - &#169; <a href="http://www.w3schools.com/" class="w3schoolslink">w3schools.com</a>
				</span>
			</li>  
			-->
        </ul>
    </div>
    <!-- topnav -->

    <!-- container -->
    <div class="container">
        <div class="textareacontainer" id="textareacontainer">
            <div class="textarea">
                <div class="textareawrapper" style="background-color:white;">
                    <!-- textarea container -->
                    <textarea class="code_input" id="textareaCode" name="textareaCode" spellcheck="false" wrap="logical" autocomplete="off">&lt;!DOCTYPE html&gt;
&lt;html lang="ko"&gt;

&lt;head&gt;
	&lt;meta charset="UTF-8"&gt;
	&lt;title&gt;HTML5 Input Types&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;

	&lt;h1&gt;number 타입을 이용한 숫자 입력&lt;/h1&gt;

	&lt;form action="/examples/media/request.php"&gt;
		여러분이 가장 좋아하는 숫자는 몇인가요?&lt;br&gt;
		(단, 1부터 9까지에서 골라주세요!)&lt;br&gt;&lt;br&gt;
		&lt;input type="number" name="favnum" min="1" max="9"&gt;
		&lt;input type="submit" value="전송"&gt;
	&lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;</textarea>
                    <form style="margin: 0px; display: none;" autocomplete="off">
                        <input name="code" id="code" type="hidden" />
                        <input name="bt" id="bt" type="hidden" />
                    </form>
                </div>
            </div>
        </div>
        <div class="iframecontainer" id="iframecontainer">
            <div class="iframe">
                <!--
                <div style="overflow: auto;">
                    <div class="headerText2">
						Test of Coding Professional  - &copy; <a href="http://www.tcpschool.com/">TCP</a>
					</div>
                </div>
				-->
                <div class="iframewrapper" id="iframewrapper"></div>
            </div>
        </div>
        <!--
        <div class="footerText">
            Test of Coding Professional  - &copy; <a href="http://www.tcpschool.com/">TCP</a>
        </div>
		-->
    </div>
    <!-- container -->

    <script>
      // Define an extended mixed-mode that understands vbscript and
      // leaves mustache/handlebars embedded templates in html mode
      var mixedMode = {
        name: "htmlmixed",
        scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                       mode: null},
                      {matches: /(text|application)\/(x-)?vb(a|script)/i,
                       mode: "vbscript"}]
      };

	  var editor = CodeMirror.fromTextArea(document.getElementById("textareaCode"), {
		mode: mixedMode,
		lineNumbers: true,
		styleActiveLine: true,
		matchBrackets: true,
		theme: "default"
	  });

		if(isMobile()){
			editor.setOption("lineNumbers", false);
		}

		function resizeEditor() {
			if(modeOrientation == mode_automatic){
				if(!isAndroid()){
					setOrientation(modeOrientation);  // 안드로이드가 아닌 경우
				}else{
					// 안드로이드의 경우 오리엔테이션이 달라진 경우만 체크
					if(	prevOrientationMode != curOrientationMode){
						setOrientation(modeOrientation);
						prevOrientationMode = curOrientationMode;
					}
				}
			}
			editor.setSize($('.textareawrapper').width(), $('.textareawrapper').height());
		};

		$(window).resize(resizeEditor);
		$(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange MSFullscreenChange', resizeEditor);

        // mobile orientation change
        function orientationChange(){
			curOrientationMode = doOnOrientationChange();
        };
         // listen for orientation change
        window.onorientationchange = orientationChange;

        //set initially
        orientationChange();
		resizeEditor();
		submitTryit();

    </script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
