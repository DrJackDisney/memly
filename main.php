<!DOCTYPE html>
<html ng-app="MainApp">
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
	<body class="bk-shironeri" ng-controller="MainAppController">

	<!-- navbar -->
	<nav class="navbar navbar-default navbar-fixed-top bk-nadeshiko" >
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="main.php">
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
			<div class="col-sm-3 left-content bk-nadeshiko-theme4">.col-sm-3

			</div>
			<div class="col-sm-6 center-content">
				<div class="post-box panel">
					<textarea id="post-box-textarea" class="post-box-textarea" name="post-box-textarea" rows="5" cols="50" title="思い出をシェアしましょう" placeholder="思い出をシェアしましょう" ng-model="postedMessage">
					</textarea>
					<button class="post-box-button" ng-click="showNewMessage()">投稿する</button>
				</div>
				<h1>{{newMessage}}</h1>

				<!--<?php
				$message = "Hello Memly";
				echo "<h1>$message</h1>";
				?>-->

			</div>
			<div class="col-sm-3 right-content bk-nadeshiko-theme5">.col-sm-3
			</div>
		</div>

    </div>




	<!-- scripts -->
	<script src="lib/angular/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/maincontroller.js"></script>

</body>
</html>
