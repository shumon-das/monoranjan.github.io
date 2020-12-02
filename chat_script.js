
$(document).ready(function(){
  $("#chat_submit").click(function(e){
    e.preventDefault();
    var sent_message = $("#inpbox").val();
    var user_id = $("#user_id").val();

    $.ajax({
      url:"chat_message_load.php",
      type:"post",
      data:{
        sent_message:sent_message,
        user_id:user_id
      },
      success:function(data){
        $("#message").html(data);
        $("#inpbox").val('');
      }
    });      
  });
});

$(document).ready(function(){
  setTimeout(function() {
    var sent_message = $("#inpbox").val();
    var user_id = $("#user_id").val();

    $.ajax({
      url:"chat_message_load.php",
      type:"post",
      data:{
        sent_message:sent_message,
        user_id:user_id
      },
      success:function(data){
        $("#message").html(data);
        $("#inpbox").val('');
      }
    }); 
  }, 1000);
});

function getChatMessage(){
  $.ajax({
    url:"get_chat_message.php",
    success:function(data){
      $("#message").html(data);
    }
  })
}
setInterval(function(){
  getChatMessage();
},5000);


function updateUserStatus(){
  $.ajax({
    url:"update_user_status.php",
    success:function(){

    }
  })
}
setInterval(function(){
  updateUserStatus();
},5000);
