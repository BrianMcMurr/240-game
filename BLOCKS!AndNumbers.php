<!DOCTYPE html>
<html>
<head>
	<title>BLOCKS!</title>
	<style>
  		body {
    		margin: 0;
   			overflow: hidden;
  		}
	</style>
</head>
<body>

	<canvas class = "myCanvas">
		<script>
			/**
				This code makes random colored blocks fall from the sky. It was writen by me, Alex Meislich, on 3/5/20 (the day will live in infamy).
				Feel free to edit it and play around with the JavaScript (or JS). 
			*/
			const canvas = document.querySelector('.myCanvas'); //JS witchery to get the canvas set up
			const width = canvas.width = window.innerWidth;	//make the canvas the width and height of the entire page
			const ctx = canvas.getContext('2d');// creates a var that can be writen on
			const height = canvas.height = window.innerHeight;
			const Image = canvas.getContext('2d'); //this Image object is the drawingspace that we will be manipulating
			const fps = 60;
			const gap = 1/fps;
			const speed = 20;
			const moveDist = gap * speed;
			var go; //this variable will be in charge of starting/stopping the animation
			var	blocks = new Array(); //this blocks array will hold our Block objects that are on the screen
			var problems = new Array();
			var counter = 0;
			b1 = new Block(0, "red"); //make some blocks to the array just to flex
			b2 = new Block(300, "blue");
			b3 = new Block(600, "green");
			blocks.push(b1); //add them to the array to flex harder
			blocks.push(b2);
			blocks.push(b3);
			start(); //start the animation

			function getRandomInt(){ //justus
				var min = Math.ceil(0);
				var max = Math.floor(10);
				return Math.floor(Math.random() * (max - min+1)) + min;
			}

			function generateAddition(){ //justus
				return (getRandomInt()) + " + " + (getRandomInt()) ;
			}


			function start(){
				go = setInterval(redraw, gap); //run redraw (I don't know why it doesn't have parameters)  every gap seconds
			}
			function stop(){
				clearInterval(go); //stop the animation
			}
			function redraw(){ //this method redraws the frame
				++counter;
				Image.clearRect(0, 0, canvas.width, canvas.height); //clear the existing frame.
				num = parseInt(Math.random() * 1351, 10); //give me a random int between 0 and 1350
				if(num % 200 === 0){	//if it is evenly divisable by 200 make a new block with a random color and put it on that spot on the x axis
					blocks.push(new Block(num, "random"));
					problems.push(generateAddition());
					console.log(counter);
				}
				for(i = 0; i < blocks.length; i++){ //loop through the blocks array and draw them all. 
					block = blocks[i];
					currProb = problems[i];
					block.draw();
					if(block.getY() > 1000){ //if we find one that isn't on the screen delete it from the front of the array. There isn't any use drawing it or storing it if we can't see it.
						blocks.shift();
						//console.log(blocks.length); //print out the size of the array in the console just to prove that it works.
					}
				}
			}
			function Block(ex, color){ //this is the Blocks class. We will use it for all of our block creating needs. 
				var width = 200; //blocks are this big.
				var height = 200;
				var x = ex; //set the position. (blocks start at the top of the screen by default)
				var y = 0;
				var r; //these vars will store the color
				var g;
				var b;
				var equation = [0,0];
				if(color === "red"){ //set the color
					r = 255;
					g = b =0;
				} else if (color === "green"){
					b = r = 0;
					g = 255;
				}
				else if(color === "blue"){
					r = g = 0;
					b = 255;
				} else { //if the color wasn't red green or blue then we will make a color up.
					r = parseInt(Math.random()*256, 10);//this parseInt casts the double to an int the "10" represents radix 10. Always use radix 10.
					g = parseInt(Math.random()*256, 10);
					b = parseInt(Math.random()*256, 10);
				}
				this.move = function(){
					y = y + moveDist; //move the block
					ctx.fillStyle = 'white';
					ctx.fillRect(x+20,y+75,175,100);
					ctx.fillStyle = 'black';
					ctx.font = '50px serif'; // Sets font size and font type to 
					ctx.fillText(currProb,x +25,y + 150);// what to write and where to write it
				}
				this.getColor = function(){
					return 'rgb(' + r + ',' + g + ',' + b + ')'; //return the color
				}
				this.draw = function(){
					Image.fillStyle = block.getColor();//set the color we need to draw
					Image.fillRect(x, y, width, height); //draw the block
					this.move(); //move the block
				}
				this.getY = function(){ //return the y
					return y;
				}
			}
		</script>
	</canvas>
</body>
</html>
