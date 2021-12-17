<?php
$score=$_REQUEST["score"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <canvas width="288" height="512"></canvas>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<script>
var canvas = document.querySelector('canvas');
var c=canvas.getContext('2d');
var bg=new Image();
var pipeNorth=new Image();
var pipeSouth=new Image();
var fg=new Image();
var bird=new Image();
bg.src="img/bg.png";
pipeNorth.src="img/tube1.png";
pipeSouth.src="img/tube2.png";
fg.src="img/ground.png";
bird.src="img/bird_sing.png";
//intialising variable
class Parameters{
	constructor(height,width){
	this.height=height;
	this.width=width;
}
}
var pipenorth=new Parameters(320,52);
var pipesouth=new Parameters(320,52);
var background=new Parameters(384,228);
var floorground=new Parameters(112,336);
var flappy=	new Parameters(26,36);
var gap=85;
var constant=pipenorth.height+gap;
var bx=10;
var by=100;
var gravity=1.5;
var score =0;
    document.addEventListener('keydown',run);
	    function run(e){
	    if(e.which===38){
			by-=25;
		}
		if(e.which===32){
			by-=35;
		}
	}
	
	var pipe=[];
	pipe[0] = {
		x : canvas.width,
		y : -100
	}
	function draw(){
	c.drawImage(bg,0,20);
	for( var i=0;i<pipe.length;i++){
	c.drawImage(pipeNorth,pipe[i].x,pipe[i].y);
	c.drawImage(pipeSouth,pipe[i].x,(pipe[i].y+constant));
    pipe[i].x--;
    if(pipe[i].x==125){
    	pipe.push({
    		x:canvas.width,
    		y:Math.floor(Math.random()*pipenorth.height)-pipenorth.height
    	});
   }
    if(bx+flappy.width>=pipe[i].x && bx<=pipe[i].x+pipenorth.width&& (by<=pipe[i].y+pipenorth.height || by+flappy.height>=pipe[i].y+constant) 
    	|| by+flappy.height>=background.height-floorground.height+100)
    {
		//alert('Game Over');
		var request = new XMLHttpRequest();
		request.onreadystatechange=function(){
		if(request.readystate==4 && request.status==200){
		request.open("GET", "/resources/views/game.blade.php?score="+score, true);
	    request.setRequestHeader("Content-type", "application/json");
        request.send();	
		}
		}
		//window.location.replace("http://www.w3schools.com");
	}	
    if(pipe[i].x==5){
    	score++;
    }
	}
	c.drawImage(fg,0,400);
	c.drawImage(bird,bx,by);
	requestAnimationFrame(draw);
	by+=gravity;
	c.fillStyle="#000";
	c.font="20px Verdana";
	c.fillText("Score : "+score,10,canvas.height-20);
}
draw();
</script>
</body>
</html>