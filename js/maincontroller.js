var app = angular.module('MainApp', []);
app.controller('MainAppController', function($scope){
	// ここでModelとのやりとりなど。

	$scope.feeds = [
		{
			avatarImg : 'img/sample/sample-avatar.jpg',
			posterName : '稲葉 良子',
			posterTime : '34秒前',
			feedComment : '今日は大宮にあるたまひよ写真館に行ってきました。子供たちもお姉さん達の盛り上げに誘われて、終始楽しく撮影できました。綺麗な写真いっぱい取ってもらえました。',
			feedObjImg : 'img/sample/sample_photo.jpg',
			reactIcon : 'glyphicon-heart',
			reactAvatar : 'img/sample/sample-avatar.jpg'
		}
	]


	$scope.addFeed = function(){
		var msg = $scope.postedMessage;
		if(msg){
			var feed = {
					avatarImg : 'img/sample/sample-avatar.jpg',
					posterName : '稲葉 良子',
					posterTime : '2秒前',
					feedComment : msg,
					feedObjImg : '',
					reactIcon : '',
					reactAvatar : ''
			}
			$scope.feeds.unshift(feed);
			$scope.postedMessage = '';

		}
	}
});