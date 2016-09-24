<?php session_start();
	$xml=simplexml_load_file("messages.xml") or die("Error: Cannot create object");
	foreach($xml->children() as $note){
		if ($note->from == $_SESSION['user'] || $note->to == $_SESSION['user'])
		{
			if ($note->from == $_SESSION['user'])
			{
				echo "
				<div id='userFeed'>
					<div id='userMessageWhole'>
						<div id='userMessage'>" . $note->message . "</div>
						<div id='userTime'>" . $note->timestamp . "</div>
					</div>
				</div>";
			}else{
				echo "
				<div id='userFeed'>
					<div id='messageWhole'>
						<div id='userMessage'>" . $note->message . "</div>
						<div id='userTime'>" . $note->timestamp . "</div>
					</div>
				</div>";
			}
		}
	}
?>