<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN-PAGE</title>
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@600&display=swap" rel="stylesheet">


<style type="text/css">
	body{
		padding: 0;
		margin: 0;
		background-image: url('login1.jpg') ;
		background-repeat: no-repeat;
		background-size: cover;

	}

	.header{
		/*padding: 0;
		margin: 0;*/

		
		font-size: 25px;
		border: 2px solid ;
		height: 47px;
		font-family:  'Grandstander', cursive;
		background-color: #13e3edc7;
		line-height: 7px;
		text-align: center;


	}
	

	
	.lform{
		box-sizing: border-box;
		box-shadow: 12px 10px black;
		margin-left: 40%;
		border: 4px solid #11b61e;
		width: 415px;
		height:300px;
		line-height: 32px;
		padding-left: 10px; 
		background-color: #0349e58c;
	}
	
	#lbox{
		margin: 72px 188px 29px 33px

	}
	@media(max-width:1024px )
	{
		body{
			background-size: auto;
		}

		.lbox{


		}
	}

</style>
</head>
<body>
	<!--heading-->
<div class="header">
	<h1 >Welcome To Notes-Spot</h1>
</div>
<div id="lbox">

<!--login form-->
<div class="lform" >

         <div>
	           <h1 style="text-align: center;"><strong><u>LOGIN</u></strong></h1>
         </div>

             <div>
	
	                 <form style="text-align: center;">
		             <!-- USERNAME:<input type="text" name="username"><br><br> -->
		             <strong> USERNAME:</strong>&nbsp<input type="text" name="username" placeholder="Enter username here"><br><br>
		                 <strong>PASSWORD:</strong>&nbsp<input   type="password" name="pass" placeholder="Enter password here"><br><br>
		                 <button style="font-weight: bold; font-size: 28px" onclick="btn()">Enter</button>
		               <!--  <input  style="font-weight: bold; font-size: 28px" onclick="btn()""  type="button" name="btn" value="Enter"> -->
	                 </form>
             </div>
</div>
</div>
<script type="text/javascript">
	function btn()
	{
		alert("Welcome to this wolrd");

	}
	
	

   


</script>


</body>
</html>