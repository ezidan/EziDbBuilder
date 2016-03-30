<?php
//this is just a redirection page depends on the user choice from the intro page
$option= $_POST["StartingOptions"];

switch($option){
	case 1:
		header("Location: help.php");
	Break;	
	
		case 2:
		header("Location: new_project.php");
	Break;
	
			case 3:
		header("Location: existing_project.php");
	Break;
			case 4:
		header("Location: existing_db.php");
	Break;
}


?>