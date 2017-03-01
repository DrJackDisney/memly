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
						<button class="btn post-box-operation-button" ng-click="addFeed()">投稿する</button>
					</div>
				</div>


				<!-- Timeline Box -->
				<div class="timeline-box panel">
					<h1>{{newMessage}}</h1>

					<div ng-repeat="feed in feeds" class="feed">

						<div class="feed-header">
							<div class="feed-header-info">
								<div class="feed-header-info-avatar avatar-box">
									<img class="feed-header-info-avatar-img avatar-box-img" ng-src="{{feed.avatarImg}}">
								</div>
								<div class="feed-header-info-main">
									<div class="feed-header-info-main-name">
										<a href="#" class="link">{{feed.posterName}}</a>
									</div>
									<div class="feed-header-info-main-time">
										<span class="text-hint">{{feed.posterTime}}</span>
									</div>
								</div>
							</div>
							<div class="feed-header-option">
								<div class="dropdown feed-header-option-dropdown">
									<button class="btn feed-header-option-dropdown-btn" type="button" id="feedMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<span class="feed-header-option-dropdown-btn-icon glyphicon glyphicon-menu-down text-hint" aria-hidden="true"></span>
									</button>
									<ul class="dropdown-menu feed-header-option-dropdown-menu" aria-labelledby="feedMenu">
										<li><a href="#">画像を保存</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">投稿を編集</a></li>
										<li><a href="#">日付を変更</a></li>
									    <li role="separator" class="divider"></li>
									    <li><a href="#">投稿を削除</a></li>
									</ul>
								</div>

							</div>
						</div>

						<div class="feed-body">
							<div class="feed-body-comment">
								<span class="feed-body-comment">{{feed.feedComment}}</span>
							</div>
							<div class="feed-body-object" ng-if="feed.feedObjImg != ''">
								<img class="feed-body-object-image" ng-src="{{feed.feedObjImg}}">
							</div>

						</div>

						<div class="feed-reaction">
							<div class="feed-reaction-act">
								<div class="feed-reaction-act-icon" ng-if="feed.reactIcon != ''">
									<span class="feed-reaction-act-icon-heart glyphicon {{feed.reactIcon}}"></span>
								</div>
								<div class="feed-reaction-act-users" ng-if="feed.reactAvatar != ''">
									<img class="feed-reaction-act-users avatar-box-img-xs" ng-src="{{feed.reactAvatar}}">
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
