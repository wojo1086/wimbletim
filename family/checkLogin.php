<?php session_start();

	if (isset($_SESSION['error']))
	{
		unset($_SESSION['error']);
	}
	
	if (isset($_POST['familySubmit']))
	{
		unset($_POST['familySubmit']);
		if (isset($_POST['person']))
		{
			if($_POST['familyPass'] == 'Wojo!')
			{
				unset($_POST['familyPass']);
				$_SESSION['user'] = $_POST['person'];
				header('Location: viewing.php');
			}else{
				$_SESSION['error'] = 'The password you entered was incorrect.';
				header('Location: index.php');
			}
		}else{
			$_SESSION['error'] = 'You need to pick a person.';
		header('Location: index.php');
		}
	}else{
		$_SESSION['error'] = 'You need to be logged in.';
		header('Location: index.php');
	}

?>