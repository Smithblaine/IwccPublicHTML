"use strict"
var $ = function(id)
{	
	return document.getElementById(id);
}

function startTime() 
{
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var y = today.getFullYear().toString().substring(2);
    var M = today.getMonth() + 1;
    var d = today.getDate();

    m = checkTime(m);
    s = checkTime(s);
	function checkTime(i) 
	{
		if (i < 10) {i = "0" + i};  
		return i;
	}
			
	var output = $("time");
	
	if ( h > 12 )
	{
		h -= 12;
		if (h == 0){h = 12;}
		output.innerHTML = M + "/" + d + "/" + y + "<br>" + h + ":" + m + ":" + s + "PM";
	}
	else
	{
		if (h == 0){h = 12;}
		output.innerHTML = M + "/" + d + "/" + y + "<br>" + h + ":" + m + ":" + s+ "AM";
	}
    setTimeout(startTime, 1000);
    
}

window.onload = startTime();
