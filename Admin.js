function randomNumberDoctor(){
						    do{
						    	var rand=Math.random()*1000;
						    	var random=parseInt(rand);
						    }
						    	while(!(random>=100 && random<=110));
						    	document.getElementById('doctorID').value=random;
						    }


function validate(){
		    	var patt='/[a-z}/';
		    	// var patt=[abc];
		    	var x=document.getElementById('name').value;
		    	if(patt.test(x)!=true){
		    		document.getElementById('name').style.color='red';
		    		var r=alert('Invalid name.\nName must not contain numbers!!');
		    		
		    		// var alert =alert('Invalid name.\nName must not contain numbers!!');
		    			if (r==true) {
		    				 alert("Please correct your name");
		    				}
		    			}
		    	}
function normalColor(){
				document.getElementById('name').style.color='black';
}

function submission(){
				alert("You have successfully submitted the information");
}