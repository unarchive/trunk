//FUNCTION Display Answer Box
// shows the E-learning Answer Box
//PARAMETERS: DIV  AnswerBox ID hide number
function DisplayAnswerBox(DIVnum){
	
	//get the Element for the AnswerBox Hide ID
	var MenuList = document.getElementById("Hide"+DIVnum);
	
	// will store the current display style
	var style = "";
	
	//get the display style 
	// checking to see if we are doing this in IE or FF
	if (MenuList.currentStyle){ //IE
		style = MenuList.currentStyle['display'];
	}else if (window.getComputedStyle){ //W3C - FF
		style = document.defaultView.getComputedStyle(MenuList,null).getPropertyValue('display');
	}
	// If hidden then set style to display the Menu List and change the arrow image to Arrow Down
	if (style == 'none'){
		MenuList.style.display = 'block';
		
	}else if(style == 'block'){
	// If display then set style to hide the Menu List and change the arrow image to Arrow Right
		MenuList.style.display = 'none';
	}
	
	
}

//FUNCTION Display ALL Answer Box
// shows all the E-learning Answer Box on a page
//PARAMETERS: The number of DIV  AnswerBox on that page
function DisplayALLAnswerBox(BoxCount){
	var DIVnum = 1;
	
	while (DIVnum <= BoxCount ){
		
		//get the Element for the AnswerBox Hide ID
		var MenuList = document.getElementById("Hide"+DIVnum);
		
		// will store the current display style
		var style = "";
		
		//get the display style 
		// checking to see if we are doing this in IE or FF
		if (MenuList.currentStyle){ //IE
			style = MenuList.currentStyle['display'];
		}else if (window.getComputedStyle){ //W3C - FF
			style = document.defaultView.getComputedStyle(MenuList,null).getPropertyValue('display');
		}
		// If hidden then set style to display the Menu List and change the arrow image to Arrow Down
		if (style == 'none'){
			MenuList.style.display = 'block';
			
		}else if(style == 'block'){
		// If display then set style to hide the Menu List and change the arrow image to Arrow Right
			MenuList.style.display = 'none';
		}
	
	DIVnum ++;
		
	}
}