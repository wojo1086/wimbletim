<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TA Comps - Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="quill/quill.base.css" />
<link rel="stylesheet" type="text/css" href="quill/quill.snow.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<div id="mainWrapper" class='adminMain'>
		<h1>Admin Page</h1>
			<p class='answer'></p>
			<p>Title</p>
			<input type='text' name='title' id='adminTitle' />
			<p>Content</p>
			<div id="full-toolbar" class="toolbar">
				<span class="ql-format-group">
					<select title="Size" class="ql-size">
						<option value="10px">Small</option>
						<option value="13px" selected="">Normal</option>
						<option value="18px">Large</option>
						<option value="32px">Huge</option>
					</select>
				</span>
				<span class="ql-format-group">
					<span title="Bold" class="ql-format-button ql-bold"></span>
					<span class="ql-format-separator"></span>
					<span title="Italic" class="ql-format-button ql-italic"></span>
					<span class="ql-format-separator"></span>
					<span title="Underline" class="ql-format-button ql-underline"></span>
					<span class="ql-format-separator"></span>
					<span title="Strikethrough" class="ql-format-button ql-strike"></span>
				</span>
				<span class="ql-format-group">
					<select title="Text Color" class="ql-color">
						<option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)" selected=""></option>
						<option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
						<option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
						<option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
						<option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
						<option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
						<option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
						<option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)"></option>
						<option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
						<option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
						<option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
						<option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
						<option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
						<option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
						<option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
						<option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
						<option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
						<option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
						<option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
						<option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
						<option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
						<option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
						<option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
						<option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
						<option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
						<option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
						<option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
						<option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
						<option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
						<option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
						<option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
						<option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
						<option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
						<option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
						<option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
					</select>
				<span class="ql-format-separator"></span>
					<select title="Background Color" class="ql-background">
						<option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)"></option>
						<option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
						<option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
						<option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
						<option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
						<option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
						<option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
						<option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)" selected=""></option>
						<option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
						<option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
						<option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
						<option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
						<option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
						<option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
						<option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
						<option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
						<option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
						<option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
						<option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
						<option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
						<option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
						<option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
						<option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
						<option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
						<option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
						<option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
						<option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
						<option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
						<option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
						<option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
						<option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
						<option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
						<option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
						<option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
						<option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
					</select>
				</span>
				<span class="ql-format-group">
					<span title="List" class="ql-format-button ql-list"></span>
					<span class="ql-format-separator"></span>
					<span title="Bullet" class="ql-format-button ql-bullet"></span>
					<span class="ql-format-separator"></span>
					<select title="Text Alignment" class="ql-align">
						<option value="left" label="Left" selected=""></option>
						<option value="center" label="Center"></option>
						<option value="right" label="Right"></option>
						<option value="justify" label="Justify"></option>
					</select>
				</span>
				<span class="ql-format-group">
					<span title="Link" class="ql-format-button ql-link"></span>
				</span>
			</div>

			<div id='editor'></div>

			<p>Writing Style</p>

			<select class='adminSelectStyle'>
				<option value='creative'>Creative</option>
				<option value='technical'>Technical</option>
				<option value='advertising'>Advertising</option>
			</select>

			<select class='adminCreateType'>
				<option value='short-stories'>Short Story</option>
				<option value='poetry'>Poetry</option>
			</select>

			<button class='adminSubmit'>Submit</button>

	</div>


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="quill/quill.min.js"></script>
<script>
$(document).ready(function(){

	var fullEditor = new Quill('#editor', {
		  modules: {
		    'toolbar': { container: '#full-toolbar' },
		    'link-tooltip': true
		  },
		  theme: 'snow'
		});

	$("select.adminSelectStyle").on("input", function(){
		if($(this).val() != "creative")
		{
			$("select.adminCreateType").hide();
		}else{
			$("select.adminCreateType").show();
		}
	});

	$('button.adminSubmit').on('click', function(){
		var title = $('#adminTitle').val();
		var content = fullEditor.getHTML();
		var type = $('select.adminSelectStyle').val();
		var createStyle = $('select.adminCreateType').val();
		$('p.answer').text("");
		$('#editor div').text("");
		$("#adminTitle").val("");

		$.ajax(
		{
			type: 'post',
			url: 'php-handling/admin-check.php',
			data: {
				title: title,
				content: content,
				type: type,
				createStyle: createStyle},

			success: function(data){
				switch(data)
				{
					case "0":
						$("p.answer").text("There was an issue saving the post.");
						break;
					case "1":
						$("p.answer").text("Save successful.");
						break;
					default:
						console.log(data);
						break;
				}
			},
			error: function(err){
				console.log(err);
			}
		});
	});
});
</script>
</body>
</html>