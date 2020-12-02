$(document).ready(function(){
    $("#trs_phone").on('keyup',function(){
      var email = $("#trs_mail").val();
      var trs_id = $("#trs_id").val();
      var trs_phone = $("#trs_phone").val();
      $("#invoice_email_address").html(email);
      $("#invoice_trs_id").html(trs_id);
      $("#invoice_phone").html(trs_phone);
      $(".msgall").hide();
    });
  });
 $(document).ready(function(){
    $("#trs_mail").on('keyup',function(){
      var email = $("#trs_mail").val();
      var trs_id = $("#trs_id").val();
      var trs_phone = $("#trs_phone").val();
      $("#invoice_email_address").html(email);
      $("#invoice_trs_id").html(trs_id);
      $("#invoice_phone").html(trs_phone);
      $(".msgall").hide();
    });
  });
  $(document).ready(function(){
    $("#trs_id").on('keyup',function(){
      var email = $("#trs_mail").val();
      var trs_id = $("#trs_id").val();
      var trs_phone = $("#trs_phone").val();
      $("#invoice_email_address").html(email);
      $("#invoice_trs_id").html(trs_id);
      $("#invoice_phone").html(trs_phone);
      $(".msgall").hide();
    });
  });
 //validation
 $("#on-submit").click(function(){
      var given_input = $("#given_input").val();
      var email = $("#trs_mail").val();
      var trs_id = $("#trs_id").val();
      var trs_phone = $("#trs_phone").val();
      if(given_input == '' || given_input == '0' || email == '' || trs_id == '' || trs_phone == ''){
          $(".msgall").show();    
              return false;
      }
 });
 $("#trs_mail").keyup(function(){$(".msg2").hide();});
 $("#trs_id").keyup(function(){$(".msg3").hide();});