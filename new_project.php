<?php include "top_common.php";?>
<?php include "menu.php";?>

<?php 
if (isset($_POST["dbname"]) && isset($_POST["dbalias"])){
	$db_Name=$_POST["dbname"];
	$db_Alias=$_POST["dbalias"];
	$errors=0;

if (check_db_exists($db,$_POST["dbname"])==0){$errors=0;}else {$errors=2;}
}else {$errors=1;}
 
if ($errors==0){
	//no errors, so Insert
	$sql =<<<EOF
      INSERT INTO databases (db_name,db_alias)
      VALUES ('$db_Name','$db_Alias');

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {

?>
     
	<div class="row">
		<div class="col-md-2">
<a href="#" class="btn btn-primary btn-lg" id="dbName" onclick="set_Iframe('db_info.php?dbname=<?php echo $db_Name;?>');"><?php echo $db_Name;?></a>			

<div id="tables">
	
</div>	

		</div>
		<div class="col-md-10">
			<iframe width="100%" height="100%" frameborder="0" id="main_iframe"></iframe>
		</div>
	</div>	  
	  
	  
	  
   <?php }

}else if ($errors==1){?>
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
  <div class="form-group">
    <label for="dbname">Database Name</label>
    <input type="text" class="form-control" id="dbname" name="dbname" onchange="hasWhiteSpace('dbname')" required>
  </div>
  <div class="form-group">
    <label for="dbalias">Database Alias</label>
    <input type="text" class="form-control" id="dbalias" name="dbalias">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>	
	
	
<?php }else if ($errors==2){?>
<div class="alert alert-danger" role="alert">
 <p>Database name already exists</p>
 <a href="new_project.php" class="btn btn-danger">Back</a>
</div>	
	
<?php }


?>


<?php include "bottom_common.php";?>