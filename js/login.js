$(document).ready(function(){
  $("#login").validate({
    rules:{
      username:{
        required: true,
        email: true
      },
      password:"required"
    },
    messages:{
      username:{
        required: "Please Enter Username",
        email: "Please enter a valid Email"
      },
      password:"Please Enter Password"
    },
    submitHandler:function(form){
      $.ajax({
        url:"ajax/login.php",
        type:"POST",
        data:$("#login").serialize(),
        success:function(result){
          if(result == 1){
          }
          else {
            $('.status').html(result);
          }
        }
      });
    }
  });
});
