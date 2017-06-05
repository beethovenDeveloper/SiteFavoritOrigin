$(document).ready(function () {
  $(".container1").show();
  $(".container2").hide();
  $(".container3").hide();
});


$(".buttonFruct").bind("click",function(){
  $(".container1").show();
  $(".container2").hide();
  $(".container3").hide();
});

$(".buttonZerno").bind("click",function(){
  $(".container1").hide();
  $(".container2").show();
  $(".container3").hide();
});


$(".buttonUslugi").bind("click",function(){
  $(".container1").hide();
  $(".container2").hide();
  $(".container3").show();
});

/*$(".Contacts").bind("click", function(){
  $(".contact").hide();
});
*/
/*var app=angular.module("app",[]);

app.controller("Contact",function(){
  this.luckContact = fucntion(){
       $(".contact").hide();
  };

});
*/
