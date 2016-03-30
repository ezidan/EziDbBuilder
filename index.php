<?php include "top_common.php";?>
    		<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">

<div id="IntroDiv">
	<span id="IntroText">
		<h2>Start Here!</h2>
		<form action="intro_frm.php" method="post">
<div class="radio">
  <label>
    <input type="radio" name="StartingOptions" id="option1" name="option1" value="1" checked>
 <b>  Read Help!</b>
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="StartingOptions" id="option2"  name="option2" value="2">
   <b>   Start With New Project</b>
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="StartingOptions" id="option3" name="option3"  value="3">
   <b>   Open An Existing Project</b>
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="StartingOptions" id="option4"  name="option4" value="4">
   <b>   Use an Existing Database</b>
  </label>
</div>

<div id="introcheck">
<button type="submit" class="btn btn-success btn-lg">OK</button>

</div>
</form>
  </span>  	
	</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>	
<?php include "bottom_common.php";?>
