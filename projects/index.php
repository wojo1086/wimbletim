<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<title>Tim's Portfolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script src="../jquery-popup-overlay-gh-pages/jquery.popupoverlay.js"></script>
<script src="jquery-fieldselection-master/jquery-fieldselection.js"></script>
<script src='bgrins-spectrum-a7bb45b/spectrum.js'></script>
<script src='jquery-linedtextarea.js'></script>
<link rel='stylesheet' href='jquery-linedtextarea.css' />
<link rel='stylesheet' href='bgrins-spectrum-a7bb45b/spectrum.css' />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css" />
<script>
	var CSS = new Array('*{&#13;padding:0;&#13;margin:0;}');
	var lineTracker = "1";
	var splitText = new Array();
</script>
</head>
<body>
	<div id='optionsBar'>
		<ul class='contentSelect'>
			<li>Flow
				<table>
					<tr>
						<td>&#60; a &#62;</td>
						<td>&#60; abbr &#62;</td>
						<td>&#60; address &#62;</td>
						<td>&#60; article &#62;</td>
						<td>&#60; aside &#62;</td>
						<td>&#60; audio &#62;</td>
						<td>&#60; b &#62;</td>
						<td>&#60; bdo &#62;</td>
						<td>&#60; bdi &#62;</td>
						<td>&#60; blockquote &#62;</td>
						<td>&#60; br &#62;</td>
						<td>&#60; button &#62;</td>
					</tr>
					<tr>
						<td>&#60; canvas &#62;</td>
						<td>&#60; cite &#62;</td>
						<td>&#60; code &#62;</td>
						<td>&#60; command &#62;</td>
						<td>&#60; data &#62;</td>
						<td>&#60; datalist &#62;</td>
						<td>&#60; del &#62;</td>
						<td>&#60; details &#62;</td>
						<td>&#60; dfn &#62;</td>
						<td>&#60; div &#62;</td>
						<td>&#60; dl &#62;</td>
						<td>&#60; em &#62;</td>
					</tr>
					<tr>
						<td>&#60; embed &#62;</td>
						<td>&#60; fieldset &#62;</td>
						<td>&#60; figure &#62;</td>
						<td>&#60; footer &#62;</td>
						<td>&#60; form &#62;</td>
						<td>&#60; h1 &#62;</td>
						<td>&#60; h2 &#62;</td>
						<td>&#60; h3 &#62;</td>
						<td>&#60; h4 &#62;</td>
						<td>&#60; h5 &#62;</td>
						<td>&#60; h6 &#62;</td>
						<td>&#60; header &#62;</td>
					</tr>
					<tr>
						<td>&#60; hgroup &#62;</td>
						<td>&#60; hr &#62;</td>
						<td>&#60; i &#62;</td>
						<td>&#60; iframe &#62;</td>
						<td>&#60; img &#62;</td>
						<td>&#60; input &#62;</td>
						<td>&#60; ins &#62;</td>
						<td>&#60; kbd &#62;</td>
						<td>&#60; keygen &#62;</td>
						<td>&#60; label &#62;</td>
						<td>&#60; main &#62;</td>
						<td>&#60; map &#62;</td>
					</tr>
					<tr>
						<td>&#60; mark &#62;</td>
						<td>&#60; math &#62;</td>
						<td>&#60; menu &#62;</td>
						<td>&#60; meter &#62;</td>
						<td>&#60; nav &#62;</td>
						<td>&#60; noscript &#62;</td>
						<td>&#60; object &#62;</td>
						<td>&#60; ol &#62;</td>
						<td>&#60; output &#62;</td>
						<td>&#60; p &#62;</td>
						<td>&#60; pre &#62;</td>
						<td>&#60; progress &#62;</td>
					</tr>
					<tr>
						<td>&#60; q &#62;</td>
						<td>&#60; ruby &#62;</td>
						<td>&#60; s &#62;</td>
						<td>&#60; samp &#62;</td>
						<td>&#60; script &#62;</td>
						<td>&#60; section &#62;</td>
						<td>&#60; select &#62;</td>
						<td>&#60; small &#62;</td>
						<td>&#60; span &#62;</td>
						<td>&#60; strong &#62;</td>
						<td>&#60; sub &#62;</td>
						<td>&#60; sup &#62;</td>
					</tr>
					<tr>
						<td>&#60; svg &#62;</td>
						<td>&#60; table &#62;</td>
						<td>&#60; template &#62;</td>
						<td>&#60; textarea &#62;</td>
						<td>&#60; time &#62;</td>
						<td>&#60; ul &#62;</td>
						<td>&#60; var &#62;</td>
						<td>&#60; video &#62;</td>
						<td>&#60; wbr &#62;</td>
						
					</tr>
				</table>
			</li>
			<li>Sectioning
				<table>
					<tr>
						<td>&#60; article &#62;</td>
						<td>&#60; aside &#62;</td>
						<td>&#60; footer &#62;</td>
						<td>&#60; header &#62;</td>
						<td>&#60; nav &#62;</td>
						<td>&#60; section &#62;</td>
				</table>
			</li>
			<li>Heading</li>
			<li>Phrasing</li>
			<li>Embedded</li>
			<li>Interactive</li>
			<li>Form</li>
		</ul>
	</div>
	
	<div id='leftVertBar'>
		<textarea spellcheck="false"></textarea>
	</div>
	
	<div id='middleContainer'>
		<div id='topMiddleBar'>
