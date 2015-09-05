var guesses=0;
var guess;
var hits=0;
var location1 = 4;
var location2 = 5;
var location3 = 6;
var isSunk=false;

while(isSunk == false) {
	guess = prompt ("What is your wish? \n Enter a number: 0-6");
	guesses = guesses + 1;
	if (guess==location1 || guess==location2 || guess==location3) {
		alert("It's a hit!");
		hits = hits + 1;
		if (hits == 3) {
			alert("You sunk my battleship!");
			isSunk = true;
		}
	}
	else {
		alert("It's a miss!");
	}
}