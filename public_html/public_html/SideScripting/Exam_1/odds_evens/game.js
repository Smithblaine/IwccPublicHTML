"use strict";
var $ = function(id) { return document.getElementById(id); };

var getRandomNumber = function(max) {
    var random;
    if (!isNaN(max)) {
        random = Math.random(); //value >= 0.0 and < 1.0
        random = Math.floor(random * max); //value is an integer between 0 and max - 1
        random = random + 1; //value is an integer between 1 and max
    }
    return random;
};

var playGame = function() 
{ 
    while(youEnter != 999)
    {
        var youEnter = parseInt(prompt("Enter a number between 1 and 5, or 999 to quit"));
        while (youEnter < 0 || youEnter > 5)
        {
        	var checknumb = parseInt(prompt("Please enter a number between 1 and 5, or 999 to quit"));
		youEnter = checknumb;
		if (youEnter == 999)
        	{
            		break;
        	}
        }
        
        var computer = getRandomNumber(5);
        var total = youEnter + computer;
        if(total %2 == 0)
        {
            var eTotal = parseInt($("even").value);
            $("even").value = total + eTotal;
        }
        else
        {
            var oTotal = parseInt($("odd").value);
            $("odd").value = total + oTotal;
        } 
        if (youEnter == 999)
        {
            resetFields();
            $("message").firstChild.nodeValue = "YOU QUIT";
            break; 
        }
        $("player").value = youEnter;
        $("computer").value = computer;
        break;
    }
        if ($("odd").value >= 50)
        {
            resetFields();
            $("message").firstChild.nodeValue = "YOU WIN";
        }
        else if($("even").value >= 50)
        {
            resetFields();
            $("message").firstChild.nodeValue = "YOU LOSE";
        }
  
};


var resetFields = function() {
    $("player").value = "0";
    $("computer").value = "0";
    $("odd").value = "0";
    $("even").value = "0";
    $("message").firstChild.nodeValue = "";
};

window.onload = function() {
    $("play").onclick = playGame;
    $("play").focus();
};