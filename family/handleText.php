<?php session_start();

	if (isset($_POST['text']))
	{
		$done = "";
		$lines = file('messages.xml'); 
		$last = sizeof($lines) + 1 ; 
		unset($lines[$last]);
		$txt = $_POST['text'];
		unset($_POST['text']);
		$user = $_SESSION['user'];
		$myfile = fopen("messages.xml", "w") or die("Unable to open file!");
		
		$dateTime = date('h:ia n/j/y', strtotime($today . " -4 hours"));
		for ($i=0; $i<count($lines)-1;$i++)
		{
			$done = $done . $lines[$i];
		}
		$fullText = 
"<note>
<timestamp>$dateTime</timestamp>
<from>$user</from>
<to>The Kids</to>
<message>$txt</message>
</note>
</feed>\n";
		
		
		$fullText = $done . $fullText;
		fwrite($myfile, $fullText);
		fclose($myfile);
		
	}
?>