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
	<body class="bk-shironer text-normali" ng-controller="MainAppController">

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
				<div class="timeline-box panel">
					<h1>{{newMessage}}</h1>

					<div class="feed">

						<div class="feed-header">
							<div class="feed-header-info">
								<div class="feed-header-info-avatar avatar-box">
									<img class="feed-header-info-avatar-img avatar-box-img" src="img/sample/sample-avatar.jpg">
								</div>
								<div class="feed-header-info-main">
									<div class="feed-header-info-main-name">
										<a href="#" class="link">稲葉 良子</a>
									</div>
									<div class="feed-header-info-main-time">
										<span class="text-hint">34秒前</span>
									</div>
								</div>
							</div>
							<div class="feed-header-option">
								<span class="glyphicon glyphicon-menu-down text-hint" aria-hidden="true"></span>
							</div>
						</div>

						<div class="feed-body">
							<div class="feed-body-comment">
								<span class="feed-body-comment">
									今日は大宮にあるたまひよ写真館に行ってきました。子供たちもお姉さん達の盛り上げに誘われて、終始楽しく撮影できました。
									綺麗な写真いっぱい取ってもらえました。
								</span>
							</div>
							<div class="feed-body-object">
								<img class="feed-body-object-image" src="img/sample/sample_photo.jpg">
							</div>

						</div>

						<div class="feed-reaction">
							<div class="feed-reaction-act">
								<div class="feed-reaction-act-icon">
									<span class="feed-reaction-act-icon-heart glyphicon glyphicon-heart"></span>
								</div>
								<div class="feed-reaction-act-users">
									<img class="feed-reaction-act-users avatar-box-img-xs" src="img/sample/sample-avatar.jpg">
								</div>
							</div>
						</div>

						<div class="feed-operation">
							<div class="feed-operation-button text-hint">
								<span class="feed-operation-button-icon glyphicon glyphicon-comment"></span>
								<span class="feed-operation-button-text">コメントする</span>

							</div>
							<div class="feed-operation-button text-hint">
								<span class="feed-operation-button-icon glyphicon glyphicon-heart"></span>
								<span class="feed-operation-button-text">かわいい！</span>

							</div>
							<!--
							<div class="feed-operation-button text-hint">
								<span class="feed-operation-button-icon"></span>
								<span class="feed-operation-button-text">シェアする</span>
							</div>
							 -->
						</div>
					</div>
				</div>

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
