var app=angular.module("app",[]);

app.controller("Contact",function($scope){
  $scope.luckContact = function(){
  	if( $(".contact").is(":hidden"))
  	{
       $(".contact").show();
  	}
  	else
  	{
  		$(".contact").hide();
  	}
  }

});