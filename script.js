$(function () {
  console.log('JQuery is ready!');
});

$(document).ready(function(){
  $("#hide").click(function(){
    $("ul").hide();
  });
  $("#show").click(function(){
    $("ul").show();
  });
});
