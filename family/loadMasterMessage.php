<?php session_start();
	

	$xml=simplexml_load_file("messages.xml") or die("Error: Cannot create object");
	foreach($xml->children() as $note){
		if ($note->from == $_SESSION['currentUser'] || $note->to == $_SESSION['currentUser'])
		{
			if ($note->from == $_SESSION['currentUser'])
			{
				echo "
				<div id='userFeed'>
					<div id='messageWhole'>
						<div id='userMessage'>" . $note->message . "</div>
						<div id='userTime'>" . $note->timestamp . "</div>
					</div>
				</div>";
			}else{
				echo "
				<div id='userFeed'>
					<div id='userMessageWhole'>
						<div id='userMessage'>" . $note->message . "</div>
						<div id='userTime'>" . $note->timestamp . "</div>
					</div>
				</div>";
			}
		}
	}
?>