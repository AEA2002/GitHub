	function moveIt(){
                var it = document.getElementById("it");

                // Get the X position of "it".
                var x = parseInt(it.style.left);

                // if X position is not a number, make it 0
                if(isNaN(x)){ x = 0; }

                // function to move x by 10px every 100 milliseconds
                setInterval(
                    function(){
                       if( x < screen.width ) {
							x = x + 10;
							it.style.left = x + "px";
						} else{
							x = x - 10;
							it.style.right = x + "px";
						}
					}
                    , 25 );
    }

	function moveAnything(aThing){
		var it = document.getElementById(aThing);
	
		// Get the X position of "it".
		var x = parseInt(it.style.left);
	
		// if X position is not a number, make it 0
		if(isNaN(x)){ x = 0; }
	
		// function to move x by 10px every 100 milliseconds
		setInterval(
			function(){
				if( x < screen.width ) {
							x = x + 10;
							it.style.left = x + "px";
				} else{
					x = x - 10;
					it.style.right = x + "px";						
				}
			}
                    , 25 );
    }
	function moveAnything2(aThing){
		var it=document.getElementById(aThing);
		//Get the x position  
		var x= parseInt(it.style.left); //parses or reads an integer, takes number out of string
		
		// if x is nan, make it 0
		if(isNan(x))
		{x=0;}
		// Schedule a function to move x by 10px every 100 milliseconds
		setInterval(
			function(){
				x= x + 10;
				if(x > screen.width){x=0;}
				it.style.left. = x + "px";		
				}
			, 25
		);
	}	


	function expandObject(thing1) {

		var h = parseInt(thing1.style.height);
		var w = parseInt(thing1.style.width);
		if(isNan(h)){h=1;}
		if(isNan(w)) {? 1 : w}
		
		thing1.style.height = (h * 2) + "px";
		thing1.style.width = (w * 2) + "px";
	}
	
	function contractObject(thing1) {
		var h = parseInt(thing1.style.height);
		var w = parseInt(thing1.style.width);
		if(isNan(h)){h=1;}
		if(isNan(w)) ? 1 : w
		
		thing1.style.height = (h * 2) + "px";
		thing1.style.width = (w * 2) + "px";
	}
	
	function makeNumber(input,dflt){
				var tmp = parseInt(input)
				
				if(isNaN(tmp)){ 
					return dflt;
				} else{
					return tmp;
				}
	}

	function runAway(thing1){
		var increment = 100;
		var thingLeft = makeNumber(thing1.style.left,0);
		var thingWidth = makeNumber(thing1.style.width, 0);
		var thingRight = thingLeft + thingWidth;
		var screenLeft = 0;
		var screenRight = screen.width;
		
		if ((thingRight + increment) > screenRight){
			target = thingLeft - increment;
		} else{
			target = thingLeft + increment;
		}
			thing1.style.left = target + "px";
	}
	
	function runAway2(thing1){
		var increment = 100;
		var thingLeft = makeNumber(thing1.style.left,0);
		var thingWidth = makeNumber(thing1.style.width, 0);
		var thingRight = thingLeft + thingWidth;
		var screenLeft = 0;
		var screenRight = screen.width;
		var target = 0;
			
		if ( ((thingRight + increment) > screenRight) 
				|| ((thingLeft + increment) < screenLeft)){
				increment = (increment * -1);
			} 

			thing1.style.left = target + "px";
	}