<textarea spellcheck="false"></textarea>
		</div>
		
		<div id='bottomMiddleBar'>
			<iframe id='content_iframe'></iframe>
		</div>
	</div>
	
	<div id='rightVertBar'>
		<div id='details'></div>
		
		<input type='button' value='Generate Code' id='generateCode' /><br />
		HTML:
		<textarea id='generatedHTMLCode'></textarea>
		CSS:
		<textarea id='generatedCSSCode'></textarea>
		<input type='button' id='updateCSS' onclick="updateCSS()" value='Add CSS' /><input type='button' id='updateHTML' value='Add HTML' /><input type='button' id='updateBoth' value='Add Both' /><br />
		
		<input type='button' id='updateFrame' value='Update Output' />
	</div>
	
	
<script>
$(function(){
	// Initialize the plugin
   // $('#layout_popup').popup({
	//	opacity: 0.7  
	//});
	
	$("#topMiddleBar textarea").linedtextarea(
		{selectedLine: 1}
	);

	$('#leftVertBar textarea').html(CSS);
	$('#topMiddleBar textarea').html("<!DOCTYPE HTML>&#13;<html lang='en'>&#13;<head>&#13;<meta charset='UTF-8'>&#13;</head>&#13;<body>&#13;Hello&#13;</body>&#13;</html>");
	
	update_iFrame();

	$('.lineno').on('click', function(){
		$('.lineno').removeClass('lineselect');
		$(this).addClass('lineselect');
		lineTracker = $(this).html();
	});
	
	$('.contentSelect table td').on('click', function(){
		var tdName = $(this).text();
		var link = tdName.substring(2, tdName.length-2);
		$('#details').load('j_includes/' + link + '.html');
	});
	
	
	$('#updateFrame').on('click', function(){
		update_iFrame();
	});
	
	$('#updateCSS').on('click', function(){
		updateCSS();
	});
	
	$('#updateHTML').on('click', function(){
		updateHTML();
	});
	
	$('#updateBoth').on('click', function() {
		updateHTML();
		updateCSS();
	});
	
	$('#generateCode').on('click', function(){
		if ($('#details').html() != "")
		{
			switch ($('#details table th').text())
			{
				case 'Header':
					headerChange();
					break;
				default:
					alert('No!');
			}
		}
	});
	
	
	
	
	
	
	function updateHTML()
	{
		if ($('#generatedHTMLCode').html() != "")
		{
			$('#topMiddleBar textarea').focus();
			$('#topMiddleBar textarea').insertAtCursor($('#generatedHTMLCode').text());
				
		}
	}
	
	function updateCSS()
	{
		if ($('#generatedCSSCode').html() != "")
		{
			$('#leftVertBar textarea').append("&#13;&#13;" + $('#generatedCSSCode').html());
			update_iFrame();
		}
	}
	
	
	
	function update_iFrame()
	{
		var iframe = document.getElementById('content_iframe');
		iframe = (iframe.contentWindow) ? iframe.contentWindow : (iframe.contentDocument.document) ? iframe.contentDocument.document : iframe.contentDocument;
		iframe.document.open();
		iframe.document.write("");
		iframe.document.close();
		var textHTML = convert($('#topMiddleBar textarea').val());
		var splitHTML = textHTML.split("</head>", 2);
		var textCSS = $('#leftVertBar textarea').val();
		var totalHTMLCSS = splitHTML[0] + "<style>" + textCSS + "</style></head>" + splitHTML[1];
		iframe.document.open();
		iframe.document.write(totalHTMLCSS);
		iframe.document.close();
		
	}
	
	function convert(string)
	{
		string = string.replace(/&lt;/g, "<");
		string = string.replace(/&gt;/g, ">");
		return string;
	}
	
	
	
	
	
	
	
	jQuery.fn.extend({
	insertAtCursor: function(myValue) {
		return this.each(function(i) {
			if (document.selection) {
				//For browsers like Internet Explorer
				this.focus();
				sel = document.selection.createRange();
				sel.text = myValue;
				this.focus();
			}
			else if (this.selectionStart || this.selectionStart == '0') {
				//For browsers like Firefox and Webkit based
				var startPos = this.selectionStart;
				var endPos = this.selectionEnd;
				var scrollTop = this.scrollTop;
				this.value = this.value.substring(0, startPos) + myValue + 
						    this.value.substring(endPos,this.value.length);
				this.focus();
				this.selectionStart = startPos + myValue.length;
				this.selectionEnd = startPos + myValue.length;
				this.scrollTop = scrollTop;
			} else {
				this.value += myValue;
				this.focus();
			}
		})
	}
})
});
</script>
</body>
</html>