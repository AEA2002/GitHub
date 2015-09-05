var move=0;
var boxNum
var ox = "X";

function choice(bNum) {
	var wins;// gets declared over & over
	boxNum = bNum.slice(3);
	var pick; 
	
	pick = document.getElementById(boxNum).innerHTML;
	if (document.getElementById("status").innerHTML=="Tick Tock Toes"){
		if (pick != "") {
		alert("You can not change this choice!");
		}
	 	else if (ox == "X") {
			document.getElementById(boxNum).innerHTML= ox;
			ox = "O";
			move++;
		}
		else {
			document.getElementById(boxNum).innerHTML = ox;
			ox = "X";
			move++;	
		}
		// 1st 5 moves no need to check so... if( move >= 6 && move <= 9)
		wins = winPick(1, 2, 3);
			
		if (!wins){
			wins = winPick(1, 4, 7);
			if (!wins) {
				wins = winPick(1, 5, 9);
				if (!wins){				
					wins = winPick(2, 5, 8);
					if (!wins){
						winPick(3, 6, 9);
						if (!wins){
							wins = winPick(3, 5, 7);
							if (!wins){
								wins = winPick(4, 5, 6);
								if (!wins){
									wins = winPick(7, 8, 9);
								}
							}
						}
					}
				}
			}
		}
	}
	else {
		alert ("The game is over! Refresh browser to play again!");
	}
	
}
function winPick(a, b, c) {
	var winner = "is the winner! ";
	var noWinner = "Sorry, there is no winner. :-("
	XorO=document.getElementById(boxNum).innerHTML;
		if (document.getElementById(a).innerHTML== XorO && document.getElementById(b).innerHTML== XorO && document.getElementById(c).innerHTML== XorO){	
			document.getElementById("status").innerHTML=XorO + " " + winner + "Boxes " + a + ", " + b + ", & " + c;
			// winner!  format of text changes (win) keep left & right border formatting (lrborder), if any winning box is 2, 5, or 8
			
			//try changing table style to simply
			if(a=="2"){
				document.getElementById(a).className = "win lrborder";
			}
			else {
				document.getElementById(a).className = "win";
			}
			if(b=="2" || b=="5" || b=="8"){
				document.getElementById(b).className = "win lrborder";
			}
			else {
				document.getElementById(b).className = "win";
			}
			if(c=="8"){
				document.getElementById(c).className = "win lrborder";
			}
			else {
				document.getElementById(c).className = "win";
			}
							
			
		}
		// else if? 
		else { 
			if (move == 9) {
				document.getElementById("status").innerHTML= noWinner;	
			}
			
		}
	
	}
