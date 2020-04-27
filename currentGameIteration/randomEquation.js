	function getRandomInt(){
		var min = Math.ceil(0);
		var max = Math.floor(10);
		return Math.floor(Math.random() * (max - min+1)) + min;
	}
	function generateAddition(){
	return (getRandomInt()) + " + " + (getRandomInt()) ;}

	function generateSubtraction(){
		var a = getRandomInt();
		var b = getRandomInt();
		if (a-b < 0){ //remove if block for negative answers
			if (b-a >= 0){
				var c = a;
				a = b;
				var b = c;
			}
			else{
				generateSubtraction();
			}
		}
		return (a + " - " + b) }
