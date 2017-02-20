var app = angular.module('MainApp', []);
app.controller('MainAppController', function($scope){
	// ここでModelとのやりとりなど。
	$scope.showNewMessage = function(){
		var msg = $scope.postedMessage;
		$scope.newMessage = msg;
	}
});