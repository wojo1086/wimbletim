<?php
	$ret = "0";
	if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['type']) && isset($_POST['createStyle']))
	{

		$type = $_POST['type'];
		$createStyle = $_POST['createStyle'];
		$content = $_POST['content'];
		$regTitle = $_POST['title'];
		$title = strtolower(str_replace(' ', '_', $regTitle));
		$text = "<h2>" . $regTitle . "</h2>" . $content . "<div id='submitted'>Posted on: " . date('m/d/Y') . "</div>";
		
		if($type == "creative")
		{
			$type = $type . "/" . $createStyle;
		}
		
		
			$file = fopen("../" . $type . "/" . $title . ".html", "w");
			

			if(fwrite($file, $text))
			{
				$ret = "1";
			}
		
		fclose($file);

	}else{
		$ret = "0";
	}
	echo $ret;
?>