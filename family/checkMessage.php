<?php session_start();
	
	$size = file('messages.xml');
	if (isset($_SESSION['sizeOfFile']))
	{
		if (sizeof($size) > $_SESSION['sizeOfFile'])
		{
			$xml=simplexml_load_file("messages.xml") or die("Error: Cannot create object");
			foreach($xml->children() as $note){
				print $_SESSION['sizeOfFile'];
			}
		}
		$_SESSION['sizeOfFile'] = sizeof($size);
		
	}else{
		$_SESSION['sizeOfFile'] = sizeof($size);
	}

?>