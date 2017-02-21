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

        	<div class="nav navbar-nav navbar-right header-right">
        		<!-- ログインユーザーの顔写真 -->
        		<div class="navbar-avatar avatar-box">
					<img class="navbar-avatar avatar-box-img" src="img/sample/sample-avatar.jpg">
				</div>
        	</div>

        	<!-- <div class="collapse navbar-collapse" id="navbar-collapse1">
      			ここにボディパーツを入れる
    		</div> -->
        </div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="col-sm-3 left-content bk-nadeshiko-theme2">.col-sm-3

			</div>
			<div class="col-sm-6 center-content">
				<div class="post-box panel">
					<div class="post-box-edit">
						<div class="post-box-edit-left">
							<!-- アバターアイコン -->
							<div class="post-box-edit-left-avatar avatar-box">
								<img class="post-box-edit-left-avatar-img avatar-box-img" src="img/sample/sample-avatar.jpg">
							</div>
						</div>
						<div class="post-box-edit-right">
							<textarea id="post-box-edit-right-textarea" class="post-box-edit-right-textarea" name="post-box-edit-right-textarea" rows="5" cols="50" title="思い出をシェアしましょう" placeholder="思い出をシェアしましょう" ng-model="postedMessage"></textarea>
						</div>
					</div>
					<div class="post-box-operation">
						<button class="post-box-operation-button" ng-click="showNewMessage()">投稿する</button>
					</div>
				</div>
				<h1>{{newMessage}}</h1>

				<!--<?php
				$message = "Hello Memly";
				echo "<h1>$message</h1>";
				?>-->

			</div>
			<div class="col-sm-3 right-content bk-nadeshiko-theme2">.col-sm-3
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
