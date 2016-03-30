<?php
function GetError(){
	
}
function ServerInfo($key){
	foreach($_SERVER as $Arr_Key=>$Arr_value)
   {
   	if ($Arr_Key==$key){
   		return $Arr_value;
   	}
   }
}

function check_db_exists($db,$dbname){
$sql =<<<EOF
      SELECT count(*) from databases where db_name='$dbname';
EOF;

   $ret = $db->query($sql);
 while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
 	return $row['count(*)'];
	 
 }
}


?>