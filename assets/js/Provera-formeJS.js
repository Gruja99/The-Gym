
// var form
function initiate()
	{
		var button = document.getElementById("prijaviSE");
		button.addEventListener("click", sendit, false);
		var form = document.querySelector("form[name='prijava']");
		form.addEventListener("invalid", validation, true);
		form.addEventListener("input", checkval, false);
	}


function validation(e)
    {
	    var elem = e.target;
	    elem.style.background ='#FFDDDD';
    }

function sendit()
    {
	    var valid = form.checkValidity(); 
	    if(valid)
		    {
			    form.submit();
		    }
    }

function checkval (e)
    { 
	    var elem = e.target;
	    if(elem.validity.valid)
		    {
			    elem.style.background ='#FFFFFF';
		    }
	    else
		    {
			    elem.style.background ='#FFDDDD';
		    }
    }

addEventListener("load", initiate, false);
