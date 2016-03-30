// Empty JS for your own code to be here
function set_Iframe(Link){ 
    document.getElementById('main_iframe').src = Link;	
}

function hasWhiteSpace(id) {
	
	var s=  document.getElementById(id).value;
  if (/\s/g.test(s)==true) 
  {
  	$('#NOspaces').modal('show');
  	//alert ("Database Name cannot contain any spaces");
  	document.getElementById(id).value="";
  }
  
}