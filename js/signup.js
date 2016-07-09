$(document).ready(function () {
  $('#signup').validate({
    rules:{
      email:{
        required: true,
        email: true
      },
      password: "required",
      cpassword:{
        required: true,
        equalTo: "#password"
      },
      image: "required"
    },
    messages:{
      image: "Please Upload your profile photo"
    },
    submitHandler:function (form){
      var formData = new FormData($('#signup')[0]);
      $.ajax({
        url:"ajax/signup.php",
        type:"POST",
        data:formData,
        processData: false,
        contentType: false,
        async: false,
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
