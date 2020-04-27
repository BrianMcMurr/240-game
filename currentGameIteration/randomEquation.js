function getRandomInt(){ 
	var min = Math.ceil(0);
	var max = Math.floor(10);
return Math.floor(Math.random() * (max - min+1)) + min;
}

function generateAddition(){ 
	return (getRandomInt()) + " + " + (getRandomInt()) ;
}

function generateSubtraction(){
	return (getRandomInt()) + " - " + (getRandomInt()) ;}
