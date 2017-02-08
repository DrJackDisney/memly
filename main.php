<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="img/mini-logo.png">
		<title>Memly</title>

		<!-- css -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/memly.css" rel="stylesheet" type="text/css" >

	</head>
	<body class="bk-shironeri">

	<!-- navbar -->
	<nav class="navbar navbar-default navbar-fixed-top bk-nadeshiko" >
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
        			<img class="img-logo" alt="Memly" src="img/logo.png">
        		</a>
        	</div>
        	<!-- ログインユーザーの顔写真 -->
        	<!-- <div class="collapse navbar-collapse" id="navbar-collapse1">
      			ここにボディパーツを入れる
    		</div> -->
        </div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="col-sm-3 left-content">.col-sm-3

			</div>
			<div class="col-sm-6 center-content">
				<?php
				$message = "Hello Memly";
				echo "<h1>$message</h1>";
				?>
			</div>
			<div class="col-sm-3 right-content">.col-sm-3
			</div>
		</div>

    </div>




	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
