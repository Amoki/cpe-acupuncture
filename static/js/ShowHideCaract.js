$(function(){

  $("#CbM").hide();
  $("#CbTf").hide();
  $("#CbL").hide();


  $(".rbTypePatho").click(function () {
    switch ($(this).val()) {
     case "m":
     $("#CbM").show();
     $("#CbL").hide();
     $("#CbTf").hide();
     break;
     case "tf":
     $("#CbTf").show();
     $("#CbM").hide();
     $("#CbL").hide();
     break;
     case "l":
     $("#CbL").show();
     $("#CbM").hide();
     $("#CbTf").hide();
     break;
     default :
     $("#CbM").hide();
     $("#CbTf").hide();
     $("#CbL").hide();
   }
 });

});