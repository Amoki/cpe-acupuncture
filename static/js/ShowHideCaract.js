$(function(){
   //  $("#CbM").hide();
   //  $("#CbTf").hide();
   //  $("#CbL").hide();
   //  $('#type_patho').change(function(){
   //      if($('#type_patho').val() == 'm') {
   //          $("#caract").show();
			// $("#CbM").show();
   //      } 
   //      if($('#type_patho').val() == 'tf') {
   //          $("#caract").show();
			// $("#CbTf").show();
   //      }
   //      if($('#type_patho').val() == 'l') {
   //          $("#caract").show();
			// $("#CbL").show();
   //      }
   //  });
$("#CbM").attr('disabled',true);
$("#Cbtf").attr('disabled',true);
$("#CbL").attr('disabled',true);

   switch ($('#type_patho').val()) {
            case "m":
                $("#CbM").attr('disabled',false);
                break;
            case "tf":
            	$("#Cbtf").attr('disabled',false);
                break;
            case "l":
                $("#CbL").attr('disabled',false);
                break;
        } 
});
});